<?php

return [
    'id'                  => 'ewyii-frontend',
    'controllerNamespace' => 'app\api\controllers',
    'defaultRoute'        => 'site/index',
    'viewPath'            => __DIR__ . '/../api/views',
    'layout'              => 'default',
    'components'          => [
        'session'      => [
            'class'   => \yii\web\Session::class,
            'name'    => 'EWYIIA',
            'timeout' => 86400 * 30,
        ],
        'user'         => [
            'class'           => \yii\web\User::class,
            'enableAutoLogin' => true,
        ],
        'request'      => [
            'class'               => \yii\web\Request::class,
            'cookieValidationKey' => getenv('APP_COOKIE_KEY'),
        ],
        'errorHandler' => [
            'class'       => \yii\web\ErrorHandler::class,
            'errorAction' => 'site/error',
        ],
        'urlManager'   => [
            'class'           => \yii\web\UrlManager::class,
            'enablePrettyUrl' => true,
            'showScriptName'  => false,
            'rules'           => [
                '<controller:[\w-]+>/<id:\d+>'                 => '<controller>/view',
                '<controller:[\w-]+>/<action:[\w-]+>/<id:\d+>' => '<controller>/<action>',
                '<controller:[\w-]+>/<action:[\w-]+>'          => '<controller>/<action>',
            ],
        ],
    ],
];
