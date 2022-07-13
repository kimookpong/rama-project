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
        <h1 class="display-1 fw-bold text-orose-medium" style="font-size: 10rem;">3</h1>
        <div class="col-12"><br><br>
            <div class=" text-center my-4 " style="height: 43px;"> 
   <div class="text-center" >
    <div class="boll"></div>
    <div class="boll"></div>
    <div class="boll"></div>
    <div class="boll"></div>
    <div class="boll"></div>
    </div> </div>
    <div class="text-center" id="boxContainer" style="display:none;"></div>

               <!-- <div class="boxContainer mx-auto" id="boxContainer" style="display:none;">
                    <div class="box box1"></div>
                    <div class="box box2"></div>
                    <div class="box box3"></div>
                    <div class="box box4"></div>
                    <div class="box box5"></div>
                    <div class="box box6"></div>
                    <div class="box box7"></div>
                </div>-->
               
            </div>
           <!-- <p class="lead my-4">
                <i class="fa-solid fa-circle text-muted"></i>
                <i class="fa-solid fa-circle text-muted"></i>
                <i class="fa-solid fa-circle active"></i>
                <i class="fa-solid fa-circle text-next"></i>
            </p>-->
        </div>
    </div>
</div>
<audio id="questionAudioStart" autoplay="">
    <source src="<?= Yii::getAlias('@web') ?>/sounds/toolx/q_3.mp3" type="audio/mpeg">
    Your browser does not support the audio element.
</audio>
<div class="container fixed-bottom mb-3">
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data', 'id' => 'form_voice']]); ?>
    <input type="file" accept="audio/*" name="file_audio" id="file_audio" style="display:none" />
    <input class="form-control" type="hidden" id="speech_text" name="speech_text" />
    <?php ActiveForm::end(); ?>
</div>

<script type="text/javascript">
    var delay = <?= Yii::$app->helpers->param('toolx_fruit_delay') ?>;
    questionAudioStart.onended = function() {
        // start beep sounds
        var audio = new Audio();
        audio.src = '<?= Yii::getAlias('@web') ?>/sounds/beep.mp3';
        setTimeout(function() {
            audio.play();
        }, delay * 1000);

        audio.onended = function() {
            document.getElementById('boxContainer').style.display = 'flex'
            handleAction(<?= Yii::$app->helpers->param('toolx_fruit') ?>, 'file_audio', 'speech_text', 'form_voice');
        }
    }
    window.onload = function() {
        document.getElementById("questionAudioStart").autoplay;
    };
</script>