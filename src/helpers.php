<?php

if (!function_exists('category_from_id')) {
    function category_from_id($id)
    {
        return \rogeecn\ArticleConf\Facads\Category::fromID($id);
    }
}

if (!function_exists('category_from_alias')) {
    function category_from_alias($alias)
    {
        return \rogeecn\ArticleConf\Facads\Category::fromAlias($alias);
    }
}


if (!function_exists('content_replace_image')) {
    function content_replace_image($rawContent)
    {
        return \rogeecn\ArticleConf\Facads\Content::replaceImage($rawContent);
    }
}

if (!function_exists('domain_name')) {
    function domain_name($domain = null)
    {
        $domainName = array_get($_SERVER, 'HTTP_HOST');
        if ($domain) {
            $domainName = $domain;
        }
        return $domainName;
    }
}

if (!function_exists('domain_view_path_name')) {
    function domain_view_path_name($domain = null)
    {
        return (new \rogeecn\ArticleConf\Classes\View())->domainPath($domain);
    }
}

if (!function_exists('domain_view_path')) {
    function domain_view_path($domain = null)
    {
        return (new \rogeecn\ArticleConf\Classes\View())->path($domain);
    }
}

if (!function_exists('domain_view_compile_path')) {
    function domain_view_compile_path($domain = null)
    {
        return (new \rogeecn\ArticleConf\Classes\View())->compilePath($domain);
    }
}


if (!function_exists('domain_to_id')) {
    function domain_to_id($domain = null)
    {
        return (new \rogeecn\ArticleConf\Classes\Domain())->toID($domain);
    }
}
