<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Parameter */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="parameter-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-12">
            <h4>พารามิเตอร์</h4>
        </div>
        <div class="col-4">
            <?= $form->field($model, 'x')->textInput() ?>
        </div>
        <div class="col-4">
            <?= $form->field($model, 'y')->textInput() ?>
        </div>
        <div class="col-4">
            <?= $form->field($model, 'z')->textInput() ?>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-12">
            <h4>ระยะเวลาบันทึกเสียง (วินาที)</h4>
        </div>
        <div class="col">
            <?= $form->field($model, 'test_the_limit')->textInput() ?>
        </div>
        <div class="col">

            <?= $form->field($model, 'toolx_3word')->textInput() ?>
        </div>
        <div class="col">
            <?= $form->field($model, 'toolx_fruit')->textInput() ?>
        </div>
        <div class="col">
            <?= $form->field($model, 'toolx_recall')->textInput() ?>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-12">
            <h4>ระยะเวลารอสัญญาณ (วินาที)</h4>
        </div>
        <div class="col">
            <?= $form->field($model, 'toolx_fruit_delay')->textInput() ?>
        </div>
    </div>
    <hr>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        <?= Html::Button('Cancel', ['class' => 'btn btn-default float-right']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>