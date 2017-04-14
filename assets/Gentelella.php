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

/**
 * Main backend application asset bundle.
 */
class Gentelella extends AssetBundle
{
    public $basePath = __DIR__ . '/../bower_components/build';
    public $baseUrl = '@web';
    public $css = [
        'css/custom.css',
    ];
    public $js = [
        'js/custom.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
