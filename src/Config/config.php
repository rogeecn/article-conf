<?php
return [
    'category' => [
        ['id' => 1, 'name' => '新闻', 'alias' => 'xinwen', 'show' => true, 'order' => 0],
        ['id' => 2, 'name' => '社会', 'alias' => 'shehui', 'show' => true, 'order' => 0],
        ['id' => 3, 'name' => '搞笑', 'alias' => 'gaoxiao', 'show' => true, 'order' => 0],
        ['id' => 4, 'name' => '汽车', 'alias' => 'qiche', 'show' => true, 'order' => 0],
        ['id' => 5, 'name' => '娱乐', 'alias' => 'yule', 'show' => true, 'order' => 0],
        ['id' => 6, 'name' => '军事', 'alias' => 'junshi', 'show' => true, 'order' => 0],
        ['id' => 7, 'name' => '体育', 'alias' => 'tiyu', 'show' => true, 'order' => 0],
        ['id' => 8, 'name' => '财经', 'alias' => 'caijing', 'show' => true, 'order' => 0],
        ['id' => 9, 'name' => '科技', 'alias' => 'keji', 'show' => true, 'order' => 0],
        ['id' => 10, 'name' => '数码', 'alias' => 'shuma', 'show' => true, 'order' => 0],
        ['id' => 11, 'name' => '健康', 'alias' => 'jiankang', 'show' => true, 'order' => 0],
        ['id' => 12, 'name' => '时尚', 'alias' => 'shishang', 'show' => true, 'order' => 0],
        ['id' => 13, 'name' => '旅游', 'alias' => 'luyou', 'show' => true, 'order' => 0],
        ['id' => 14, 'name' => '企业', 'alias' => 'qiye', 'show' => true, 'order' => 0],
        ['id' => 15, 'name' => '生活', 'alias' => 'shenghuo', 'show' => true, 'order' => 0],
        ['id' => 16, 'name' => '教育', 'alias' => 'jiaoyu', 'show' => true, 'order' => 0],
        ['id' => 17, 'name' => '亲子', 'alias' => 'qinzi', 'show' => true, 'order' => 0],
        ['id' => 18, 'name' => '游戏', 'alias' => 'youxi', 'show' => true, 'order' => 0],
        ['id' => 19, 'name' => '文学', 'alias' => 'wenxue', 'show' => true, 'order' => 0],
        ['id' => 20, 'name' => '美食', 'alias' => 'meishi', 'show' => true, 'order' => 0],
        ['id' => 21, 'name' => '历史', 'alias' => 'lishi', 'show' => true, 'order' => 0],
        ['id' => 22, 'name' => '综合', 'alias' => 'zonghe', 'show' => true, 'order' => 0],
    ],
    'domain'   => [
        'a.article.local'  => ['a.article.local', 'm.a.article.local'],
        'b.article.local'  => ['b.article.local', 'm.b.article.local'],
        'jdwan.com'        => ['www.jdwan.com', 'm.jdwan.com'],
        '404wx.com'        => ['www.404wx.com', 'm.404wx.com'],
        'ttxiaobao.com'    => ['www.ttxiaobao.com', 'm.ttxiaobao.com'],
        '1shige.com'       => ['www.1shige.com', 'm.1shige.com'],
        '91shuxia.com'     => ['www.91shuxia.com', 'm.91shuxia.com'],
        '54junmi.com'      => ['www.54junmi.com', 'm.54junmi.com'],
        'krshipin.com'     => ['www.krshipin.com', 'm.krshipin.com'],
        'kuranshipin.net'  => ['www.kuranshipin.net', 'm.kuranshipin.net'],
        'feed.ipaoyun.com' => ['feed.ipaoyun.com', 'm.feed.ipaoyun.com'],
    ],
    'replace'  => [
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

    ],
];
