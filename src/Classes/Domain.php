<?php

namespace rogeecn\ArticleConf\Classes;

use rogeecn\ArticleConf\Exceptions\ConfigureMissing;

class Domain
{
    private $repository;
    private $deviceRepository;

    public function __construct()
    {
        $items = config('conf.domain');
        collect($items)->each(function ($item, $key) {
            collect($item)->each(function ($domain, $device) use ($key) {
                $this->repository[$domain] = $key;
                $this->deviceRepository[$key][$device] = $domain;
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

    public function toMobile($customDomain = null)
    {
        $domainID = $this->toID($customDomain);
        return array_get($this->deviceRepository[$domainID], 'mobile');
    }

    public function toPc($customDomain = null)
    {
        $domainID = $this->toID($customDomain);
        return array_get($this->deviceRepository[$domainID], 'pc');
    }
}
