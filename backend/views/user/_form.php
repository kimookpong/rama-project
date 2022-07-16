<?php

use common\models\Role;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\user */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-12">
            <?= $form->field($model, 'username')->textInput() ?>
        </div>
        <div class="col-6">
            <?= $form->field($model, 'fullname')->textInput() ?>
        </div>
        <div class="col-6">
            <?= $form->field($model, 'email')->textInput() ?>
        </div>
        <div class="col-lg-12">
            <div class="form-group field-signupform-password required">
                <label for="signupform-password"><?= $model->username == null ? 'Password' : 'Renew Password' ?></label>
                <input type="password" id="password" class="form-control" name="password" autocomplete="new-password" aria-required="true">
                <div class="invalid-feedback"></div>
            </div>
        </div>
        <div class="col-6">
            <?= $form->field($model, 'role')->dropDownList(ArrayHelper::map(Role::find()->all(), 'id', 'role')) ?>
        </div>
        <div class="col-6">
            <?= $form->field($model, 'status')->dropDownList([10 => 'ใช้งาน', 9 => 'ไม่ใช้งาน']) ?>
        </div>
    </div>
    <hr>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>