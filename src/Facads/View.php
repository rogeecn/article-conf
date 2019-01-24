<?php

namespace rogeecn\ArticleConf\Facads;


use Illuminate\Support\Facades\Facade;

/**
 * Class View
 *
 * @method  static string path($domain)
 * @method  static string compilePath($domain)
 * @method  static string domainPath($domain)
 *
 */
class View extends Facade
{

    protected static function getFacadeAccessor()
    {
        return \rogeecn\ArticleConf\Classes\View::class;
    }
}
