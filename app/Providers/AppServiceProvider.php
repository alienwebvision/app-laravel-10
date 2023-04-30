<?php

namespace App\Providers;

use App\Repositories\SupportRepositoryInterface;
use Illuminate\Support\ServiceProvider;
use App\Repositories\SupportEloquentORM;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            SupportRepositoryInterface::class,
            SupportEloquentORM::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
