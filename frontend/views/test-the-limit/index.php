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
            <h3 class="title2 font-inter text-sky mb-3">เตรียมความพร้อม</h3>
            <p>ต่อไปเป็นขั้นตอนเตรียมความพร้อมก่อนทำแบบทดสอบการรู้คิดสำหรับผู้สูงอายุ ซึ่งผู้สูงอายุต้องทำด้วยตนเองเท่านั้น โดยมีคำถาม 3 ข้อด้วยกัน</p>
            <hr>
            <p class="title2 font-inter mb-4 text-muted text-center">กรุณาเตรียมอุปกรณ์ให้พร้อมและอยู่ในห้องที่ไม่มีเสียงรบกวน โดยคุณฟังและทำตามคำสั่งจากเสียงที่ได้ยิน</p>
        </div>
    </div>
    <div class="row ">
        <div class="col-lg-6 mx-auto">
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
        <div class="col py-2 mx-auto">
            <a href="<?= Url::toRoute(['test-the-limit/start', 'id' => $id]); ?>" type="submit" class="font-inter fw-bold w-100 btn btn-lg rounded-pill btn-brain">หน้าถัดไป <i class="fa-solid fa-angle-right float-end py-1"></i></a>
        </div>
    </div>
</div>