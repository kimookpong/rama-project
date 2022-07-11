<?php

use common\models\Toolx;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'แบบทดสอบการรู้คิด';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12 mb-2">
        <h3 class="display-5 orose font-inter-bold mb-1">แบบทดสอบการรู้คิด</h3><br><br>
            <p class="title1 font-inter-bold   text-center">ต่อไปเป็น<br>แบบทดสอบการรู้คิด<br>ประกอบด้วย<br>คำถาม 4 ข้อ</p><br>
            <p class="title1 font-inter-bold   text-center">ผู้สูงอายุต้องทำแบบ<br>ทดสอบขั้นตอนนี้<br>ด้วยตนเองเท่านั้น</p>
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
        <div class="col py-5 mx-5">
        <a href="<?= Url::toRoute(['toolx/start', 'id' => $id]); ?>" type="submit" class="font-inter fw-bold w-100 btn btn-lg rounded-pill btn-brain">หน้าถัดไป <i class="fa fa-arrow-circle-right float-end py-2 mr-2"></i></a>

        </div>
    </div>

</div>