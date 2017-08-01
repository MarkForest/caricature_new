<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

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
        'assets/bootstrap/css/bootstrap.css',
        'assets/fontawesome/css/font-awesome.css',
        'assets/gridloading/css/component.css',
        'assets/animate.css',
        'css/style.css',
    ];
    public $js = [

        'assets/bootstrap/js/bootstrap.js',
        'assets/gridloading/js/modernizr.custom.js',
        'assets/gridloading/js/masonry.pkgd.min.js',
        'assets/gridloading/js/imagesloaded.js',
        'assets/gridloading/js/classie.js',
        'assets/gridloading/js/AnimOnScroll.js',
        'assets/scripts.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
