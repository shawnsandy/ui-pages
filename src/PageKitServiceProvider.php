<?php
    namespace ShawnSandy\PageKit;

    use Illuminate\Support\ServiceProvider;
    use ShawnSandy\PageKit\Classes\Breadcrumbs;
    use ShawnSandy\PageKit\Classes\Markdown;

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
                include __DIR__ . '/routes.php';
            }

            $this->loadViewsFrom(__DIR__ . '/resources/views/pagekit', 'page');

            $this->publishes(
                [
                    __DIR__ . '/resources/views/pagekit' => resource_path('views/vendor/page'),
                ], 'pagekit-views'
            );

            $this->publishes(
                [
                    __DIR__ . '/resources/views/pagekit' => resource_path('views/vendor/page')
                ], 'pagekit-enveditor'
            );

            $this->publishes(
                [
                    __DIR__ . '/public/css/pagekit' => public_path('css/pagekit'),
                    __DIR__ . '/public/css/fonts' => public_path('css/pagekit/fonts'),
                    __DIR__ . '/public/img' => public_path('img'),
                    __DIR__ . '/public/assets' => public_path('assets')
                ], 'pagekit-assets'
            );

            $this->publishes(
                [__DIR__ . '/config/pagekit.php' => config_path('pagekit.php')],
                'pagekit-config'
            );

            if (!$this->app->runningInConsole()) :
                include_once __DIR__ . '/Helpers/helper.php';
            endif;

            include_once __DIR__ . "/components/components.php";

            $this->pageTheme();


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
            $this->app->bind(
                'Breadcrumbs', function () {
                return new Breadcrumbs();
            }
            );

            $this->app->bind(
                'MKD', function () {
                return new Markdown();
            }
            );

            $this->app->bind('Pages', function () {
                return new Page();
            });

        }


        /**
         * get the default theme
         */
        public function pageTheme()
        {


            view()->composer("*", function ($view) {
                /* get the theme if set in config */
                $theme = config("pagekit.theme", null);
                /* if not theme is set in the config */
                /* check the theme folder if exist or use the theme in package*/
                if (!$theme):
                    if (view()->exists("theme.page.index")):
                        $theme = "theme.page.";
                    else :
                        $theme = "page::";
                    endif;
                endif;

                view()->share('pageTheme', $theme);

            });

        }


    }
