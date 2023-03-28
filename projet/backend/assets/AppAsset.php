<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'template/assets/extra-libs/c3/c3.min.css',
        'template/assets/libs/chartist/dist/chartist.min.css',
        'template/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css',
        'template/dist/css/style.min.css',
    ];
    public $js = [
        'template/assets/libs/jquery/dist/jquery.min.js',
        'template/assets/libs/popper.js/dist/umd/popper.min.js',
        'template/assets/libs/bootstrap/dist/js/bootstrap.min.js',
        'template/dist/js/app-style-switcher.js',
        'template/dist/js/feather.min.js',
        'template/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js',
        'template/dist/js/sidebarmenu.js',
        'template/dist/js/custom.min.js',
        'template/assets/extra-libs/c3/d3.min.js',
        'template/assets/extra-libs/c3/c3.min.js',
        'template/assets/libs/chartist/dist/chartist.min.js',
        'template/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js',
        'template/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js',
        'template/assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js',
        'template/dist/js/pages/dashboards/dashboard1.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAsset',
    ];
}
