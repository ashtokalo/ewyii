<?php
/**
 * Yii bootstrap file.
 * Used for enhanced IDE code autocomplete.
 */
require(__DIR__ . '/../vendor/yiisoft/yii2/BaseYii.php');

/**
 * Yii is a helper class serving common framework functionalities.
 */
class Yii extends \yii\BaseYii
{
    /**
     * @var CommonApp|WebApp|ConsoleApp the application instance
     */
    public static $app;
}

spl_autoload_register(['Yii', 'autoload'], true, true);

Yii::$classMap = require(__DIR__ . '/../vendor/yiisoft/yii2/classes.php');
Yii::$container = new yii\di\Container();

/**
 * Class CommonApp.
 *
 */
abstract class CommonApp extends yii\base\Application
{
}

/**
 * Class FrontendApp.
 */
class WebApp extends yii\web\Application
{
}

/**
 * Class ConsoleApp.
 */
class ConsoleApp extends yii\console\Application
{
}
