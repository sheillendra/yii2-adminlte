<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace sheillendra\adminlte\themes\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class LoginAsset extends AssetBundle
{
    public $sourcePath = '@sheillendra/adminlte/themes/assets';
    public $css = [
        'css/login.css',
    ];
    public $js = [
        'js/login.js'
    ];
    public $depends = [
        'sheillendra\adminlte\assets\AdminLTEAsset',
        'sheillendra\adminlte\assets\ICheckAsset',
    ];
    
    public $publishOptions=['forceCopy'=>YII_DEBUG];
}
