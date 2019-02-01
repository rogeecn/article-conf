<?php

namespace rogeecn\ArticleConf\Classes;


class Content
{
    public function replaceImage($rawContent)
    {
        $domains = config('conf.replace.image.domains');
        $loadingImage = config('conf.replace.image.image');

        $replacements = [];
        foreach ($domains as $domain) {
            $key = 'src="http://' . $domain;
            $replacements[$key] = sprintf('src="%s" data-%s', $loadingImage, $key);

            $key = 'src="https://' . $domain;
            $replacements[$key] = sprintf('src="%s" data-%s', $loadingImage, $key);

            $key = 'src=http://' . $domain;
            $replacements[$key] = sprintf('src="%s" data-%s', $loadingImage, $key);

            $key = 'src=https://' . $domain;
            $replacements[$key] = sprintf('src="%s" data-%s', $loadingImage, $key);
        }

        return strtr($rawContent, $replacements);
    }

    public function replaceWords($rawContent)
    {
        $replacements = [
        ];
        return strtr($rawContent, $replacements);
    }
}
