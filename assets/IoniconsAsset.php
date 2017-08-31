<?php

/**
 * @link http://www.sheillendra.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace sheillendra\adminlte\assets;

use yii\web\AssetBundle;

/**
 * @author Sheillendra <sheillendra@yahoo.com>
 * @since 2.0
 */
class IoniconsAsset extends AssetBundle {

    public $sourcePath = '@bower/ionicons';
    public $css = [
        'css/ionicons.min.css',
    ];
    public $js = [];
    public $depends = [];
    public $publishOptions = ['only' => ['css/ionicons.min.css']];

}
