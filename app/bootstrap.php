<?php

require(__DIR__ . '/../vendor/autoload.php');

// Maintenance mode constants

define('APP_LOCK_FILE', dirname(__DIR__) . '/runtime/maintenance.lock');
define('APP_LOCKED', file_exists(APP_LOCK_FILE));

// Environment variables

$env = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$env->load();

$env->required('APP_TZ');
$env->required('APP_HOST');
$env->required('APP_URL');
$env->required('APP_EMAIL');
$env->required('APP_COOKIE_SALT');
$env->required('YII_ENV')->allowedValues(['prod', 'dev', 'local']);
$env->required('YII_DEBUG')->isBoolean();
$env->required('YII_TRACE_LEVEL')->isInteger();
$env->required('MYSQL_HOST');
$env->required('MYSQL_USER');
$env->required('MYSQL_PASSWORD');
$env->required('MYSQL_DATABASE');

// Framework constants

define('YII_DEBUG', (bool) getenv('YII_DEBUG'));
define('YII_ENV', getenv('YII_ENV'));
define('YII_ENV_DEV', YII_ENV === 'dev');
define('YII_ENV_PROD', YII_ENV === 'prod');

require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

Yii::setAlias('@root', dirname(__DIR__));
