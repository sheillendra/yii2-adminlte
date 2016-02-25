<?php

/**
 */

namespace sheillendra\adminlte\assets;

use Yii;
use yii\web\AssetBundle;

class ICheckAsset extends AssetBundle {

    public $type = 'square';
    public $color = 'blue';
    public $sourcePath = '@vendor/almasaeed2010/adminlte/plugins/iCheck';
    public $js = ['icheck.min.js'];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

    //public $publishOptions=['forceCopy'=>YII_DEBUG];

    public function init() {
        parent::init();
        if (isset(Yii::$app->params['plugins']) && isset(Yii::$app->params['plugins']['iCheck'])) {

            if (isset(Yii::$app->params['plugins']['iCheck']['type'])) {
                $this->type = Yii::$app->params['plugins']['iCheck']['type'];
            }

            if (isset(Yii::$app->params['plugins']['iCheck']['color'])) {
                $this->color = Yii::$app->params['plugins']['iCheck']['color'];
            }
        }

        $this->css = [$this->type . '/' . $this->color . '.css'];
    }

}
