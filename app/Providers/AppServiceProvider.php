<?php

namespace App\Providers;

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
        $this->app->bind('App\Services\User\Interfaces\UserServiceInterface', 'App\Services\User\UserService');
        $this->app->bind('App\Services\User\Interfaces\ProductServiceInterface', 'App\Services\User\ProductService');
        $this->app->bind('App\Services\ShopAssistant\Interfaces\ShopAssistantServiceInterface', 'App\Services\ShopAssistant\ShopAssistantService');
        $this->app->bind('App\Services\ShopAssistant\Interfaces\ProductServiceInterface', 'App\Services\ShopAssistant\ProductService');
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
