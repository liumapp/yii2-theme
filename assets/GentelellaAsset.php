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

    public $basePath = '@bower/gentelellaTheme/dist';

    public $baseUrl = '@web';

    public $css = [
        'css/custom.min.css',
    ];

    public $js = [
        'js/custom.min.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}
