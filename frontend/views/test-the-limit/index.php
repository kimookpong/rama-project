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
            <h3 class="title2 mini-boid font-inter-bold mb-1">เตรียมความพร้อม</h3>
            <p class=" mb-4 text-muted">ต่อไปเป็นขั้นตอนเตรียมความพร้อมก่อนทำแบบทดสอบการรู้คิด ประกอบคำถาม 3 ข้อผู้สูงอายุต้องทำแบบทดสอบนี้ด้วยตนเองเท่านั้น</p>
            <hr class="mini-boid">
            <p class="title2 font-inter-bold mb-4 text-muted text-center">กรุณาทดสอบไมโครโฟน<br>และลำโพงให้พร้อม<br>และอยู่ในห้องที่ไม่มี<br>เสียงรบกวน</p>
        </div>
        <audio id="questionAudio" autoplay="">
            <source src="<?= Yii::getAlias('@web') ?>/sounds/test-the-limit/intro1.mp3" type="audio/mp3">
            Your browser does not support the audio element.
        </audio>
    </div>
    <div class="row pb-3">
        <div class="col-lg-6 mx-auto text-center">
            <div class="text-muted pt-3 text-center fs-3">
                <i class="fa-solid fa-volume-high my-auto" style="width:50px;"></i>
                <button onclick="TestVolume();" class="font-inter fw-bold btn rounded-pill btn-outline-brain" style="width: 40%;">ทดสอบ<br />ลำโพง</button>
            </div>
            <div class="text-muted pt-3 text-center fs-3">
                <i class="fa-solid fa-microphone my-auto" style="width:50px;"></i>
                <button onclick="testMicrophone(5,'testMicro');" class="font-inter fw-bold btn rounded-pill btn-outline-brain" style="width: 40%;" id="testMicro">ทดสอบ<br />ไมโครโฟน</button>
            </div>
        </div>
    </div>
</div>
<div class="container fixed-bottom mb-3">
    <div class="row">
        <div class="col py-5 mx-4">
            <a href="<?= Url::toRoute(['test-the-limit/start', 'id' => $id]); ?>" type="submit" class="font-inter fw-bold w-100 btn btn-lg rounded-pill btn-brain">หน้าถัดไป <i class="fa fa-arrow-circle-right float-end py-1"></i></a>
        </div>
    </div>
</div>
<script type="text/javascript">
    window.onload = function() {
        document.getElementById("questionAudio").autoplay;
    };
</script>