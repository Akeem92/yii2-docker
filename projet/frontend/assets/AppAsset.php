<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

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
        // 'css/site.css',
        "template/css/slick.css",

        "template/css/font-awesome.min.css",

        "template/css/LineIcons.css",

        "template/css/animate.css",

        "template/css/bootstrap.min.css",

        "template/css/default.css",

        "template/css/style.css",
        "template/css/magnific-popup.css",
    ];
    public $js = [
        "template/js/vendor/jquery-1.12.4.min.js",
        "template/js/vendor/modernizr-3.7.1.min.js",

        "template/js/popper.min.js",
        "template/js/bootstrap.min.js",

        "template/js/slick.min.js",

        "template/js/ajax-contact.js",

        "template/js/imagesloaded.pkgd.min.js",
        "template/js/isotope.pkgd.min.js",

        "template/js/waypoints.min.js",
        "template/js/jquery.counterup.min.js",

        "template/js/circles.min.js",

        "template/js/jquery.appear.min.js",

        "template/js/wow.min.js",

        "template/js/headroom.min.js",

        "template/js/jquery.nav.js",

        "template/js/scrollIt.min.js",

        "template/js/jquery.magnific-popup.min.js",

        "template/js/main.js",
    ];
    public $depends = [
        // 'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAsset',
    ];
}
