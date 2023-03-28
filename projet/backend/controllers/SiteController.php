<?php

namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;

/**
 * Site controller
 */
class SiteController extends Controller
{
    public $page_title = "";
    public $breadcrumb = "";
    public $select_menu = "BOARD";

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['get'],
                ],
            ],
        ];
    }

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

    public function actionIndex()
    {
        return $this->redirect(['login/']);
    }

    public function actionLogin()
    {
        $this->layout = 'main_connexion';
        $model = new LoginForm();
        if (Yii::$app->request->post()) {
            if ($model->load(Yii::$app->request->post())) {
                $user = \common\models\User::findOne(['username' => $model->username]);

                if ($user != null) {

                    if ($user->status == \common\models\User::STATUS_ACTIVE) {
                        if ($model->login()) {

                            return $this->redirect(['account/']);
                        } else {
                            Yii::$app->getSession()->setFlash('danger', Yii::t('app', 'connexion_false'));
                        }
                    } else {
                        Yii::$app->getSession()->setFlash('danger', Yii::t('app', 'Compte désactivé. Veuillez contacter l\'administateur'));
                    }
                } else {
                    Yii::$app->getSession()->setFlash('danger', Yii::t('app', 'Compte introuvable'));
                }
            } else {
                Yii::$app->getSession()->setFlash('danger', Yii::t('app', 'input_empty'));
            }
        }

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->redirect(['login/']);
    }
}
