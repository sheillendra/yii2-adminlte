# yii2-adminlte
Implement AdminLTE 


## installation

```composer require "sheillendra/yii2-adminlte": "dev-master"```

### config main.php

```
components => [
    'view' => [
        'theme' => [
            'pathMap' => [
                '@app/views' => [
                    '@backend/themes/adminlte/views',
                    '@sheillendra/adminlte/views',
                ],
                '@app/modules' => [
                    '@backend/themes/adminlte/modules',
                    '@sheillendra/adminlte/modules',
                ],
                '@app/widgets' => [
                    '@backend/themes/adminlte/widgets',
                    '@sheillendra/adminlte/widgets',
                ]
            ],
        ],
    ],
],
//for to see default view example, uncoment config below
/*
'controllerMap' => [
    'admin-lte' => 'sheillendra\adminlte\controllers\AdminLteController'
],
*/
```

<span style="color:red">**stop here and run your aplication**, you can see the default implement of adminlte theme.<span/>


## custom

create file ```web/js/adminlte/custom.js``` to add custom js.
other than that you can add new javascript file, css or images,
and place your asset class in ```backend/themes/adminlte/assets```
and call them in view who use the assets.

and you can replace all dafault view by creating a file with the same name : 
1. create folder ```backend/themes/adminlte/views``` for controller views and layouts;
2. create folder ```backend/themes/adminlte/modules``` for module views;
3. create folder ```backend/themes/adminlte/widgets``` for widgets views;
4. create file ```backend/themes/adminlte/views/layouts/main-header.php``` to replace default header.
4. create file ```backend/themes/adminlte/views/layouts/main-footer.php``` to replace default footer.
4. create file ```backend/themes/adminlte/views/layouts/main-sidebar.php``` to replace default sidebar.
5. create file ```backend/themes/adminlte/views/layouts/_init-view.php``` to replace default init, like path of favicon.

## components

### grid

change your index view from gii result :
```
<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\MenusSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Menus Cruds');
$this->params['breadcrumbs'][] = $this->title;
$this->params['selectedSidebar'] = 'menu';
?>
<div class="menus-crud-index">
    <?php
    echo $this->render('@sheillendra/adminlte/views/_partials/grid', [
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'caption' => $this->title,
        'tools' => Html::a(
                Yii::t('app', 'Create Menu')
                , ['create']
                , ['class' => 'btn btn-success btn-sm']
        ),
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'label',
            'url:url',
            'options',
            'parent_id',
            // 'icon',
            // 'visible',
            // 'created_at',
            // 'created_by',
            // 'updated_at',
            // 'updated_by',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>
</div>
```