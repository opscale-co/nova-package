<?php

namespace :namespace_vendor\:namespace_tool_name;

use Laravel\Nova\Events\ServingNova;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use :namespace_vendor\:namespace_tool_name\Http\Middleware\Authorize;
use Laravel\Nova\Nova;
use Illuminate\Contracts\Support\DeferrableProvider;

class ToolServiceProvider extends ServiceProvider implements DeferrableProvider
{
    public function boot()
    {
        // Remember: https://laravel.com/docs/11.x/providers#writing-service-providers
    }

    public function register()
    {
        $this->app->singleton(Tool::class, function ($app) {
            return new Tool();
        });

        /*$this->loadResources();
        $this->loadRoutes();

        if ($this->app->runningInConsole()) {
            $this->loadConfigs();
            $this->loadCommands();
            $this->loadMigrations();
        }*/
    }

    /*protected function loadResources()
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
    }
                
    protected function loadConfigs()
    {
        $filename = ':package_name.php';
        $this->publishes([
            __DIR__."/../config/$filename" => config_path($filename),
        ]);
    }

    protected function loadCommands()
    {
        $this->commands([]);
    }

    protected function loadMigrations()
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        $this->publishesMigrations([
            __DIR__.'/../database/migrations' => database_path('migrations'),
        ]);
    }*/
}
