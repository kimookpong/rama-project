<?php

use common\models\Toolx;
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
            <h3 class="title2 font-inter text-yellow mb-3">แบบทดสอบการรู้คิด</h3>
            <p class="title2 font-inter mb-4 text-muted text-center">ต่อไปเป็นแบบทดสอบการรู้คิด ประกอบไปด้วยคำถาม 4 ข้อ</p>
            <hr>
            <p class="title2 font-inter mb-4 text-muted text-center">ผู้สูงอายุต้องทำแบบทดสอบนี้ด้วยตนเองเท่านั้น</p>
        </div>
    </div>

</div>
<audio id="questionAudio" autoplay="">
                <source src="<?= Yii::getAlias('@web') ?>/sounds/toolx/intro.mp3" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio>
            <script type="text/javascript">

    window.onload = function() {
        document.getElementById("questionAudio").autoplay;
    };
</script>
<div class="container fixed-bottom mb-3">
    <div class="row">
        <div class="col py-2 mx-auto">
            <a href="<?= Url::toRoute(['toolx/start', 'id' => $id]); ?>" type="submit" class="font-inter fw-bold w-100 btn btn-lg rounded-pill btn-brain">หน้าถัดไป <i class="fa-solid fa-angle-right float-end py-1"></i></a>
            <!--
            <a href="<?= Url::toRoute(['toolx/test-what-day', 'id' => $id]); ?>" type="submit" class="font-inter fw-bold w-100 btn btn-lg rounded-pill btn-brain">วันนี้วันอะไร <i class="fa-solid fa-angle-right float-end py-1"></i></a>

            <a href="<?= Url::toRoute(['toolx/test-fruit', 'id' => $id]); ?>" type="submit" class="font-inter fw-bold w-100 btn btn-lg rounded-pill btn-brain">ผลไม้ <i class="fa-solid fa-angle-right float-end py-1"></i></a>

            <a href="<?= Url::toRoute(['toolx/test-recall', 'id' => $id]); ?>" type="submit" class="font-inter fw-bold w-100 btn btn-lg rounded-pill btn-brain">word recall <i class="fa-solid fa-angle-right float-end py-1"></i></a>
-->
        </div>
    </div>

</div>