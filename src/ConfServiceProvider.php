<?php

namespace rogeecn\ArticleConf;

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;
use rogeecn\ArticleConf\Classes\Content;
use rogeecn\ArticleConf\Classes\Domain;
use rogeecn\ArticleConf\Classes\View;
use rogeecn\ArticleConf\Facads\Category;

class ConfServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(Router $router)
    {
        $this->publishes([__DIR__ . '/Config/category.php' => config_path('article/category.php'),], 'conf.category');
        $this->publishes([__DIR__ . '/Config/domain.php' => config_path('article/domain.php'),], 'conf.domain');
        $this->publishes([__DIR__ . '/Config/replace.image.php' => config_path('article/replace.php'),], 'conf.replace');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/Config/category.php', 'conf.category');
        $this->mergeConfigFrom(__DIR__ . '/Config/replace.php', 'conf.replace');
        $this->mergeConfigFrom(__DIR__ . '/Config/domain.php', 'conf.domain');


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
