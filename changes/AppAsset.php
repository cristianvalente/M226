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
        //'css/site.css',
        'css/skel-noscript.css',
        'css/style.css',
        'css/style-1000px.css',
        'css/style-desktop.css',
        'css/style-mobile.css',
    ];
    public $js = [
        'js/skel.min.js',
        'js/html5shiv.js',
        'js/init.js',
        'js/skel-panels.min.js',
        //'http://fonts.googleapis.com/css?family=Questrial',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
