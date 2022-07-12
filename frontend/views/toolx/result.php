<?php

use common\models\Toolx;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'สิ้นสุดการคัดกรองสมองเรื่องการรู้คิด';
$this->params['breadcrumbs'][] = $this->title;


?>

<div class="ad8-create text-center h-100">
    <div class="row h-100">
        <div class="circlesuccess">
            <h3 class="title1 font-inter-bold">สิ้นสุดการคัดกรองสมองเรื่องการรู้คิด</h3>
        </div>
    </div>
    <audio id="questionAudio" autoplay="">
            <source src="<?= Yii::getAlias('@web') ?>/sounds/toolx/end.mp3" type="audio/mp3">
            Your browser does not support the audio element.
        </audio>
        <script type="text/javascript">
    window.onload = function() {
        document.getElementById("questionAudio").autoplay;
    };
</script>

    <div class="container fixed-bottom">
        <div class="row">
            <div class="col py-4 mx-auto">
                <a class=" w-100 btn btn-lg rounded-pill btn-brain" href="<?= Url::toRoute(['site/index']); ?>">ออก <i class="fa fa-arrow-circle-right float-end py-1" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</div>