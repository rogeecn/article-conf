<?php

namespace rogeecn\ArticleConf\Classes;


use Illuminate\Filesystem\Filesystem;

class View
{
    public function domainPath($customDomain = null)
    {
        $domainArr = explode('.', domain_name($customDomain));
        return implode('.', array_reverse($domainArr));
    }

    public function path($domain)
    {
        return resource_path('views/' . $this->domainPath($domain));
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
