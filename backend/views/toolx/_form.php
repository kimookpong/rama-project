<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\toolx */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="toolx-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'register_id')->textInput() ?>

    <?= $form->field($model, 'regsiter1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'regsiter2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'regsiter3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'datenow')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'caseregsiter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'regsiterwordseg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'orientation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fruitfluency')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'fruitwordseg')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'recall')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'recallwordseg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'voiceregsiter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'voiceorientationpath')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'voicefruitluency')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'voicerecall')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'regsiter_score')->textInput() ?>

    <?= $form->field($model, 'fruitfluency_score')->textInput() ?>

    <?= $form->field($model, 'wordregsiter_score')->textInput() ?>

    <?= $form->field($model, 'orientation_score')->textInput() ?>

    <?= $form->field($model, 'user_a_record_regsiter_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_a_record_regsiter_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_a_record_regsiter_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_b_record_regsiter_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_b_record_regsiter_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_b_record_regsiter_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_b_record_orientation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_b_record_friut')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'user_b_record_recall1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_b_record_recall2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_b_record_recall3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'create_at')->textInput() ?>

    <?= $form->field($model, 'update_at')->textInput() ?>

    <?= $form->field($model, 'flagdel')->textInput() ?>

    <?= $form->field($model, 'success')->textInput() ?>

    <?= $form->field($model, 'user_b_record_friut_score')->textInput() ?>

    <?= $form->field($model, 'user_id_b')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
