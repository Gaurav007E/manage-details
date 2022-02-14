<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\MainTitleInterface;
use App\Repositories\MainTitleRepository;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(MainTitleInterface::class, MainTitleRepository::class);
        
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
