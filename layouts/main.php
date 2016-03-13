<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use sheillendra\adminlte\assets\AppAsset;
use common\widgets\Alert;

$appAsset = AppAsset::register($this);

$appAssetDepend = Yii::$app->assetManager->getBundle($appAsset->depends[0]);

?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body class="hold-transition fixed skin-blue sidebar-mini">
        <?php $this->beginBody() ?>
        <div class="wrapper">
            <?php echo $this->render('@app/views/layouts/main_header',['appAssetDepend' => $appAssetDepend])?>
            <!-- Left side column. contains the logo and sidebar -->
            <?php echo $this->render('@app/views/layouts/main_main-sidebar',['appAssetDepend' => $appAssetDepend])?>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1><?php echo $this->params['page-title']?></h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <?php echo $content?>
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <?php echo $this->render('@app/views/layouts/main_footer');?>
            <?php echo $this->render('@app/views/layouts/main_control-sidebar');?>
        </div>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
