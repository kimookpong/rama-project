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
<div class="container pb-5">
    <div class="row">
        <div class="col-lg-12 mx-auto pt-4">
            <p class="title2 text-center">Q1</p>
            <p class="title2 text-center">คำตอบ: <?= $model->qustion1 ?></p>
            <p class="text-center">
                <audio id="questionAudio" controls="">
                    <source src="<?= Yii::getAlias('@web') ?>/records/<?= $model->voicepath1 ?>" type="audio/wav">
                    Your browser does not support the audio element.
                </audio>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 mx-auto pt-4">
            <p class="title2 text-center">Q2</p>
            <p class="title2 text-center">คำตอบ: <?= $model->qustion2 ?></p>
            <p class="text-center">
                <audio id="questionAudio" controls="">
                    <source src="<?= Yii::getAlias('@web') ?>/records/<?= $model->voicepath2 ?>" type="audio/wav">
                    Your browser does not support the audio element.
                </audio>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 mx-auto pt-4">
            <p class="title2 text-center">Q3</p>
            <p class="title2 text-center">คำตอบ: <?= $model->qustion3 ?></p>
            <p class="text-center">
                <audio id="questionAudio" controls="">
                    <source src="<?= Yii::getAlias('@web') ?>/records/<?= $model->voicepath3 ?>" type="audio/wav">
                    Your browser does not support the audio element.
                </audio>
            </p>
        </div>
    </div>
</div>
<div class="container fixed-bottom mb-3">
    <div class="row">
        <div class="col py-2 mx-auto">
            <a href="<?= Url::toRoute(['test-the-limit/index', 'id' => 1, 'question' => 1]); ?>" type="submit" class="font-inter fw-bold w-100 btn btn-lg rounded-pill btn-brain">เริ่ม test the limit</a>
        </div>
    </div>
</div>