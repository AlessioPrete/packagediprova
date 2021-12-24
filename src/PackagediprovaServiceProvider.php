<?php

namespace Alessioprete\Packagediprova;

use Illuminate\Support\ServiceProvider;

class PackagediprovaServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'alessioprete');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'alessioprete');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/packagediprova.php', 'packagediprova');

        // Register the service the package provides.
        $this->app->singleton('packagediprova', function ($app) {
            return new Packagediprova;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['packagediprova'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/packagediprova.php' => config_path('packagediprova.php'),
        ], 'packagediprova.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/alessioprete'),
        ], 'packagediprova.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/alessioprete'),
        ], 'packagediprova.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/alessioprete'),
        ], 'packagediprova.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
