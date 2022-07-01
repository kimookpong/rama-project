<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>

<div class="row">
    <div class="col-md-10 p-lg-3 mx-auto text-center">
        <h1 class="display-4 font-inter-bold">Brain.Test</h1>
        <p class="title3">เครื่องมือทดสอบสมรรถนะสมองสำหรับประชาชน</p>

        <div class="col-6 mx-auto py-3 mb-3">
            <img src="images/logo.svg" class="img-fluid">
        </div>

        <p class="">เครื่องมือทดสอบสมรรถนะสมองสำหรับประชาชน</p>
        <a class="btn btn-lg rounded-pill btn-brain" href="<?= Yii::getAlias('@web') ?>/site/about">เริ่มการทดสอบ</a>
    </div>
</div>