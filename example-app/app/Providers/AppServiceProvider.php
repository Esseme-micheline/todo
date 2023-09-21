<?php
namespace App\Providers;
use Laravel\Sanctum\Sanctum;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    
    public function register()
{
    Sanctum::ignoreMigrations();
}

    public function boot(): void
    {
        //
    }
}
