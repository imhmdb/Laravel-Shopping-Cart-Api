<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CartProvider extends ServiceProvider
{

    /**
     * indecates if loading of the provider is deferred
     *
     * @var boolean
     */
	protected $defer = false;


    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
