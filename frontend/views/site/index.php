<?php

/** @var yii\web\View $this */

use yii\helpers\Url;

$this->title = 'My Yii Application';
?>

<div class="row">
    <div class="col-md-10 p-lg-3 mx-auto ">
        <h1 class="display-4 font-inter-bold">brain.test <br> แบบคัดกรองสมองด้านการรู้คิดสำหรับประชาชน </h1>

        <div class="col-3 col-lg-4 col-md-6 mx-auto py-3 mb-3">
            <img src="<?= Yii::getAlias('@web') ?>/images/logo.svg" class="img-fluid">
        </div>

        <p class="">เครื่องมือนี้มีเป้าหมายเพื่อให้ประชาชนประเมินระดับความรู้คิดได้ด้วยตนเอง ถ้าผิดปกติแนะนำให้เข้าสู่ระบบสุขภาพเพื่อวินิจฉัย ตั้งแต่ระยะเริ่มต้นของโรคและชะลอการดำเนินโรค รวมถึงภาวะพึ่งพิง ในอนาคตได้</p>
        <!--
        <a class="btn btn-lg rounded-pill btn-brain" href="<?= Yii::getAlias('@web') ?>/site/about">เริ่มการทดสอบ</a>
        <br />
-->
        <div class="container fixed-bottom">
            <div class="row">
                <div class="col py-4 mx-auto text-center">
                    <a class="btn btn-lg rounded-pill btn-brain" href="<?= Url::toRoute(['site/start']); ?>">เริ่มการทดสอบ</a>
                </div>
                <!--
                <div class="col py-4 mx-auto text-center">
                    <a class="btn btn-lg rounded-pill btn-brain" href="<?= Url::toRoute(['test-the-limit/index', 'id' => 1]); ?>">Test the limit</a>
                </div>
-->
            </div>
        </div>
    </div>