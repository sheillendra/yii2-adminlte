<?php

use yii\grid\GridView;
use yii\widgets\Pjax;

/**
 * This is partials view of gridview
 * call render to this view each create gridview
 * 
 * ```
 * echo $this->render('@sheillendra/adminlte/views/_partials/grid', [
 *     'dataProvider' => $dataProvider,
 *     'filterModel' => $searchModel,
 *     'caption' => $caption,
 *     'tools' => $tools,
 *     'columns' => [
 *         ['class' => 'yii\grid\SerialColumn'],
 *         '_id',
 *         'username',
 *         'auth_key',
 *         'password_hash',
 *         'password_reset_token',
 *         'email',
 *         // 'created_at',
 *         // 'updated_at',
 *         ['class' => 'yii\grid\ActionColumn'],
 *     ]
 * ]);
 * ```
 * 
 * @var string $caption caption of table
 * @var string $tools tools of table, usually button you can use Html::a() 
 *   example Html::a(Yii::t('app', 'New User'), ['create'], ['class' => 'btn btn-success btn-sm'])
 * 
 */

Pjax::begin();
echo GridView::widget([
    'options' => ['class' => 'box box-primary'],
    'dataProvider' => $dataProvider,
    'filterModel' => $filterModel,
    'layout' => <<<HTML
        <div class="box-header with-border">
            <h3 class="box-title">{$caption}</h3>
            <div class="box-tools">
                {$tools}
            </div>
        </div>
        <div class="box-body table-responsive">{items}</div>
        <div class="box-footer clearfix">
            <div class="pull-left">{summary}</div>
            <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">«</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">»</a></li>
            </ul>
        </div>
HTML
    ,
    'columns' => $columns,
]);

Pjax::end();
