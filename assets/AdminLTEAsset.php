<?php

/**
 */

namespace sheillendra\adminlte\assets;

use yii\web\AssetBundle;

class AdminLTEAsset extends AssetBundle {
    
    public $sourcePath = '@vendor/almasaeed2010/adminlte/dist';
    public $css = [
        'css/AdminLTE.min.css',
        'css/skins/_all-skins.css'
    ];
    public $js = [
        'js/app.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\web\YiiAsset',
        'sheillendra\theme\assets\FontAwesomeAsset'
    ];
    public $publishOptions=['forceCopy'=>YII_DEBUG];
}
