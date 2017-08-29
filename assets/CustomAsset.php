<?php

namespace sheillendra\adminlte\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class CustomAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/adminlte/custom.css',
    ];
    public $js = [
        'js/adminlte/custom.js',
    ];
    public $depends = [
        'sheillendra\adminlte\assets\AdminLTEAsset',
    ];
}
