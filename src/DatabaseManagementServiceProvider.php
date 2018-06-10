<?php

namespace PointRed\LaravelDatabaseManagement;

use Illuminate\Support\ServiceProvider;
use PointRed\LaravelDatabaseManagement\Console\Commands\GetDatabaseSize;

class DatabaseManagementServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // include helpers file to the project
        $helpers_file = __DIR__ . '/Helpers/helpers.php';
        if (file_exists($helpers_file)) {
            require_once($helpers_file);
        }
    }
}
