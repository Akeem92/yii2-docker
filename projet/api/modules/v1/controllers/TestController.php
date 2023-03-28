<?php

namespace api\modules\v1\controllers;

use api\modules\v1\controllers\utilities\Status;
use yii\rest\ActiveController;

/**
 * Test Controller API
 *
 */
class TestController extends ActiveController
{

    public $modelClass = 'api\modules\v1\models\User';

    public function actionTest()
    {
        return [
            'status' => Status::SUCCESS,
            'message' => 'Test'
        ];
    }
}
