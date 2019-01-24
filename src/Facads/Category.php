<?php

namespace rogeecn\ArticleConf\Facads;


use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Facade;

/**
 * Class Category
 *
 * @method  static Collection fromID($id)
 * @method  static Collection fromAlias($alias)
 *
 * @package rogeecn\ArticleConf\Facads
 */
class Category extends Facade
{

    protected static function getFacadeAccessor()
    {
        return \rogeecn\ArticleConf\Classes\Category::class;
    }
}
