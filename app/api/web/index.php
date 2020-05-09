<?php

try {
    require(__DIR__ . '/../../bootstrap.php');
} catch (\Exception $e) {
    http_response_code(500);
    exit(json_encode(['error' => $e->getMessage()]));
}

if (APP_LOCKED) {
    http_response_code(503);
    header('Retry-After: 30');
    exit(json_encode(['error' => 'Maintenance mode.']));
}

$config = \yii\helpers\ArrayHelper::merge(
    require(__DIR__ . '/../../config/common.php'),
    require(__DIR__ . '/../../config/' . YII_ENV . '/common.php'),
    require(__DIR__ . '/../../config/api.php'),
    require(__DIR__ . '/../../config/' . YII_ENV . '/api.php')
);

$application = new \yii\web\Application($config);
$application->run();
