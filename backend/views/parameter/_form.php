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





    <?= $form->field($model, 'z')->textInput() ?>

    <?= $form->field($model, 'test_the_limit')->textInput() ?>

    <?= $form->field($model, 'toolx_3word')->textInput() ?>

    <?= $form->field($model, 'toolx_fruit')->textInput() ?>

    <?= $form->field($model, 'toolx_recall')->textInput() ?>

    <?= $form->field($model, 'toolx_fruit_delay')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>