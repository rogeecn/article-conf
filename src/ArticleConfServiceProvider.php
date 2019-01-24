<?php

namespace Rogeecn\ArticleConf;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;

class ArticleConfServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(Router $router)
    {
        $router->aliasMiddleware('ArticleConf', \Rogeecn\ArticleConf\Middleware\ArticleConfMiddleware::class);

        $this->publishes([
            __DIR__.'/Config/ArticleConf.php' => config_path('ArticleConf.php'),
        ], 'ArticleConf_config');

        $this->loadRoutesFrom(__DIR__ . '/Routes/web.php');

        $this->loadMigrationsFrom(__DIR__ . '/Migrations');

        $this->loadTranslationsFrom(__DIR__ . '/Translations', 'ArticleConf');

        $this->publishes([
            __DIR__ . '/Translations' => resource_path('lang/vendor/ArticleConf'),
        ]);

        $this->loadViewsFrom(__DIR__ . '/Views', 'ArticleConf');

        $this->publishes([
            __DIR__ . '/Views' => resource_path('views/vendor/ArticleConf'),
        ]);

        $this->publishes([
            __DIR__ . '/Assets' => public_path('vendor/ArticleConf'),
        ], 'ArticleConf_assets');

        if ($this->app->runningInConsole()) {
            $this->commands([
                \Rogeecn\ArticleConf\Commands\ArticleConfCommand::class,
            ]);
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
            __DIR__ . '/Config/ArticleConf.php', 'ArticleConf'
        );
    }
}
