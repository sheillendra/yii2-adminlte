<?php

namespace sheillendra\adminlte\assets;

use Yii;
use yii\web\AssetBundle;

class ICheckAsset extends AssetBundle {

    public $type = 'square';
    public $color = 'blue';
    public $sourcePath = '@bower/icheck';
    public $js = ['icheck.js'];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

    public function init() {
        parent::init();
        $this->css = ['skins/' . $this->type . '/' . $this->color . '.css'];
    }

}
