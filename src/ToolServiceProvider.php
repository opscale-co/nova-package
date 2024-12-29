<?php

namespace :namespace_vendor\:namespace_tool_name;

use Laravel\Nova\Events\ServingNova;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use :namespace_vendor\:namespace_tool_name\Http\Middleware\Authorize;
use Laravel\Nova\Nova;

class ToolServiceProvider extends ServiceProvider
{
    public function boot()
    {
        /*$this->loadConfigs();
        $this->loadCommands();
        $this->loadMigrations();

        Nova::serving(function (ServingNova $event) {
            $this->loadResources();
            $this->loadRoutes();
        });*/
    }

    public function register()
    {
        //
    }

    /*protected function loadConfigs()
    {
        $filename = '';
        $this->publishes([
            __DIR__."/../config/$filename" => config_path($filename),
        ]);
    }

    protected function loadCommands()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([]);
        }
    }

    protected function loadMigrations()
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        $this->publishesMigrations([
            __DIR__.'/../database/migrations' => database_path('migrations'),
        ]);
    }

    protected function loadResources()
    {
        Nova::resources([]);
    }

    protected function loadRoutes()
    {
        if ($this->app->routesAreCached()) {
            return;
        }

        Route::middleware(['nova', Authorize::class])
                ->prefix('nova-vendor/:vendor/:package_name')
                ->group(__DIR__.'/../routes/api.php');
    }*/
}
