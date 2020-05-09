<?php

return [
    'id' => 'ewyii-frontend',
    'controllerNamespace' => 'app\frontend\controllers',
    'defaultRoute' => 'site/index',
    'viewPath' => __DIR__ . '/../frontend/views',
    'layout' => 'default',
    'components' => [
        'session' => [
            'class' => \yii\web\Session::class,
            'name' => 'EWYIIF',
            'timeout' => 86400 * 30,
        ],
        'user' => [
            'class' => \yii\web\User::class,
            'enableAutoLogin' => true,
        ],
        'request' => [
            'class' => \yii\web\Request::class,
            'cookieValidationKey' => getenv('APP_COOKIE_KEY'),
        ],
        'errorHandler' => [
            'class' => \yii\web\ErrorHandler::class,
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'class' => \yii\web\UrlManager::class,
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '<controller:[\w-]+>/<id:\d+>' => '<controller>/view',
                '<controller:[\w-]+>/<action:[\w-]+>/<id:\d+>' => '<controller>/<action>',
                '<controller:[\w-]+>/<action:[\w-]+>' => '<controller>/<action>',
                '<module:\w+>/<controller:\w+>/<action:(\w|-)+>' => '<module>/<controller>/<action>',
                '<module:\w+>/<controller:(\w|-)+>/<action:(\w|-)+>/<id:\d+>' => '<module>/<controller>/<action>',
            ],
        ],
    ],
];
