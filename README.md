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

**Gii**

This extension come with gii. Once the extension is installed, 
simply modify your application configuration as follows:
```
// /config/main-local.php        for yii2-app-advanced
// /config/web.php               for yii2-basic
...
if (!YII_ENV_TEST) {
    // configuration adjustments for 'dev' environment 
    ...
    
    $config['modules']['gii'] = [
        'class'=>'yii\gii\Module',
       'generators' =>[
           'adminlte-crud' => ['class'=>'sheillendra\adminlte\gii\generators\crud\Generator']
        ]
    ];
}
```

## custom

Run ```CRUD GII``` you will get sample code to custom

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
