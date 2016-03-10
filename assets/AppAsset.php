<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace sheillendra\adminlte\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $sourcePath = '@sheillendra/adminlte/assets';
    public $css = [
        'css/app.css',
    ];
    public $js = [
        'js/app.js'
    ];
    public $depends = [
        'sheillendra\adminlte\assets\AdminLTEAsset',
        'yii\web\YiiAsset',
    ];
}
