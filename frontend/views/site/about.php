<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'ระบบทดสอบการบันทึกเสียงและตรวจจับข้อความ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">

    <div class="jumbotron text-center bg-transparent">
        <h1><?= Html::encode($this->title) ?></h1>

        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data', 'id' => 'form_voice']]); ?>
        <input type="file" accept="audio/*" name="file_audio" id="file_audio" style="display:none" />
        <input class="form-control" type="text" id="speech_text" name="speech_text" />
        <?php ActiveForm::end(); ?>


        <p id="instructions"></p>

        <p><button class="btn btn-lg btn-success" onclick="startAction(15);" id="counter">Click to speak in 15 sec.</button></p>
    </div>
</div>