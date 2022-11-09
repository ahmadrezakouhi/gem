<?php

namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use App\Library\Http\HttpClient;

class HttpServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(HttpClient::class, function ($app) {
            return new HttpClient([
                'UserName' => 'BLUser11001',
                'PassWord' => '91479147'
            ], 'https://api.safermehr.ir');
        });
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
