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
        'https://fonts.googleapis.com/css?family=Neucha',
        'css/style.css',
        'css/camera.css',
//        'css/blur.css',
    ];
    public $js = [
        'js/jquery.js',
        'js/jquery-migrate-1.1.1.js',
        'js/superfish.js',
        'js/jquery.equalheights.js',
        'js/jquery.easing.1.3.js',
        'js/camera.js',
        'js/functions.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
