<?php

use yii\widgets\Menu;

$selectedSidebar = isset($this->params['selectedSidebar']) ? $this->params['selectedSidebar'] : '';
$items = [
    [
        'label' => 'MAIN NAVIGATION',
        'options' => ['class' => 'header']
    ],
    [
        'label' => '<i class="fa fa-dashboard"></i> <span>Dashboard</span>',
        'url' => '/',
        'active' => $selectedSidebar == 'dashboard' || !$selectedSidebar,
    ],
    [
        'label' => '<i class="fa fa-users"></i> <span>User</span> <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>',
        'url' => '#',
        'options' => ['class' => 'treeview'],
        'submenuTemplate' => "\n<ul class=\"treeview-menu\">\n{items}\n</ul>\n",
        'items' => [
            [
                'label' => '<i class="fa fa-circle-o"></i> Public',
                'url' => ['/user/public'],
                'active' => $selectedSidebar == 'user-public',
            ],
            [
                'label' => '<i class="fa fa-circle-o"></i> Company',
                'url' => ['/user/company'],
                'active' => $selectedSidebar == 'user-company',
            ],
            [
                'label' => '<i class="fa fa-circle-o"></i> Partner',
                'url' => ['/user/partner'],
                'active' => $selectedSidebar == 'user-partner',
            ],
            [
                'label' => '<i class="fa fa-circle-o"></i> System',
                'url' => ['/user/system'],
                'active' => $selectedSidebar == 'user-system',
            ]
        ]
    ]
];
?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
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
            'activateParents' => true,
            'items' => $items,
        ]);
        ?>
    </section>
    <!-- /.sidebar -->
</aside>