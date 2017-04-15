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

    public $basePath = '@vendor/liumapp/theme/bower_components/build';

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
