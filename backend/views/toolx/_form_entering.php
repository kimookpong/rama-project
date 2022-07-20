<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\toolx */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="toolx-form ">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'user_id')->HiddenInput(['value' => Yii::$app->user->identity->id])->label(false); ?>
<h3>บันทึกผล ToolX(เทียบกับเสียงที่ได้ยินจากระบบ)</h3>
บันทึกคำจากระบบที่ได้ยิน
<h5>Registeration(จำคำ 3 คำ)</h5>
    <div class="row g-3">
        <div class="col-4 col-form-label">บันทึกคำจากระบบคำที่ 1</div>
        <div class="col-6"> <?= $form->field($model, 'user_a_record_regsiter_1')->textInput(['maxlength' => true])->label(false) ?></div>
    </div>
    <div class="row g-3">
        <div class="col-4 col-form-label">บันทึกคำจากระบบคำที่ 2</div>
        <div class="col-6"> <?= $form->field($model, 'user_a_record_regsiter_2')->textInput(['maxlength' => true])->label(false) ?></div>
    </div>
    <div class="row g-3">
        <div class="col-4 col-form-label">บันทึกคำจากระบบคำที่ 3</div>
        <div class="col-6"> <?= $form->field($model, 'user_a_record_regsiter_3')->textInput(['maxlength' => true])->label(false) ?></div>
    </div>

    <div class="row g-3">
        <div class="col-3 col-form-label">คุณภาพเสียง</div>
        <div class="col-2">  <?= $form->field($model, 'user_a_voice_quality1')->checkBox() ?></div>
        <div class="col-3">  <?= $form->field($model, 'user_a_voice_quality2')->checkBox() ?></div>
        <div class="col-3">  <?= $form->field($model, 'user_a_voice_quality3')->checkBox() ?></div>

    </div>


    <div class="text-center">
        <?= Html::ResetButton('Reset', ['class' => 'btn btn-danger']) ?>
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div></div>
