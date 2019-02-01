<?php

namespace rogeecn\ArticleConf\Facads;


use Illuminate\Support\Facades\Facade;
use rogeecn\ArticleConf\Classes\CategoryItem;

/**
 * Class Category
 *
 * @method  static CategoryItem fromID($id)
 * @method  static CategoryItem fromAlias($alias)
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
