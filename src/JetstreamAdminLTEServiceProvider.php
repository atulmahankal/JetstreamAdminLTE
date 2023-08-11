<?php

namespace AtulMahankal\JetstreamAdminLte;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class JetstreamAdminLTEServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->configurePublishing();
        // $this->configureRoutes();
        $this->configureCommands();

        // $this->loadViewsFrom(__DIR__.'/resources/views', 'jetstreamadminlte');
    }

    /**
     * Configure publishing for the package.
     *
     * @return void
     */
    protected function configurePublishing()
    {
        if (! $this->app->runningInConsole()) {
            return;
        }

        $this->publishes([
            base_path('vendor/almasaeed2010/adminlte/dist') => public_path('vendor/adminlte'),
            base_path('vendor/almasaeed2010/adminlte/plugins') => public_path('vendor'),
        ], 'amadminlte-theme');

        $this->publishes([
            __DIR__.'/resources/views' => resource_path('views'),
        ], 'jetstreamadminlte-views');

        // $this->publishes([
        //     __DIR__.'/app/Http/Controllers' => app_path('Http/Controllers'),
        // ], 'jetstreamadminlte-controller');
    }

    /**
     * Configure the routes offered by the application.
     *
     * @return void
     */
    protected function configureRoutes()
    {
        Route::middleware([
            'auth:sanctum',
            // 'verified',
        ])->group(function () {
            // Route::resource('/users', \AtulMahankal\JetstreamAdminLte\Controllers\UserController::class);
        });
    }

    /**
     * Configure the commands offered by the application.
     *
     * @return void
     */
    protected function configureCommands()
    {
        if (! $this->app->runningInConsole()) {
            return;
        }

        $this->commands([
            Console\InstallCommand::class,
        ]);
    }
}
