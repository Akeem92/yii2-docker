<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

include 'urlManager.php';

use \yii\web\Request;

$baseUrl = str_replace('/backend/web', '/admin', (new Request)->getBaseUrl());

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'language' => 'fr',
    'timeZone' => 'Africa/Lome',
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [
        /* 'users' => [
            'class' => 'backend\modules\users\Users',
        ], */
    ],
    'components' => [
        // 'view' => [
        //     'layout' => 'main_dashboard'
        // ],
        'request' => [
            'baseUrl' => $baseUrl,
            'enableCookieValidation' => true,
            'cookieValidationKey' => 'f763603732269fb75965b4a470455cf16b045326',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'baseUrl' => $baseUrl,
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => $tab_url
        ]
    ],
    'params' => $params,
];
