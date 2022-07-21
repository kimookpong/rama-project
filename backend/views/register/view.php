<?php

use common\models\Register;
use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;
use common\models\Ad8;
use common\models\Files;
use common\models\Testandlimit;
use common\models\Toolx;
use common\models\Fruit;
use yii\bootstrap4\ActiveForm;

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
  Yii::$app->response->redirect(Url::to(['register/view', 'case_id' => $_REQUEST['case_id']], true));
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

            <?php $modeldetail = Register::find()->where(['case_id' => $model->caseid])->one(); ?>
            <table width="100%" class='table'>
              <tr>
                <td width="15%">
                  <div align="right">ชื่อ:</div>
                </td>
                <td width="15%"><mark><?= $modeldetail->name ?></mark></td>
                <td width="15%">
                  <div align="right">นามสกุล:</div>
                </td>
                <td width="15%"><mark><?= $modeldetail->surname ?></mark></td>
                <td width="15%">
                  <div align="right">โทรศัพท์:</div>
                </td>
                <td width="15%"><mark><?= $modeldetail->tel ?></mark></td>
              </tr>
              <tr>
                <td>
                  <div align="right">จังหวัด:</div>
                </td>
                <td width="15%"><mark><?= $modeldetail->provinces ?></mark></td>
                <td>
                  <div align="right">เพศ:</div>
                </td>
                <td width="15%"><mark><?= $modeldetail->sex ?></mark></td>
                <td>
                  <div align="right">อายุ:</div>
                </td>
                <td width="15%"><mark><?= $modeldetail->age ?></mark></td>
              </tr>
              <tr>
                <td>
                  <div align="right">ชื่อแพทย์:</div>
                </td>
                <td width="15%"><mark><?= $modeldetail->Doctor ?></mark></td>
                <td>
                  <div align="right">รหัส:</div>
                </td>
                <td width="15%"><mark><?= $modeldetail->disease ?></mark></td>
                <td>
                  <div align="right">อีเมล:</div>
                </td>
                <td width="15%"><mark><?= $modeldetail->email ?></mark></td>
              </tr>
            </table>


          </div>

          <?php if (Yii::$app->user->identity->role == 1 || Yii::$app->user->identity->role == 10) { ?>
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
                  $modelReg = Register::find()->where(['case_id' => $model->caseid])->orderBy(['create_at' => SORT_DESC])->all();
                  foreach ($modelReg as $index => $datas) {
                  ?>
                    <tr>
                      <th><?= $index + 1 ?></th>
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
          <?php } ?>
          <?php if (Yii::$app->user->identity->role == 4 || Yii::$app->user->identity->role == 10) { ?>
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
                  $modelReg = Register::find()->where(['case_id' => $model->caseid])->orderBy(['create_at' => SORT_DESC])->all();
                  $count = 0;
                  foreach ($modelReg as $index => $datas) {
                    @$ad8 = Ad8::find()->where(['register_id' => $datas->register_id])->one();
                    @$toolx = Toolx::find()->where(['register_id' => $datas->register_id])->one();
                    @$ttl = Testandlimit::find()->where(['register_id' => $datas->register_id])->one();
                    if ($ad8 && $toolx && $ttl) {
                      $count =  $count + 1;
                  ?>
                      <tr>
                        <th><?= $count ?></th>
                        <th><?= $datas->name ?></th>
                        <th class="text-center"><?= $datas->age ?></th>
                        <th class="text-center"><?= DateThai($datas->datetest) ?></th>
                        <th class="text-center"><?= $ad8->score ?></th>
                        <th class="text-center"><?= $ttl->score ?></th>
                        <th class="text-center"><?= $toolx->regsiter_score ?></th>
                        <th class="text-center"><?= $toolx->orientation_score ?></th>
                        <th class="text-center"><?= $toolx->fruitfluency_score ?></th>
                        <th class="text-center"><?= $toolx->wordregsiter_score ?></th>
                        <th class="text-center"> <?= $ad8->score + $ttl->score + $toolx->regsiter_score + $toolx->orientation_score + $toolx->fruitfluency_score + $toolx->wordregsiter_score ?></th>
                        <th class="text-center">
                          <?= Html::a('ToolX Results', ['fullpaper', 'register_id' => $datas->register_id], ['class' => 'btn btn-primary btn-sm']) ?>
                      </tr>
                  <?php }
                  } ?>
                </table>
              <?php } ?>

              </div>
            </div>


            <h5 class="mt-2 text-muted">อัพโหลดไฟล์ที่เกี่ยวข้องกับผู้ทดสอบ</h5>
            <ul class="list-unstyled">
              <?php
              $modelAttach = Files::find()->where(['case_id' => $model->caseid])->all();
              foreach ($modelAttach as $file) {
              ?>
                <li>
                  <a target="blank" href="<?= Yii::getAlias('@web') . '/' . $file->files_part ?>" class="btn-link text-secondary"><i class="<?= $file->formatIcon ?>"></i> <?= $file->files_name ?>.<?= $file->formatFile ?></a>
                </li>
              <?php
              }
              ?>
            </ul>
        </div>

      </div>
      <?php if (Yii::$app->user->identity->role == 1 || Yii::$app->user->identity->role == 10) { ?>
        <div class="mt-2 row">
          <div class="col-4">
            <?= Html::a('Cancel', ['index'], ['class' => 'btn btn-block btn-secondary']) ?>
          </div>
          <div class="col-4">
            <?= Html::Button('Upload', ['class' => 'btn btn-block btn-secondary', 'data-toggle' => 'modal', 'data-target' => '#newUpload']) ?>
            <div class="modal fade" id="newUpload" tabindex="-1" role="dialog" aria-labelledby="newUploadLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="p-4">
                    <h4 class="alert-heading">อัพโหลดไฟล์</h4>
                    <hr>
                    <?php $form = ActiveForm::begin(); ?>
                    <div class="row">
                      <div class="col-12">
                        <?= $form->field($modelFile, 'files_name')->textInput(['maxlength' => true]) ?>
                      </div>
                      <div class="col-12">
                        <?= $form->field($modelFile, 'files_part')->fileInput() ?>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 text-right">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-upload"></i> Upload</button>
                      </div>
                    </div>
                    <?php ActiveForm::end(); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-4">
            <?= Html::Button('Add record', ['class' => 'btn btn-block btn-secondary', 'data-toggle' => 'modal', 'data-target' => '#newRecord']) ?>
            <div class="modal fade" id="newRecord" tabindex="-1" role="dialog" aria-labelledby="newRecordLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="p-4">
                    <h4 class="alert-heading">สร้างแบบทดสอบใหม่</h4>
                    <hr>
                    <p class="mb-0">หากต้องการสร้างแบบทดสอบใหม่ของวันนี้ ให้เลือกขั้นตอนใดขั้นตอนหนึ่งต่อไปนี้</p>
                    <p class="mb-0">(1) กดปุ่ม Get QR เพื่อสร้าง QR Code ให้ผู้ทดสอบสแกน</p>
                    <p class="mb-3">(2) กดปุ่ม AD8 เพื่อใช้อุปกรณ์นี้ดำเนินการทดสอบ AD8</p>
                    <div class="row">
                      <div class="col-6 text-center">
                        <a href="<?= Yii::$app->params['frontend'] ?>register/new-register?case_id=<?= $model->caseid ?>" class="btn btn-lg btn-secondary">AD8</a>
                      </div>
                      <div class="col-6 text-center">
                        <button type="button" class="btn btn-lg btn-secondary" onclick="$('#newQR').modal();$('#newRecord').modal('hide');">Get QR</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal fade bd-example-modal-sm" id="newQR" tabindex="-1" role="dialog" aria-labelledby="newQRLabel" aria-hidden="true">
              <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                  <div class="p-4">
                    <h4 class="alert-heading">ใช้ QR Code นี้สแกนเพื่อดำเนินการทดสอบต่อไป</h4>
                    <hr>
                    <p class="mb-3">
                      <img src="https://chart.googleapis.com/chart?cht=qr&chl=<?= Yii::$app->params['frontend'] ?>register/new-register?case_id=<?= $model->caseid ?>&chs=300x300&chld=L|0" class="qr-code img-thumbnail img-responsive" />
                    </p>
                    <div class="row">
                      <div class="col-6 text-center">
                      </div>
                      <div class="col-6 text-right">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
    <!-- /.card-body -->
  </div>



</div>