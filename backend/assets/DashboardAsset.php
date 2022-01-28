<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class DashboardAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'assets/css/bootstrap.min.css',
        'assets/css/animate.min.css',
        'assets/css/paper-dashboard.css',
        'assets/css/demo.css',
        //'https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css',
        'https://fonts.googleapis.com/css?family=Muli:400,300',
        'assets/css/themify-icons.css',
        //'font-awesome/css/font-awesome.min.css',
        'css/dataTables.bootstrap.css',
        'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css',
        'css/site.css',
    ];
    public $js = [
        'js/site.js',
    	'assets/js/jquery-1.10.2.js',
    	'assets/js/bootstrap.min.js',
    	'assets/js/bootstrap-checkbox-radio.js',
    	//'assets/js/chartist.min.js',
    	'assets/js/bootstrap-notify.js',
    	//'assets/js/googleapi.js',
    	'assets/js/paper-dashboard.js',
        'js/jquery-datatable/jquery.dataTables.js',
        'js/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js',
        'js/jquery-datatable/extensions/export/dataTables.buttons.min.js',
        'js/jquery-datatable/extensions/export/buttons.flash.min.js',
        'js/jquery-datatable/extensions/export/jszip.min.js',
        //'js/jquery-datatable/extensions/export/pdfmake.min.js',
        'js/jquery-datatable/extensions/export/vfs_fonts.js',
        'js/jquery-datatable/extensions/export/buttons.html5.min.js',
        'js/jquery-datatable/extensions/export/buttons.print.min.js',
        'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js',
        'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js',
        'assets/js/demo.js',
        
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
    public $jsOptions = array(
        'position' => \yii\web\View::POS_HEAD
    );
}
