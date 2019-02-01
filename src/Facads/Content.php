<?php

namespace rogeecn\ArticleConf\Facads;


use Illuminate\Support\Facades\Facade;

/**
 * Class Content
 *
 * @method  static string replaceImage($rawContent)
 * @method  static string replaceWords($rawContent)
 *
 */
class Content extends Facade
{

    protected static function getFacadeAccessor()
    {
        return \rogeecn\ArticleConf\Classes\Content::class;
    }
}
