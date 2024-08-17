<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\SisAutorizacao;

/**
 * C
 */
class CoreController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
						'roles' => ['@'],
                    ],
                ],
				// 'denyCallback' => function($rule, $action) {
				// 	if (!Yii::$app->user->isGuest) {
				//     	return $action->controller->redirect(['/site/naoautorizado']);
				// 	}
				// 	return $action->controller->redirect(['/site/login']);
				        
				//  },
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }
}
