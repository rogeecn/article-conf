<?php

namespace rogeecn\ArticleConf;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use rogeecn\ArticleConf\Classes\Content;
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
        $this->publishes([__DIR__ . '/Config/category.php' => config_path('article.category.php'),], 'conf.category');
        $this->publishes([__DIR__ . '/Config/replace.image.php' => config_path('article.replace.image.php'),], 'conf.replace.image');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/Config/category.php', 'conf.category');
        $this->mergeConfigFrom(__DIR__ . '/Config/replace.image.php', 'conf.replace');


        $this->app->singleton(\rogeecn\ArticleConf\Classes\Category::class, function () {
            return new Category();
        });

        $this->app->singleton(\rogeecn\ArticleConf\Classes\Content::class, function () {
            return new Content();
        });
    }
}
