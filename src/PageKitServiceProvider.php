<?php

namespace ShawnSandy\PageKit;

use Illuminate\Support\ServiceProvider;
use ShawnSandy\PageKit\Classes\Breadcrumbs;


class PageKitServiceProvider extends ServiceProvider
{

    /**
     * Perform post-registration booting of services.
     *
     * @return null
     */
    public function boot()
    {
        if (!$this->app->routesAreCached()) {
            require __DIR__ . '/routes.php';
        }

        $this->loadViewsFrom(__DIR__ . '/resources/views/pagekit', 'page');

        $this->publishes(
            [
                __DIR__ . '/resources/views/pagekit' => resource_path('views/vendor/page'),
                __DIR__ . '/resources/assets' => resource_path('assets/sass/pagekit')],
            'pagekit-views'
        );

        $this->publishes(
            [
                __DIR__ . '/public/css/pagekit' => public_path('css/pagekit'),
                __DIR__ . '/public/css/fonts' => public_path('css/pagekit/fonts'),
                __DIR__ . '/public/img' => public_path('img'),
                __DIR__ . '/public/packages' => public_path('packages')

            ], 'pagekit-assets'
        );

        $this->publishes(
            [__DIR__ . '/config/pagekit.php' => config_path('pagekit.php')],
            'pagekit-config'
        );

    }

    /**
     * Register any package services.
     *
     * @return null
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/config/pagekit.php', 'pagekit'
        );
        $this->app->bind('Breadcrumbs', function(){
           return new Breadcrumbs();
        });
    }


}
