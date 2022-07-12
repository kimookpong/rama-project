<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'เตรียมความพร้อม';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="container mb-1">
    <div class="row">
        <div class="col-lg-12 mx-1 ">
            <h3 class="display-5 mini-boid font-inter-bold mb-1">เตรียมความพร้อม</h3><br><br>
            <p class="title2 mb-4 font-inter-bold text-center">ต่อไปเป็นขั้นตอนเตรียม<br>ความพร้อมก่อนทำ<br>แบบทดสอบการรู้คิด<br>ประกอบด้วย<br>คำถาม 3 ข้อ<br><br>ผู้สูงอายุต้องทำแบบ<br>ทดสอบขั้นตอนนี้<br>ด้วยตนเองเท่านั้น</p>
        </div>
        <audio id="questionAudio" autoplay="">
            <source src="<?= Yii::getAlias('@web') ?>/sounds/test-the-limit/intro1.mp3" type="audio/mp3">
            Your browser does not support the audio element.
        </audio>
    </div>
</div>
<div class="container fixed-bottom mb-3">
    <div class="row">
        <div class="col py-5 mx-4">
            <a href="<?= Url::toRoute(['test-the-limit/start', 'id' => $id]); ?>" type="submit" class="font-inter fw-bold w-100 btn btn-lg rounded-pill btn-brain">หน้าถัดไป <i class="fa fa-arrow-circle-right float-end py-2 mr-2"></i></a>
        </div>
    </div>
</div>
<script type="text/javascript">
    window.onload = function() {
        document.getElementById("questionAudio").autoplay;
    };
</script>