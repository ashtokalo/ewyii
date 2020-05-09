<?php

return [
    'name'        => 'Ewyii',
    'timeZone'    => getenv('APP_TZ'),
    'language'    => 'ru-RU',
    'basePath'    => __DIR__ . '/..',
    'runtimePath' => __DIR__ . '/../../runtime',
    'vendorPath'  => __DIR__ . '/../../vendor',
    'components'  => [
        'cache' =>
            getenv('MEMCACHE_HOST')
                ? [
                'class'   => \yii\caching\MemCache::class,
                'servers' => [
                    [
                        'host' => getenv('MEMCACHE_HOST'),
                        'port' => getenv('MEMCACHE_PORT')
                            ?: 11211,
                    ],
                ],
            ]
                : [
                'class' => \yii\caching\FileCache::class,
            ],
        'db'    => [
            'class'             => \yii\db\Connection::class,
            'dsn'               => sprintf('mysql:host=%s;dbname=%s', getenv('MYSQL_HOST'),
                getenv('MYSQL_DATABASE')),
            'username'          => getenv('MYSQL_USER'),
            'password'          => getenv('MYSQL_PASSWORD'),
            'charset'           => 'utf8',
            'enableSchemaCache' => true,
            'tablePrefix'       => 'tbl_',
        ],
    ],
];