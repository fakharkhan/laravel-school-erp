<?php

namespace Scaffold\ScaffoldGenerator;

use Illuminate\Support\ServiceProvider;

class ScaffoldGeneratorServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/scaffoldgenerator.php' => config_path('scaffoldgenerator.php'),
        ]);

        $this->publishes([
            __DIR__ . '/stubs/' => base_path('resources/scaffold-generator/'),
        ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->commands(
            'Scaffold\ScaffoldGenerator\Commands\ScaffoldCommand',
            'Scaffold\ScaffoldGenerator\Commands\ScaffoldControllerCommand',
            'Scaffold\ScaffoldGenerator\Commands\ScaffoldModelCommand',
            'Scaffold\ScaffoldGenerator\Commands\ScaffoldMigrationCommand',
            'Scaffold\ScaffoldGenerator\Commands\ScaffoldViewCommand'
        );
    }

}
