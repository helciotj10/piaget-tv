<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class LoginAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/style.css',
        'css/open',
        //'https://docs-05-dot-polymer-project.appspot.com/0.5/components/paper-ripple/paper-ripple.html',

    ];
    public $js = [
        'js/index.js',
        'js/jquery.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
