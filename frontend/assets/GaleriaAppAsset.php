<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class GaleriaAppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.css',
        'css/style.css',
        'css/font-awesome.css',
        'css/site.css',
        'css/lightbox.css',


    ];
    public $js = [
        'js/jquery-2.1.4.min.js',
        'js/bootstrap.js',        
        'js/lightbox-plus-jquery.min.js',
        'js/site.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
