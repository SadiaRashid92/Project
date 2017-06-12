<?php

namespace app\controllers;

use Yii;
use app\models\Profile;

//use app\models\CrudSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * CrudController implements the CRUD actions for Crud model.
 */
class CrudController extends Controller
{
    /**
     * @inheritdoc
     */
    
    
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Crud models.
     * @return mixed
     */
 public function actionIndex()
    { 
        return $this->render('Profile');
    }
    
   

    /**
     * Displays a single Crud model.
     * @param integer $id
     * @return mixed
     */
//    public function actionView($id)
//    {
//        return $this->render('view', [
//            'model' => $this->findModel($id),
//        ]);
//    }



    protected function findModel($id)
    {
        if (($model = Crud::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
