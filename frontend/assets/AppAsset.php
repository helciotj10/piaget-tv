<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/loader-dark.css',
        'css/bootstrap.min.css',
        'css/liveradio-template-dark.css',
        'css/flexslider.css',
        'css/sfmenu.css',
        'css/glide-slider.css',
        'css/jquery.mCustomScrollbar-dark.css',
        'jplayer/skin/liveradio/css/jplayer.liveradio-dark.css',
        'fonts/flaticon-liveradio/flaticon.css',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'
        //'css/clip.css'  
    ];
    public $js = [
        'js/jquery-1.10.2.min.js',
        'js/jquery.easing.1.3.js',
        'js/jquery.ui.touch-punch.min.js',
        'js/bootstrap.min.js',
        'js/jquery.flexslider.js',
        'js/jquery.parallax.js',
        'js/jquery.inview.js',
        'js/superfish.js',
        'js/supersubs.js',
        'js/jquery.glide.js',
        'js/jquery.isotope.min.js',
        'js/jquery.magnific-popup.min.js',
        'js/jquery.mCustomScrollbar.min.js',
        'jplayer/jquery.jplayer.js',
        'jplayer/jplayer.playlist.js',
        'jplayer/header-playlist.js',
        'jplayer/top10-playlist.js',
        'js/jquery.form.js',
        'js/jquery.validate.min.js',
        'js/liveradio.js',
        'rs-plugin/js/jquery.themepunch.tools.min.js',
        'rs-plugin/js/jquery.themepunch.revolution.min.js',
    ];
    public $depends = [
        //'yii\web\YiiAsset',
       // 'yii\bootstrap\BootstrapAsset',
    ];
    public $jsOptions = array(
        'position' => \yii\web\View::POS_HEAD
    );
}
