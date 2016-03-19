<?php

namespace sheillendra\adminlte\assets;

use Yii;
use yii\web\AssetBundle;

class JqueryUIAsset extends AssetBundle {

    public $sourcePath = '@bower/jquery-ui';
    public $css = [];
    public $js = [
        'jquery.ui.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];

}
