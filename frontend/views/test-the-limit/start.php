<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Testandlimits';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12 mx-auto pt-4">
            <p class="title2 font-inter mb-4 text-muted text-center">ให้คุณตั้งใจฟัง และทำตามคำสั่งเสียงที่ได้ยิน โดยเมื่อเริ่มการทดสอบแล้ว จะมีเพียงคำสั่งเสียงเท่านั้น</p>
            <p class="title2 font-inter mb-4 text-muted text-center">ให้คุณตอบคำถามแต่ละข้อหลังจากได้ยินเสียงสัญญาณนี้</p>
            <p>
            <div class=" text-center my-4 " style="height: 43px;">
                <div class="boxContainer mx-auto">
                    <div class="box box1"></div>
                    <div class="box box2"></div>
                    <div class="box box3"></div>
                    <div class="box box4"></div>
                    <div class="box box5"></div>
                    <div class="box box6"></div>
                    <div class="box box7"></div>
                </div>
            </div>
            </p>
            <audio id="questionAudio" autoplay="">
                <source src="<?= Yii::getAlias('@web') ?>/sounds/test-the-limit/intro.mp3" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio>
        </div>
    </div>
</div>
<script type="text/javascript">
    questionAudio.onended = function() {
        // start beep sounds
        var audio = new Audio();
        audio.src = '<?= Yii::getAlias('@web') ?>/sounds/beep.mp3';
        audio.play();
    }
    window.onload = function() {
        document.getElementById("questionAudio").autoplay;
    };
</script>
<div class="container fixed-bottom mb-3">
    <div class="row">
        <div class="col py-2 mx-auto">
            <a href="<?= Url::toRoute(['test-the-limit/test', 'id' => $id, 'question' => 1]); ?>" type="submit" class="font-inter fw-bold w-100 btn btn-lg rounded-pill btn-brain">เริ่มการทดสอบ</a>
        </div>
    </div>
</div>