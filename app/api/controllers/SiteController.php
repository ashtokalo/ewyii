<?php

namespace app\api\controllers;

use yii\rest\Controller;

class SiteController extends Controller
{
    public function actionIndex()
    {
        echo 123;

        return 'Frontend';
    }

    public function actionError()
    {
        echo 'Frontend Oops';
    }
}
