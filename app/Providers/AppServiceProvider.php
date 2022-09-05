<?php

namespace App\Providers;

use App\Repositories\Eloquent\DogRepository;
use App\Repositories\Eloquent\UserRepository;
use App\Repositories\interface\DogsRepositoryInterface;
use App\Repositories\interface\UserRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(DogsRepositoryInterface::class, DogRepository::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
