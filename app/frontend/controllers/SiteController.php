<?php

namespace app\frontend\controllers;

use yii\web\Controller;

class SiteController extends Controller
{
    public function actionIndex()
    {
        return 'Frontend';
    }

    public function actionError()
    {
        echo 'Frontend Oops';
    }
}
