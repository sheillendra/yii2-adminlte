<?php
/* @var $adminLteAsset \yii\web\AssetBundle */

use sheillendra\adminlte\widgets\Menu;

$selectedSidebar = isset($this->params['selectedSidebar']) ? $this->params['selectedSidebar'] : '';
$items = [
    [
        'label' => 'MAIN NAVIGATION',
        'options' => ['class' => 'header']
    ],
    [
        'label' => 'Dashboard',
        'icon' => 'fa fa-dashboard',
        'url' => '#',
        'options' => ['class' => 'treeview'],
        'items' => [
            [
                'label' => 'Dashboard v1',
                'icon' => 'fa fa-circle-o',
                'url' => ['/admin-lte/dashboard-v1'],
                'active' => $selectedSidebar == 'dashboard-v1' || !$selectedSidebar,
            ],
            [
                'label' => 'Dashboard v2',
                'icon' => 'fa fa-circle-o',
                'url' => ['/admin-lte/dashboard-v2'],
                'active' => $selectedSidebar == 'dashboard-v2',
            ],
        ]
    ],
    [
        'label' => 'Widgets',
        'icon' => 'fa fa-th',
        'smallLabel' => 'new',
        'smallLabelColor' => 'green',
        'url' => ['/admin-lte/widgets'],
        'active' => $selectedSidebar == 'widgets',
    ],
    [
        'label' => '<i class="fa fa-pie-chart"></i> <span>Charts</span> <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>',
        'url' => '#',
        'options' => ['class' => 'treeview'],
        'items' => [
            [
                'label' => '<i class="fa fa-circle-o"></i> ChartJS',
                'url' => ['/admin-lte/chart-js'],
                'active' => $selectedSidebar == 'chart-js',
            ],
            [
                'label' => '<i class="fa fa-circle-o"></i> Morris',
                'url' => ['/admin-lte/morris'],
                'active' => $selectedSidebar == 'morris',
            ],
            [
                'label' => '<i class="fa fa-circle-o"></i> Flot',
                'url' => ['/admin-lte/flot'],
                'active' => $selectedSidebar == 'flot',
            ],
            [
                'label' => '<i class="fa fa-circle-o"></i> Inline Charts',
                'url' => ['/admin-lte/inline-charts'],
                'active' => $selectedSidebar == 'inline-charts',
            ],
        ]
    ],
    [
        'label' => 'LABELS',
        'options' => ['class' => 'header']
    ],
    [
        'label' => '<i class="fa fa-th"></i> <span>Important</span><span class="pull-right-container">',
        'url' => ['/admin-lte/important'],
        'active' => $selectedSidebar == 'important',
    ],
    [
        'label' => '<i class="fa fa-th"></i> <span>Warning</span><span class="pull-right-container">',
        'url' => ['/admin-lte/warning'],
        'active' => $selectedSidebar == 'warning',
    ],
    [
        'label' => '<i class="fa fa-th"></i> <span>Information</span><span class="pull-right-container">',
        'url' => ['/admin-lte/information'],
        'active' => $selectedSidebar == 'information',
    ],
];
?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo $adminLteAsset->baseUrl ?>/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo Yii::$app->user->identity->username ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <?php
        echo Menu::widget([
            'options' => ['class' => 'sidebar-menu'],
            'encodeLabels' => false,
            'items' => $items,
        ]);
        ?>
    </section>
    <!-- /.sidebar -->
</aside>