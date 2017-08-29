<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use sheillendra\adminlte\assets\ICheckAsset;

ICheckAsset::register($this);

$this->context->layout = '//blank';
$this->params['class-page'] = 'login-page';

$template = <<<HTML
        {input}
        <span class="{icon} form-control-feedback"></span>
        {error}
HTML;
?>
<div class="login-box">
    <div class="login-logo">
        <b>Admin</b> Login
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

        <?php
        echo $form->field($model, 'username', [
            'options' => ['class' => 'form-group has-feedback'],
            'template' => strtr($template, ['{icon}' => 'glyphicon glyphicon-user']),
            'inputOptions' => [
                'placeholder' => $model->getAttributeLabel('username'),
                'value' => $model->username
            ],
        ])->textInput(['autofocus' => true])
        ?>

        <?php
        echo $form->field($model, 'password', [
            'options' => ['class' => 'form-group has-feedback'],
            'template' => strtr($template, ['{icon}' => 'glyphicon glyphicon-lock']),
            'inputOptions' => [
                'placeholder' => $model->getAttributeLabel('password'),
            ],
        ])->passwordInput()
        ?>

        <div class="row">
            <div class="col-xs-8">
                <?php
                echo $form->field($model, 'rememberMe', [
                    'options' => ['class' => 'checkbox icheck'],
                    'template' => '{input}'
                ])->checkbox([
                    'template' => "{beginLabel}\n{input}\n{labelTitle}\n{endLabel}\n{error}\n{hint}"
                ])
                ?>
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
                <?php echo Html::submitButton('Sign In', ['class' => 'btn btn-primary btn-block btn-flat', 'name' => 'login-button']) ?>
            </div>
            <!-- /.col -->
        </div>
        <?php ActiveForm::end(); ?>

        <?php echo Html::a('I forgot my password', ['/site/request-password-reset']) ?>

    </div>
    <!-- /.login-box-body -->
</div>

<?php
$this->registerJs(<<<JS
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
JS
);

$this->registerCss(<<<CSS
    .login-page {
        background: #d2d6de none repeat scroll 0 0;
    }
        
    .login-box {
        margin: 7% auto;
        max-width: 360px;
    }
        
    .login-box-body {
        background: #fff none repeat scroll 0 0;
        border-top: 0 none;
        color: #666;
        padding: 20px;
    }
    .login-logo {
        font-size: 35px;
        font-weight: 300;
        margin-bottom: 25px;
        text-align: center;
    }
CSS
);
