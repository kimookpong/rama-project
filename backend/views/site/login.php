<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var \common\models\LoginForm $model */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

$this->title = 'Login';
?>
<div class="login-box">
    <!-- /.login-logo -->

    <!-- /.card -->
</div>
<!-- /.login-box -->

<div class="site-login">
    <div class="mt-5 offset-lg-3 col-lg-6">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <h1><b>Admin</b>istrator</h1>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'autocomplete' => 'off']) ?>
                <?= $form->field($model, 'password')->passwordInput() ?>

                <div class="row">
                    <div class="col-8">
                        <?= $form->field($model, 'rememberMe')->checkbox(['value' => false]) ?>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-block', 'name' => 'login-button']) ?>
                    </div>
                    <!-- /.col -->
                </div>
                <?php ActiveForm::end(); ?>
                <!-- /.social-auth-links -->
                <!--
                <p class="mb-1">
                    <a href="forgot-password.html">I forgot my password</a>
                </p>
                <p class="mb-0">
                    <a href="register.html" class="text-center">Register a new membership</a>
                </p>
-->
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</div>