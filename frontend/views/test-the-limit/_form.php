<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Testandlimit */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="testandlimit-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'register_id')->textInput() ?>

    <?= $form->field($model, 'qustion1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'qustion2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'qustion3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'voicepath1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'voicepath2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'voicepath3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'score')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'userrecord_qustion1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'userrecord_qustion2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'userrecord_qustion3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'voicequality1')->textInput() ?>

    <?= $form->field($model, 'voicequality2')->textInput() ?>

    <?= $form->field($model, 'voicequality3')->textInput() ?>

    <?= $form->field($model, 'create_at')->textInput() ?>

    <?= $form->field($model, 'update_at')->textInput() ?>

    <?= $form->field($model, 'flagdel')->textInput() ?>

    <?= $form->field($model, 'success')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
