<?php

namespace Shuhrat26\ArtisanForm;

use Illuminate\Support\ServiceProvider;

class ArtisanFormServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
//         $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'shuhrat26');
         $this->loadViewsFrom(__DIR__.'/../resources/views', 'shuhrat26');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
         $this->loadRoutesFrom(__DIR__.'/routes.php');

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
        $this->mergeConfigFrom(__DIR__.'/../config/artisan-form.php', 'artisan-form');

        // Register the service the package provides.
        $this->app->singleton('artisan-form', function ($app) {
            return new ArtisanForm;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['artisan-form'];
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
            __DIR__.'/../config/artisan-form.php' => config_path('artisan-form.php'),
        ], 'artisan-form.config');

        // Publishing the views.
       /* $this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/shuhrat26'),
        ], 'artisan-form.views');*/

        // Publishing assets.
//        $this->publishes([
//            __DIR__.'/../resources/assets' => public_path('vendor/shuhrat26'),
//        ], 'artisan-form.views');

        // Publishing the translation files.
//        $this->publishes([
//            __DIR__.'/../resources/lang' => resource_path('lang/vendor/shuhrat26'),
//        ], 'artisan-form.views');

        // Registering package commands.
        // $this->commands([]);
    }
}
