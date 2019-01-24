<?php

namespace rogeecn\ArticleConf\Facads;


use Illuminate\Support\Facades\Facade;

/**
 * Class Domain
 *
 * @method  static string toID($domain)
 *
 */
class Domain extends Facade
{

    protected static function getFacadeAccessor()
    {
        return \rogeecn\ArticleConf\Classes\Domain::class;
    }
}
