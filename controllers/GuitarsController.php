<?php

namespace app\controllers;

class GuitarsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('guitars');
    }

}
