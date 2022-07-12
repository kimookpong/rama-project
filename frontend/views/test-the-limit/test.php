<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'คำถามชุดเตรียมความพร้อม';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="px-4 py-5 text-center">
        <h1 class="display-1 fw-bold text-sky-light" style="font-size: 10rem;color:#87D0D480;"><?= $question ?></h1>
        <div class="col-lg-6 mx-auto">
            <div class=" text-center my-4 " style="height: 43px;">
                <div class="boxContainer mx-auto" id="boxContainer" style="display:none;">
                    <div class="box box1"></div>
                    <div class="box box2"></div>
                    <div class="box box3"></div>
                    <div class="box box4"></div>
                    <div class="box box5"></div>
                    <div class="box box6"></div>
                    <div class="box box7"></div>
                </div>
            </div>
            <p class="lead my-4">
                <?php for ($i = 1; $i <= 3; $i++) {
                    if ($question == $i) {
                        echo '<i class="fa-solid fa-circle active"></i> ';
                    } else if ($question > $i) {
                        echo '<i class="fa-solid fa-circle text-muted"></i> ';
                    } else {
                        echo '<i class="fa-solid fa-circle text-next"></i> ';
                    }
                } ?>
            </p>
            <p id="instructions"></p>
        </div>
    </div>
</div>
<audio id="questionAudio" autoplay="">
    <source src="<?= Yii::getAlias('@web') ?>/sounds/test-the-limit/q_<?= $question ?>.mp3" type="audio/mpeg">
    Your browser does not support the audio element.
</audio>
<div class="container fixed-bottom mb-3">
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data', 'id' => 'form_voice']]); ?>
    <input type="file" accept="audio/*" name="file_audio" id="file_audio" style="display:none" />
    <input class="form-control" type="hidden" id="speech_text" name="speech_text" />
    <!--
    <div class="row">
        <div class="col py-2 mx-auto">
            <button type="submit" class="font-inter fw-bold w-100 btn btn-lg rounded-pill btn-brain">หน้าถัดไป <i class="fa-solid fa-angle-right float-end py-1"></i></button>
        </div>
    </div>
-->
    <?php ActiveForm::end(); ?>
</div>

<script type="text/javascript">
    questionAudio.onended = function() {
        // start beep sounds
        var audio = new Audio();
        audio.src = '<?= Yii::getAlias('@web') ?>/sounds/beep.mp3';
        audio.play();
        audio.onended = function() {
            document.getElementById('boxContainer').style.display = 'flex'
            //StartTextToSpeech('speech_text', 'speech_text_final');
            handleAction(<?= Yii::$app->helpers->param('test_the_limit') ?>, 'file_audio', 'speech_text', 'form_voice');
        }
    }
    window.onload = function() {
        document.getElementById("questionAudio").autoplay;
    };
</script>