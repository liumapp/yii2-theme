<?php
/**
 * Created by PhpStorm.
 * User: liumapp
 * Email: liumapp.com@gmail.com
 * homePage: http://www.liumapp.com
 * Date: 4/14/17
 * Time: 4:33 PM
 */

namespace liumapp\theme\assets;

use yii\web\AssetBundle;

class GentelellaAsset extends AssetBundle
{

    public $sourcePath = '@bower/gentelellaTheme/dist';

    public $css = [
        'css/nprogress.css',
        'css/custom.min.css',
        'css/animate.css',
    ];

    public $js = [
        'js/custom.min.js',
        'js/nprogress.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'liumapp\theme\assets\FontawesomeAsset',
    ];

}
