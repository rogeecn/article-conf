<?php

namespace rogeecn\ArticleConf\Classes;

use rogeecn\ArticleConf\Exceptions\ConfigureMissing;

class Domain
{
    private $repository;

    public function __construct()
    {
        $items = config('conf.domain');
        collect($items)->each(function ($item, $key) {
            collect($item)->each(function ($subItem) use ($key) {
                $this->repository[$subItem] = $key;
            });
        });
    }

    public function toID($customDomain = null)
    {
        $domainName = domain_name($customDomain);
        if (app()->runningInConsole()) {
            return array_get($this->repository, $domainName, 'web');
        }

        throw_unless(
            isset($this->repository[$domainName]),
            ConfigureMissing::class,
            "domain: {$domainName} not exist"
        );

        return array_get($this->repository, $domainName, 'web');
    }
}
