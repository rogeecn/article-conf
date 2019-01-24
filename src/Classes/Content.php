<?php

namespace rogeecn\ArticleConf\Classes;


class Content
{
    public function replaceImage($rawContent)
    {
        return strtr($rawContent, config('conf.replace.image.replace'));
    }
}
