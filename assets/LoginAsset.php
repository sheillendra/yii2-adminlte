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
class LoginAsset extends AssetBundle
{
    public $sourcePath = '@sheillendra/adminlte/assets';
    public $css = [
        'css/login.css',
    ];
    public $js = [
        'js/login.js'
    ];
    public $depends = [
        'sheillendra\adminlte\assets\AdminLTELoginAsset',
        'sheillendra\adminlte\assets\ICheckAsset',
    ];
    
    public $publishOptions=['forceCopy'=>YII_DEBUG];
    
}