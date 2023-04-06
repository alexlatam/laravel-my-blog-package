<?php

namespace Alexlatam\Crud;

use Illuminate\Support\ServiceProvider;

class CrudServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // Register our controller
        $this->app->make('Alexlatam\Crud\Http\Controllers\TasksController');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Load our routes file
        $this->loadRoutesFrom(__DIR__.'/routes/routes.php');
        // Load our migrations from the migrations folder
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        // Load our views from the views folder
        $this->loadViewsFrom(__DIR__.'/views', 'package-crud');
        // Publish our views from our view folder to the resources/views/vendor/package-crud app folder
        $this->publishes([
            __DIR__.'/views' => resource_path('views/vendor/package-crud'),
        ]);

    }
}
