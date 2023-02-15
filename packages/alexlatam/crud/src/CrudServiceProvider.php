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

        $this->loadViewsFrom(__DIR__.'/views', 'package-crud');

    }
}
