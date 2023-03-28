<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;

class DefaultController extends Controller
{
	public function beforeAction($action)
	{
		if (isset(Yii::$app->session['langue_AB'])) {
			Yii::$app->language = Yii::$app->session['langue_AB'];
		}

		$this->enableCsrfValidation = false;
		return parent::beforeAction($action);
	}
}
