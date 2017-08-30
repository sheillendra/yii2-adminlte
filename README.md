# yii2-adminlte
Implement AdminLTE 


## installation

```composer require "sheillendra/yii2-adminlte": "*"```

### config main.php
-------------

```
components => [
    'view' => [
        'theme' => [
            'pathMap' => [
                '@app/views' => [
                    '@sheillendra/adminlte/views',
                ],
                '@app/modules' => [
                    '@sheillendra/adminlte/modules',
                ],
                '@app/widgets' => [
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

##custom
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