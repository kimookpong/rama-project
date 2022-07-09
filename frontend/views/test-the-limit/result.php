<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ผลการทดสอบชุดเตรียมความพร้อม';
$this->params['breadcrumbs'][] = $this->title;

if ($model->score == 3) {


?>
    <div class="ad8-create text-center h-100">
        <div class="row h-100">
            <div class="circlesuccessttl">
                <h3 class="mx-4">คุณผ่านขั้นตอนเตรียมความพร้อมแล้ว</h3>
            </div>
        </div>
        <div class="container fixed-bottom">
            <div class="row">
                <div class="col py-4 mx-auto">
                    <a class="font-inter w-100 btn btn-lg rounded-pill btn-brain" href="<?= Url::toRoute(['toolx/index', 'id' => $model->register_id]); ?>">หน้าถัดไป <i class="fa fa-arrow-circle-right float-end py-1" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>

<?php } else { ?>

    <div class="ad8-create text-center h-100">
        <div class="row h-100">
            <div class="circlefalse">
                <h3 class="mx-4">เนื่องจากเตรียมความพร้อมไม่สมบูรณ์ ระบบไม่สามารถดำเนินการต่อไปได้</h3>
            </div>
        </div>
        <div class="container fixed-bottom">
            <div class="row">
                <div class="col py-4 mx-auto">
                    <a class="font-inter w-100 btn btn-lg rounded-pill btn-brain" href="<?= Url::toRoute(['site/index', 'id' => $model->register_id]); ?>">ออก</a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>