<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Role;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('role', function ($app) {
            return new Role();
        });
    }

    public function boot()
    {
        //
    }
}
