<?php

namespace AmbroseTheBuild\GhanaPhoneNumberValidator;

use Illuminate\Support\ServiceProvider;
use GhanaPhoneNumberValidator;

class GhanaPhoneNumberValidatorServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'ambrosethebuild');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'ambrosethebuild');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');
        // Register the routes in Service provider
        //$this->loadRoutesFrom(__DIR__.'/routes/web.php');
        

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
    public function register()
    {
        // $this->app->singleton('ghanaphonenumbervalidator', function ($app) {
        //     return new GhanaPhoneNumberValidator;
        // });

        // $this->app->bind('ghanaphonenumbervalidator', \GhanaPhoneNumberValidator::class);

        $this->mergeConfigFrom(__DIR__.'/../config/ghanaphonenumbervalidator.php', 'ghanaphonenumbervalidator');

        // Register the service the package provides.
        $this->app->bind('ghanaphonenumbervalidator', function () {
            return new GhanaPhoneNumberValidator;
        });

        
        
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['ghanaphonenumbervalidator'];
    }
    
    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/ghanaphonenumbervalidator.php' => config_path('ghanaphonenumbervalidator.php'),
        ], 'ghanaphonenumbervalidator.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/ambrosethebuild'),
        ], 'ghanaphonenumbervalidator.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/ambrosethebuild'),
        ], 'ghanaphonenumbervalidator.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/ambrosethebuild'),
        ], 'ghanaphonenumbervalidator.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
