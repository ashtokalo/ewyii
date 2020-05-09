<?php

try {
    require(__DIR__ . '/../../bootstrap.php');
} catch (\Exception $e) {
    http_response_code(500);
    exit($e->getMessage());
}

if (APP_LOCKED) {
    http_response_code(503);
    header('Retry-After: 30');
    exit('Maintenance mode.');
}

($app = new \yii\web\Application(\yii\helpers\ArrayHelper::merge(
    require(__DIR__ . '/../../config/common.php'),
    require(__DIR__ . '/../../config/' . YII_ENV . '/common.php'),
    require(__DIR__ . '/../../config/frontend.php'),
    require(__DIR__ . '/../../config/' . YII_ENV . '/frontend.php')
)))->run();
