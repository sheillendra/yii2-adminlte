<?php
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
        'url' => '#',
        'options' => ['class' => 'treeview'],
        'items' => [
            [
                'label' => 'Dashboard v1',
                'url' => ['/admin-lte/dashboard-v1'],
                'active' => $selectedSidebar == 'dashboard-v1' || !$selectedSidebar,
            ],
            [
                'label' => 'Dashboard v2',
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
        'label' => 'Charts',
        'url' => '#',
        'icon' => 'fa fa-pie-chart',
        'options' => ['class' => 'treeview'],
        'items' => [
            [
                'label' => 'ChartJS',
                'url' => ['/admin-lte/chart-js'],
                'active' => $selectedSidebar == 'chart-js',
            ],
            [
                'label' => 'Morris',
                'url' => ['/admin-lte/morris'],
                'active' => $selectedSidebar == 'morris',
            ],
            [
                'label' => 'Flot',
                'url' => ['/admin-lte/flot'],
                'active' => $selectedSidebar == 'flot',
            ],
            [
                'label' => 'Inline Charts',
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
        'label' => 'Important',
        'iconColor' => 'text-red',
        'url' => ['/admin-lte/important'],
        'active' => $selectedSidebar == 'important',
    ],
    [
        'label' => 'Warning',
        'iconColor' => 'text-yellow',
        'url' => ['/admin-lte/warning'],
        'active' => $selectedSidebar == 'warning',
    ],
    [
        'label' => 'Information',
        'iconColor' => 'text-blue',
        'url' => ['/admin-lte/information'],
        'active' => $selectedSidebar == 'information',
    ],
];
?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <?php echo $this->render('@app/views/layouts/_sidebar-user-panel', ['adminLteAsset' => $adminLteAsset])?>
        <?php echo $this->render('@app/views/layouts/_sidebar-search-form', ['adminLteAsset' => $adminLteAsset])?>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <?php
        echo SidebarMenu::widget([
            'options' => ['class' => 'sidebar-menu'],
            'encodeLabels' => false,
            'items' => $items,
        ]);
        ?>
    </section>
    <!-- /.sidebar -->
</aside>