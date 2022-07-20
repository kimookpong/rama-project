<?php

use common\models\Register;
use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;
use common\models\Ad8;
use common\models\Testandlimit;
use common\models\Toolx;
use common\models\Fruit;

/* @var $this yii\web\View */
/* @var $model common\models\register */

function DateThai($strDate)
{
  $strYear = date("Y", strtotime($strDate)) + 543;
  $strMonth = date("n", strtotime($strDate));
  $strDay = date("j", strtotime($strDate));
  $strHour = date("H", strtotime($strDate));
  $strMinute = date("i", strtotime($strDate));
  $strSeconds = date("s", strtotime($strDate));
  $strMonthCut = array("", "ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค.");
  $strMonthThai = $strMonthCut[$strMonth];
  return "$strDay $strMonthThai $strYear";
}
$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Registers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
if (isset($_REQUEST['del'])) {
  $model->flagdel = 1;
  $model->save(false);
  Yii::$app->response->redirect(Url::to(['register/view','case_id'=>$_REQUEST['case_id']], true));
}
?>
<div class="register-view">
  <div class="card">
    <div class="card-header">
      <h1 class="card-title">ข้อมูลผู้ลงทะเบียนทดสอบแบบคัดกรองรู้คิด (Toolx)</h1>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-12 col-md-12 col-lg-12 order-2 order-md-1">
          <div class="row">
            <table width="100%" class='table'>
              <tr>
                <td width="15%">
                  <div align="right">ชื่อ - นามสกุล:</div>
                </td>
                <td width="35%"><mark><?= $model->name ?> <?= $model->surname ?></mark></td>
                <td width="15%">
                  <div align="right">โทรศัพท์:</div>
                </td>
                <td width="35%"><mark><?= $model->tel ?></mark></td>
              </tr>
              <tr>
                <td>
                  <div align="right">จังหวัด:</div>
                </td>
                <td width="15%"><mark><?= $model->provinces_id ?></mark></td>
                <td>
                  <div align="right">เพศ:</div>
                </td>
                <td width="15%"><mark><?= $model->sex ?></mark></td>
              </tr>
            </table>
          </div>

          //กรณี Staff เห็นแบบนี้
          <div class="row">
            <div class="col-12">
              <h4>ประวัติการทำแบบทดสอบ</h4>
              <table class="table table-striped table-bordered">
                <tr class="bg-info text-center">
                  <th>#</th>
                  <th>ชื่อ</th>
                  <th>อายุ</th>
                  <th>วันที่ทดสอบ</th>
                  <th>AD8</th>
                  <th>TTL</th>
                  <th>ToolX</th>
                  <th>Complete</th>
                  <th>#</th>
                </tr>
                <?php
                $modelReg = Register::find()->where(['case_id' => $model->caseid])->all();
                foreach ($modelReg as $datas) {
                ?>
                  <tr>
                    <th>1</th>
                    <th><?= $datas->name ?></th>
                    <th class="text-center"><?= $datas->age ?></th>
                    <th class="text-center"><?= DateThai($datas->datetest) ?></th>
                    <th class="text-center"><?= $datas->ad8 ?></th>
                    <th class="text-center"><?= $datas->llt ?></th>
                    <th class="text-center"> <?= $datas->toolx ?></th>
                    <th class="text-center"><?= $datas->complete ?></th>
                    <th class="text-center">
                        <?= Html::a('ลบ', ['view', 'register_id' => $datas->register_id, 'del' => 1], ['class' => 'btn btn-danger btn-sm', 'data-confirm' => 'Are you sure you want to delete this item?', 'data-method' => 'post']) ?>
                  </tr>
                <?php } ?>
              </table>

            </div>
          </div>

          //กรณี Reseacher เห็นแบบนี้
          <div class="row">
            <div class="col-12">
              <h4>ประวัติการทำแบบทดสอบ</h4>
              <table class="table table-striped table-bordered">
                <tr class="bg-info text-center">
                  <th>#</th>
                  <th>ชื่อ</th>
                  <th>อายุ</th>
                  <th>วันที่ทดสอบ</th>
                  <th>รวม AD8</th>
                  <th>รวม TTL</th>
                  <th>TX#1</th>
                  <th>TX#2</th>
                  <th>รวมผลไม้</th>
                  <th>TX#4</th>
                  <th>รวมคะแนน</th>
                  <th>#</th>
                </tr>
                <?php
                $modelReg = Register::find()->where(['case_id' => $model->caseid])->all();
                foreach ($modelReg as $datas) {
                 @ $ad8 = Ad8::find()->where(['register_id' => $datas->register_id])->one();
                @  $toolx = Toolx::find()->where(['register_id' => $datas->register_id])->one();
                 @ $ttl = Testandlimit::find()->where(['register_id' => $datas->register_id])->one();
                ?>
                  <tr>
                    <th>1</th>
                    <th><?= $datas->name ?></th>
                    <th class="text-center"><?= $datas->age ?></th>
                    <th class="text-center"><?= DateThai($datas->datetest) ?></th>
                    <th class="text-center"><?= $ad8->score ?></th>
                    <th class="text-center"><?= $ttl->score ?></th>
                    <th class="text-center"><?= $toolx->regsiter_score ?></th>
                    <th class="text-center"><?= $toolx->orientation_score ?></th>
                    <th class="text-center"><?= $toolx->fruitfluency_score ?></th>
                    <th class="text-center"><?= $toolx->wordregsiter_score ?></th>
                    <th class="text-center"> <?= $ad8->score+$ttl->score+$toolx->regsiter_score+$toolx->orientation_score+$toolx->fruitfluency_score+$toolx->wordregsiter_score ?></th>
                    <th class="text-center">
                    <?= Html::a('ToolX Results', ['fullpaper', 'register_id' => $datas->register_id], ['class' => 'btn btn-primary btn-sm']) ?>
                  </tr>
                <?php } ?>
              </table>

            </div>
          </div>                 
      
                        
          <h5 class="mt-5 text-muted">อัพโหลดไฟล์ที่เกี่ยวข้องกับผู้ทดสอบ</h5>
          <!--  <ul class="list-unstyled">
               <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Functional-requirements.docx</a>
                </li>
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-pdf"></i> UAT.pdf</a>
                </li>
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-envelope"></i> Email-from-flatbal.mln</a>
                </li>
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-image "></i> Logo.png</a>
                </li>
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Contract-10_12_2014.docx</a>
                </li>
              </ul>
              <div class="text-center mt-5 mb-3">
                <a href="#" class="btn btn-sm btn-primary">Add files</a>
                <a href="#" class="btn btn-sm btn-warning">Report contact</a>
              </div>-->
        </div>

      </div>
    </div>
    <!-- /.card-body -->
  </div>



</div>