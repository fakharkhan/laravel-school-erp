<?php

namespace Scaffold\ScaffoldGenerator\Commands;

use Illuminate\Console\GeneratorCommand;

class ScaffoldControllerCommand extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scaffold:controller
                            {name : The name of the controler.}
                            {--scaffold-name= : The name of the Scaffold.}
                            {--model-name= : The name of the Model.}
                            {--view-path= : The name of the view path.}
                            {--required-fields= : Required fields for validations.}
                            {--route-group= : Prefix of the route group.}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new resource controller.';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Controller';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return config('scaffoldgenerator.custom_template')
        ? config('scaffoldgenerator.path') . '/controller.stub'
        : __DIR__ . '/../stubs/controller.stub';
    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string $rootNamespace
     *
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Http\Controllers';
    }

    /**
     * Build the model class with the given name.
     *
     * @param  string  $name
     *
     * @return string
     */
    protected function buildClass($name)
    {
        $stub = $this->files->get($this->getStub());

        $viewPath = $this->option('view-path') ? $this->option('view-path') . '.' : '';
        $scaffoldName = strtolower($this->option('scaffold-name'));
        $scaffoldNameSingular = str_singular($scaffoldName);
        $modelName = $this->option('model-name');
        $routeGroup = ($this->option('route-group')) ? $this->option('route-group') . '/' : '';

        $validationRules = '';
        if ($this->option('required-fields') != '') {
            $validationRules = "\$this->validate(\$request, " . $this->option('required-fields') . ");\n";
        }

        return $this->replaceNamespace($stub, $name)
            ->replaceViewPath($stub, $viewPath)
            ->replaceScaffoldName($stub, $scaffoldName)
            ->replaceScaffoldNameSingular($stub, $scaffoldNameSingular)
            ->replaceModelName($stub, $modelName)
            ->replaceRouteGroup($stub, $routeGroup)
            ->replaceValidationRules($stub, $validationRules)
            ->replaceClass($stub, $name);
    }

    /**
     * Replace the viewPath for the given stub.
     *
     * @param  string  $stub
     * @param  string  $viewPath
     *
     * @return $this
     */
    protected function replaceViewPath(&$stub, $viewPath)
    {
        $stub = str_replace(
            '{{viewPath}}', $viewPath, $stub
        );

        return $this;
    }

    /**
     * Replace the scaffoldName for the given stub.
     *
     * @param  string  $stub
     * @param  string  $scaffoldName
     *
     * @return $this
     */
    protected function replaceScaffoldName(&$stub, $scaffoldName)
    {
        $stub = str_replace(
            '{{scaffoldName}}', $scaffoldName, $stub
        );

        return $this;
    }

    /**
     * Replace the scaffoldNameSingular for the given stub.
     *
     * @param  string  $stub
     * @param  string  $scaffoldNameSingular
     *
     * @return $this
     */
    protected function replaceScaffoldNameSingular(&$stub, $scaffoldNameSingular)
    {
        $stub = str_replace(
            '{{scaffoldNameSingular}}', $scaffoldNameSingular, $stub
        );

        return $this;
    }

    /**
     * Replace the modelName for the given stub.
     *
     * @param  string  $stub
     * @param  string  $modelName
     *
     * @return $this
     */
    protected function replaceModelName(&$stub, $modelName)
    {
        $stub = str_replace(
            '{{modelName}}', $modelName, $stub
        );

        return $this;
    }

    /**
     * Replace the routeGroup for the given stub.
     *
     * @param  string  $stub
     * @param  string  $routeGroup
     *
     * @return $this
     */
    protected function replaceRouteGroup(&$stub, $routeGroup)
    {
        $stub = str_replace(
            '{{routeGroup}}', $routeGroup, $stub
        );

        return $this;
    }

    /**
     * Replace the validationRules for the given stub.
     *
     * @param  string  $stub
     * @param  string  $validationRules
     *
     * @return $this
     */
    protected function replaceValidationRules(&$stub, $validationRules)
    {
        $stub = str_replace(
            '{{validationRules}}', $validationRules, $stub
        );

        return $this;
    }

}
