<?php

namespace Scaffold\ScaffoldGenerator\Commands;

use File;
use Illuminate\Console\Command;

class ScaffoldCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scaffold:generate
                            {name : The name of the Scaffold.}
                            {--fields= : Fields name for the form & model.}
                            {--route=yes : Include Scaffold route to routes.php? yes|no.}
                            {--pk=id : The name of the primary key.}
                            {--view-path= : The name of the view path.}
                            {--namespace= : Namespace of the controller.}
                            {--route-group= : Prefix of the route group.}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate Scaffold including controller, model, views & migrations.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $name = $this->argument('name');
        $modelName = str_singular($name);
        $migrationName = str_plural(strtolower($name));
        $tableName = $migrationName;
        $viewName = strtolower($name);

        $routeGroup = $this->option('route-group');
        $routeName = ($routeGroup) ? $routeGroup . '/' . strtolower($name) : strtolower($name);

        $controllerNamespace = ($this->option('namespace')) ? $this->option('namespace') . '\\' : '';

        if ($this->option('fields')) {
            $fields = $this->option('fields');
            $primaryKey = $this->option('pk');
            $viewPath = $this->option('view-path');

            $fieldsArray = explode(',', $fields);
            $requiredFields = '';
            $requiredFieldsStr = '';

            foreach ($fieldsArray as $item) {
                $fillableArray[] = preg_replace("/(.*?):(.*)/", "$1", trim($item));

                $itemArray = explode(':', $item);
                $currentField = trim($itemArray[0]);
                $requiredFieldsStr .= (isset($itemArray[2])
                    && (trim($itemArray[2]) == 'req'
                        || trim($itemArray[2]) == 'required'))
                ? "'$currentField' => 'required', " : '';
            }

            $commaSeparetedString = implode("', '", $fillableArray);
            $fillable = "['" . $commaSeparetedString . "']";

            $requiredFields = ($requiredFieldsStr != '') ? "[" . $requiredFieldsStr . "]" : '';

            $this->call('scaffold:controller', ['name' => $controllerNamespace . $name . 'Controller', '--scaffold-name' => $name, '--model-name' => $modelName, '--view-path' => $viewPath, '--required-fields' => $requiredFields, '--route-group' => $routeGroup]);
            $this->call('scaffold:model', ['name' => $modelName, '--fillable' => $fillable, '--table' => $tableName]);
            $this->call('scaffold:migration', ['name' => $migrationName, '--schema' => $fields, '--pk' => $primaryKey]);
            $this->call('scaffold:view', ['name' => $viewName, '--fields' => $fields, '--view-path' => $viewPath, '--route-group' => $routeGroup]);

        } else {
            $this->call('make:controller', ['name' => $controllerNamespace . $name . 'Controller']);
            $this->call('make:model', ['name' => $modelName]);
        }

        // Updating the Http/routes.php file
        $routeFile = app_path('Http/routes.php');
        if (file_exists($routeFile) && (strtolower($this->option('route')) === 'yes')) {
            $controller = ($controllerNamespace != '') ? $controllerNamespace . '\\' . $name . 'Controller' : $name . 'Controller';

            if (\App::VERSION() >= '5.2') {
                $isAdded = File::append($routeFile,
                    "\nRoute::group(['middleware' => ['web']], function () {"
                    . "\n\tRoute::resource('" . $routeName . "', '" . $controller . "');"
                    . "\n});"
                );
            } else {
                $isAdded = File::append($routeFile, "\nRoute::resource('" . $routeName . "', '" . $controller . "');");
            }

            if ($isAdded) {
                $this->info('Scaffold/Resource route added to ' . $routeFile);
            } else {
                $this->info('Unable to add the route to ' . $routeFile);
            }
        }
    }

}
