<?php

namespace rogeecn\ArticleConf\Classes;


class View
{
    public function path($customDomain = null)
    {
        $domainArr = explode('.', domain_name($customDomain));
        $pathName = implode('.', array_reverse($domainArr));

        return resource_path('views/' . $pathName);
    }
}
