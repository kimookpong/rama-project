<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Ad8 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ad8-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'register_id')->textInput() ?>

    <?= $form->field($model, 'respondent')->textInput() ?>

    <?= $form->field($model, 'question1')->textInput() ?>

    <?= $form->field($model, 'question2')->textInput() ?>

    <?= $form->field($model, 'question3')->textInput() ?>

    <?= $form->field($model, 'question4')->textInput() ?>

    <?= $form->field($model, 'question5')->textInput() ?>

    <?= $form->field($model, 'question6')->textInput() ?>

    <?= $form->field($model, 'question7')->textInput() ?>

    <?= $form->field($model, 'question8')->textInput() ?>

    <?= $form->field($model, 'score')->textInput() ?>

    <?= $form->field($model, 'create_at')->textInput() ?>

    <?= $form->field($model, 'update_at')->textInput() ?>

    <?= $form->field($model, 'flagdel')->textInput() ?>

    <?= $form->field($model, 'success')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
