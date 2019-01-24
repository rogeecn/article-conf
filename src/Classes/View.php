<?php

namespace rogeecn\ArticleConf\Classes;


use Illuminate\Filesystem\Filesystem;

class View
{
    public function path($customDomain = null)
    {
        $domainArr = explode('.', domain_name($customDomain));
        $pathName = implode('.', array_reverse($domainArr));

        return resource_path('views/' . $pathName);
    }

    public function compilePath($domain)
    {
        $compileViewPath = realpath(storage_path('framework/views/'));
        $domain = domain_name($domain);
        $path = "{$compileViewPath}/{$domain}";
        if (!is_dir($path)) {
            (new Filesystem())->makeDirectory($path);
        }
        return $path;
    }
}
