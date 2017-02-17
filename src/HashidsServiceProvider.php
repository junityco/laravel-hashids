<?php

namespace Junity\Hashids;

use Hashids\Hashids;
use Illuminate\Support\ServiceProvider;

class HashidsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
    	if ($this->app->runningInConsole()) {
	        $this->publishes([
		        __DIR__ . '/../config/hashids.php' => config_path('hashids.php'),
		    ], 'config');
    	}
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    	$this->mergeConfigFrom(
	        __DIR__.'/../config/hashids.php', 'hashids'
	    );

        $this->app->singleton(Hashids::class, function ($app) {
        	$config = $app->config->get('hashids');

            return new Hashids($config['salt'], $config['length'], $config['alphabet']);
        });
    }
}
