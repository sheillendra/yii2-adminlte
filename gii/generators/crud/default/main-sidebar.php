<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/*
 * sheillendra 2017
 */

/* @var $this yii\web\View */
/* @var $generator sheillendra\adminlte\gii\generators\crud\Generator */

echo '<?php';
?>

/* @var $adminLteAsset \yii\web\AssetBundle */

use sheillendra\adminlte\widgets\SidebarMenu;

$selectedSidebar = isset($this->params['selectedSidebar']) ? $this->params['selectedSidebar'] : '';
$items = [
    [
        'label' => 'MAIN NAVIGATION',
        'options' => ['class' => 'header']
    ],
    [
        'label' => 'Dashboard',
        'icon' => 'fa fa-dashboard',
        'url' => ['/'],
        'active' => $selectedSidebar == 'dashboard' || !$selectedSidebar,
    ],
    [
    'label' => <?= $generator->generateString(Inflector::camel2words(Inflector::id2camel($generator->getControllerID()))) ?>,
        'icon' => '<?php echo $generator->iconClass?>',
        'url' => ['/<?php echo $generator->getControllerID() ?>'],
        'active' => $selectedSidebar == '<?php echo $generator->getControllerID() ?>',
    ],
    //!!!replace here new menu
];
<?php echo '?>'?>

<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <?php echo '<?php echo $this->render(\'@app/views/layouts/_sidebar-user-panel\', [\'adminLteAsset\' => $adminLteAsset])?>'?>
        
        <?php echo '<?php echo $this->render(\'@app/views/layouts/_sidebar-search-form\', [\'adminLteAsset\' => $adminLteAsset])?>'?>
        
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <?php echo '<?php'?> echo SidebarMenu::widget([
            'options' => ['class' => 'sidebar-menu'],
            'encodeLabels' => false,
            'items' => $items,
        ]);
        <?php echo '?>'?>
        
    </section>
    <!-- /.sidebar -->
</aside>