<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ผลการทดสอบชุดเตรียมความพร้อม';
$this->params['breadcrumbs'][] = $this->title;
@$x = Yii::$app->helpers->param('x');
if ($model->score >= $x) {


?>
    <div class="ad8-create text-center h-100">
        <div class="row h-100">
            <div class="circlesuccessttl">
                <h3 class="title1 font-inter-bold">คุณผ่านขั้นตอนเตรียมความพร้อมแล้ว</h3>
            </div>
        </div>
        <div class="container fixed-bottom">
            <div class="row">
                <div class="col py-5 mx-4">
                    <a class="font-inter w-100 btn btn-lg rounded-pill btn-brain left-icon-holder" href="<?= Url::toRoute(['toolx/index', 'id' => $model->register_id]); ?>">หน้าถัดไป <i class="fa fa-arrow-circle-right float-end"></i></a>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
         var audio = new Audio();
        audio.src = '<?= Yii::getAlias('@web') ?>/sounds/test-the-limit/success.mp3';
        audio.play();
        audio.onended = function() {
            var audio2 = new Audio();
            audio2.src = '<?= Yii::getAlias('@web') ?>/sounds/test-the-limit/next.mp3';
            audio2.play();
        }
    </script>
<?php } else { ?>

    <div class="ad8-create text-center h-100">
        <div class="row h-100">
            <div class="circlefalse">
                <h3 class="title1 font-inter-bold">เนื่องจากเตรียมความพร้อมไม่สมบูรณ์ ระบบไม่สามารถดำเนินการต่อไปได้</h3>
            </div>
        </div>
        <div class="container fixed-bottom">
            <div class="row">
                <div class="col py-5 mx-4">
                    <a class="font-inter w-100 btn btn-lg rounded-pill btn-brain " href="<?= Url::toRoute(['site/index', 'id' => $model->register_id]); ?>">ออก</a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>