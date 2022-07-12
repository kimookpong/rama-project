<?php

use common\models\Wordregister;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'แบบทดสอบการรู้คิด';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="px-4 py-5 text-center">
        <h1 class="display-1 fw-bold text-orose-medium" style="font-size: 10rem;">1</h1>
        <div class="col-lg-6 mx-auto">
            <div class=" text-center my-4 " style="height: 43px;">
            <div class="text-center" id="boxContainer" style="display:none;">
    <div class="boll"></div>
    <div class="boll"></div>
    <div class="boll"></div>
    <div class="boll"></div>
    <div class="boll"></div>
    </div>
            </div>
            <!--<p class="lead my-4">
                <i class="fa-solid fa-circle active"></i>
                <i class="fa-solid fa-circle text-next"></i>
                <i class="fa-solid fa-circle text-next"></i>
                <i class="fa-solid fa-circle text-next"></i>
            </p>-->
        </div>
    </div>
</div>
<audio id="questionAudioIntro" autoplay="">
    <source src="<?= Yii::getAlias('@web') ?>/sounds/toolx/q_1_intro.mp3" type="audio/mpeg">
    Your browser does not support the audio element.
</audio>
<audio id="questionAudioStart">
    <source src="<?= Yii::getAlias('@web') ?>/sounds/toolx/q_1_start.mp3" type="audio/mpeg">
    Your browser does not support the audio element.
</audio>
<audio id="questionAudio1">
    <source src="<?= Yii::getAlias('@web') ?>/sounds/toolx/<?= Wordregister::find()->where(['word' => $model->regsiter1])->one()->voicepart ?>" type="audio/mpeg">
    Your browser does not support the audio element.
</audio>
<audio id="questionAudio2">
    <source src="<?= Yii::getAlias('@web') ?>/sounds/toolx/<?= Wordregister::find()->where(['word' => $model->regsiter2])->one()->voicepart ?>" type="audio/mpeg">
    Your browser does not support the audio element.
</audio>
<audio id="questionAudio3">
    <source src="<?= Yii::getAlias('@web') ?>/sounds/toolx/<?= Wordregister::find()->where(['word' => $model->regsiter3])->one()->voicepart ?>" type="audio/mpeg">
    Your browser does not support the audio element.
</audio>
<div class="container fixed-bottom mb-3">
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data', 'id' => 'form_voice']]); ?>
    <input type="file" accept="audio/*" name="file_audio" id="file_audio" style="display:none" />
    <input class="form-control" type="hidden" id="speech_text" name="speech_text" />
    <?php ActiveForm::end(); ?>
</div>

<script type="text/javascript">
    questionAudioIntro.onended = function() {
        setTimeout(function() {
            document.getElementById("questionAudio1").play();
        }, 1000);
    }
    questionAudio1.onended = function() {
        document.getElementById("questionAudio2").play();
        console.log('end_1');
    }
    questionAudio2.onended = function() {
        document.getElementById("questionAudio3").play();
        console.log('end_2');
    }
    questionAudio3.onended = function() {
        console.log('end_3');
        setTimeout(function() {
            document.getElementById("questionAudioStart").play();
        }, 1000);
    }

    questionAudioStart.onended = function() {
        // start beep sounds
        var audio = new Audio();
        audio.src = '<?= Yii::getAlias('@web') ?>/sounds/beep.mp3';
        audio.play();
        audio.onended = function() {
            document.getElementById('boxContainer').style.display = 'flex'
            handleAction(<?= Yii::$app->helpers->param('toolx_3word') ?>, 'file_audio', 'speech_text', 'form_voice');
        }
    }
    window.onload = function() {
        document.getElementById("questionAudioIntro").autoplay;
    };
</script>