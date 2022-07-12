<?php

/** @var yii\web\View $this */

use yii\helpers\Url;

$this->title = 'แบบคัดกรองสมองด้านการรู้คิดสำหรับประชาชน';
?>

<div class="row pb-1">
    <div class="col-md-10 p-lg-3 mx-auto px-4 "><br><br><br>
        <h1 class="display-5 font-inter-bold">แบบคัดกรองสมองด้านการรู้คิดสำหรับประชาชน </h1>
    </div>

    <div class="col-12 mb-2 text-center" style="background-color: #9adfe4;">
        <img src="<?= Yii::getAlias('@web') ?>/images/hero-04.png" class="img-fluid text-center" style="max-height:500px;">
    </div>


    <p class="pl-4 mb-5 pb-5">เครื่องมือนี้มีเป้าหมายเพื่อให้ประชาชนประเมินระดับความรู้คิดได้ด้วยตนเอง ถ้าผิดปกติแนะนำให้เข้าสู่ระบบสุขภาพเพื่อวินิจฉัย ตั้งแต่ระยะเริ่มต้นของโรคและชะลอการดำเนินโรค รวมถึงภาวะพึ่งพิง ในอนาคตได้</p>
    <!--
        <a class="btn btn-lg rounded-pill btn-brain" href="<?= Yii::getAlias('@web') ?>/site/about">เริ่มการทดสอบ</a>
        <br />
-->
    <div class="container fixed-bottom p-0">
        <div class="row">
            <div class="col pb-5 mx-4 text-center">
                <a class="btn btn-lg rounded-pill btn-brain font-inter-bold btn-block " href="<?= Url::toRoute(['site/start']); ?>">หน้าถัดไป <i class="fa fa-arrow-circle-right float-end py-2 mr-2"></i></a>
            </div>
        </div>
    </div>
</div>