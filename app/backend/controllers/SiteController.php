<?php

namespace app\backend\controllers;

use yii\web\Controller;

class SiteController extends Controller
{
    public function actionIndex()
    {
        return 'Backend';
    }

    public function actionError()
    {
        echo 'Backend Oops';
    }
}
