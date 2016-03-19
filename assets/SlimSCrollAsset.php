<?php

namespace sheillendra\adminlte\assets;

use Yii;
use yii\web\AssetBundle;

class SlimScrollAsset extends AssetBundle {

    public $sourcePath = '@bower/jquery-slimscroll';
    public $css = [];
    public $js = [
        'jquery.slimscroll.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];

}
