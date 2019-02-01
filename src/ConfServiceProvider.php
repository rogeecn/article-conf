<?php

namespace rogeecn\ArticleConf;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use rogeecn\ArticleConf\Classes\Content;
use rogeecn\ArticleConf\Classes\Domain;
use rogeecn\ArticleConf\Classes\View;
use rogeecn\ArticleConf\Classes\Category;

class ConfServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(Router $router)
    {
        $this->publishes([__DIR__ . '/Config/config.php' => config_path('article/conf.php'),], 'conf');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/Config/config.php', 'conf');


        $this->app->singleton(\rogeecn\ArticleConf\Classes\Category::class, function () {
            return new Category();
        });

        $this->app->singleton(\rogeecn\ArticleConf\Classes\Content::class, function () {
            return new Content();
        });

        $this->app->singleton(\rogeecn\ArticleConf\Classes\View::class, function () {
            return new View();
        });

        $this->app->singleton(\rogeecn\ArticleConf\Classes\Domain::class, function () {
            return new Domain();
        });

    }
}
