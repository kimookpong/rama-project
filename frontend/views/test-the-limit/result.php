<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Testandlimits';
$this->params['breadcrumbs'][] = $this->title;

if ($model->score == 3) {


?>
    <div class="container pb-5">
        <div class="row">
            <div class="col-lg-12 mx-auto pt-4">
                <p class="title2 text-center">คุณผ่านขั้นตอนเตรียมความพร้อมแล้ว</p>
            </div>
        </div>
    </div>
    <div class="container fixed-bottom mb-3">
        <div class="row">
            <div class="col py-2 mx-auto">
                <a href="<?= Url::toRoute(['toolx/index', 'id' => $model->register_id]); ?>" type="submit" class="font-inter fw-bold w-100 btn btn-lg rounded-pill btn-brain">หน้าถัดไป</a>
            </div>
        </div>
    </div>

<?php } else { ?>
    <div class="container pb-5">
        <div class="row">
            <div class="col-lg-12 mx-auto pt-4">
                <p class="title2 text-center">เนื่องจากเตรียมความพร้อมไม่สมบูรณ์ ระบบไม่สามารถดำเนินการต่อไปได้</p>
            </div>
        </div>
    </div>
    <div class="container fixed-bottom mb-3">
        <div class="row">
            <div class="col py-2 mx-auto">
            <a href="<?= Url::toRoute(['toolx/index', 'id' => $model->register_id]); ?>" type="submit" class="font-inter fw-bold w-100 btn btn-lg rounded-pill btn-brain">หน้าถัดไป</a>

             <!--   <a href="<?= Url::toRoute(['site/index']); ?>" type="submit" class="font-inter fw-bold w-100 btn btn-lg rounded-pill btn-brain">ออก</a>-->
            </div>
        </div>
    </div>
<?php } ?>