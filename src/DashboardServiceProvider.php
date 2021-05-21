<?php

namespace JDsWebService\AdminDashboardMaterialDark;

use Illuminate\Support\ServiceProvider;

class DashboardServiceProvider extends ServiceProvider {

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {

        if($this->app->runningInConsole()) {
            $this->registerPublishing();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands([
           Console\TestCommand::class,
        ]);
    }

    /**
     * Publishes the packages resources into the appropriate folders
     *
     * @return void
     */
    protected function registerPublishing() {
        $this->publishes([
            __DIR__.'/Resources/Assets/css/material-dashboard' => public_path('css/material-dashboard'),
            __DIR__.'/Resources/Assets/js/material-dashboard' => public_path('js/material-dashboard'),
            __DIR__.'/Resources/Views' => resource_path('views'),
        ], 'public');
    }
}