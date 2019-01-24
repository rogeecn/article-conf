<?php

return [
    'image' => [
        'loading' => "/images/loading.gif?v=" . env("APP_VERSION"),
        'replace' => [
            "&amp;"                  => "&",
            'http://m.qpic.cn'       => config("conf.replace.image.loading") . '" data-src="http://m.qpic.cn',
            'https://m.qpic.cn'      => config("conf.replace.image.loading") . '" data-src="http://m.qpic.cn',
            'http://a1.qpic.cn'      => config("conf.replace.image.loading") . '" data-src="http://a1.qpic.cn',
            'https://a1.qpic.cn'     => config("conf.replace.image.loading") . '" data-src="http://a1.qpic.cn',
            'http://mmbiz.qpic.cn'   => config("conf.replace.image.loading") . '" data-src="http://mmbiz.qpic.cn',
            'https://mmbiz.qpic.cn'  => config("conf.replace.image.loading") . '" data-src="http://mmbiz.qpic.cn',
            'http://mmbiz.qlogo.cn'  => config("conf.replace.image.loading") . '" data-src="http://mmbiz.qlogo.cn',
            'https://mmbiz.qlogo.cn' => config("conf.replace.image.loading") . '" data-src="http://mmbiz.qlogo.cn',
            'http://mmsns.qpic.cn'   => config("conf.replace.image.loading") . '" data-src="http://mmsns.qpic.cn',
            'https://mmsns.qpic.cn'  => config("conf.replace.image.loading") . '" data-src="http://mmsns.qpic.cn',
        ]
    ]
];
