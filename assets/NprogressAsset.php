<?php
/**
 * Created by PhpStorm.
 * User: liumapp
 * Email: liumapp.com@gmail.com
 * homePage: http://www.liumapp.com
 * Date: 4/26/17
 * Time: 5:55 PM
 */
namespace liumapp\theme\assets;

use yii\web\AssetBundle;

class NprogressAsset extends AssetBundle
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