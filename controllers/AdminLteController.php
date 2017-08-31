<?php
namespace sheillendra\adminlte\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;

/**
 * Site controller
 */
class AdminLteController extends Controller
{
    /**
     * @inheritdoc
     */
//    public function behaviors()
//    {
//        return [
//            'access' => [
//                'class' => AccessControl::className(),
//                'rules' => [
//                    [
//                        'actions' => ['login', 'error'],
//                        'allow' => true,
//                    ],
//                    [
//                        'actions' => ['logout', 'index'],
//                        'allow' => true,
//                        'roles' => ['@'],
//                    ],
//                ],
//            ],
//            'verbs' => [
//                'class' => VerbFilter::className(),
//                'actions' => [
//                    'logout' => ['post'],
//                ],
//            ],
//        ];
//    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionDashboardV1()
    {
        return $this->render('index');
    }
    
    public function actionDashboardV2()
    {
        return $this->render('index');
    }
    
    public function actionWidgets()
    {
        return $this->render('index');
    }

    public function actionChartJs()
    {
        return $this->render('index');
    }
    
    public function actionMorris()
    {
        return $this->render('index');
    }
    
    public function actionFlot()
    {
        return $this->render('index');
    }
    
    public function actionInlineChart()
    {
        return $this->render('index');
    }
    
    public function actionImportant()
    {
        return $this->render('index');
    }
    
    public function actionWarning()
    {
        return $this->render('index');
    }
    
    public function actionInformation()
    {
        return $this->render('index');
    }
}
