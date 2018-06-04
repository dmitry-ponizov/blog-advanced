<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class SuperServiceProvider extends ServiceProvider
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
       $this->app()->bind(\SuperComponent::class, function (){
           return new \SuperComponent('inteliligence');
       });
    }
}
