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
        $this->app->make('Alexlatam\Crud\Http\Controllers\TaskController');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
