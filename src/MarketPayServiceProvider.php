<?php

namespace MarketPay;

use MarketPay\RedsysPayIn;
use MarketPay\MarketPayApi;
use Illuminate\Support\ServiceProvider;

class MarketPayServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('marketpay', function ($app)
        {
            $config = $app['config']->get('services.marketpay');

            $api = new MarketPayApi();

            $api->Config->ClientId        = $config['key'];
            $api->Config->ClientPassword  = $config['secret'];
            $api->Config->TemporaryFolder = storage_path('app');
            $api->Config->DebugMode       = false;

            if ($config['domain']) $api->Config->BaseUrl = $config['domain'];

            return $api;
        });
    }

}