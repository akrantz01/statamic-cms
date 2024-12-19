<?php

namespace Statamic\Providers;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use Spatie\Csp\AddCspHeaders;

class CspServiceProvider extends ServiceProvider
{
    protected $config = __DIR__."/../../config/csp.php";

    public function boot()
    {
        $this->app->booted(function () {
            $this->app
                ->make(Router::class)
                ->pushMiddlewareToGroup('statamic.cp', AddCspHeaders::class);
        });

        $this->publishes([$this->config => config_path("csp.php")], 'statamic.csp');
    }

    public function register()
    {
        $this->mergeConfigFrom($this->config, "csp");
    }
}
