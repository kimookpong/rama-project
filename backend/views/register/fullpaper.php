<?php

use common\models\Ad8;
use common\models\Testandlimit;
use common\models\Toolx;
use common\models\Fruit;

$this->title = 'Registers';
$this->params['breadcrumbs'][] = $this->title;
function Ad8code($val)
{
  $text = ['', 'ใช่', 'ไม่ทราบ', 'ไม่ใช่'];
  return $text[$val];
}
$wordfruit = 'คำว่า';
$Fruitword = Fruit::find()->All();
foreach ($Fruitword as $data) {
  $wordfruit .=  ',';
  $wordfruit .=  $data->keyword;
}
$arrayfruit = explode(",", $wordfruit);
?>
<div class="col-md-12">
  <div class="card card-default">
    <div class="card-header">
      <h1>
        <i class="fas fa-bullhorn"></i>
        ToolX Results (แบบคัดกรองสมองด้านการรู้คิด)
      </h1>
    </div>
    <div class="card-body">
      <div class="callout callout-info " style="border-left-color:#0000FF">
        <div class="row">
          <div class="col-12 table-responsive">
            <h2>Register (แบบลงทะเบียน)</h2>
          </div>
          <table width="100%" class='table'>
            <tr>
              <td width="15%">
                <div align="right">ชื่อ:</div>
              </td>
              <td width="15%"><mark><?= $model->name ?></mark></td>
              <td width="15%">
                <div align="right">นามสกุล:</div>
              </td>
              <td width="15%"><mark><?= $model->surname ?></mark></td>
              <td width="15%">
                <div align="right">โทรศัพท์:</div>
              </td>
              <td width="15%"><mark><?= $model->tel ?></mark></td>
            </tr>
            <tr>
              <td>
                <div align="right">จังหวัด:</div>
              </td>
              <td width="15%"><mark><?= $model->provinces ?></mark></td>
              <td>
                <div align="right">เพศ:</div>
              </td>
              <td width="15%"><mark><?= $model->sex ?></mark></td>
              <td>
                <div align="right">อายุ:</div>
              </td>
              <td width="15%"><mark><?= $model->age ?></mark></td>
            </tr>
            <tr>
              <td>
                <div align="right">ชื่อแพทย์:</div>
              </td>
              <td width="15%"><mark><?= $model->Doctor ?></mark></td>
              <td>
                <div align="right">รหัส:</div>
              </td>
              <td width="15%"><mark><?= $model->disease ?></mark></td>
              <td>
                <div align="right">อีเมล:</div>
              </td>
              <td width="15%"><mark><?= $model->email ?></mark></td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <!-- /.card-header -->
    <?php $ad8 = Ad8::find()->where(['register_id' => $model->register_id])->one(); ?>
    <div class="card-body">
      <div class="callout callout-primary ">
        <div class="row">
          <div class="col-4">
            <h2>แบบคัดกรอง AD8</h2>
          </div>
          <div class="col-4">ผลการทำแบบคัดกรอง <?= $ad8->results ?></div>
          <div class="col-4">ตอบแบบคัดกรอง <mark><?= $ad8->respondents ?></mark></input></div>
          <div class="table-responsive">
            <table width="100%" class="table">
              <tr>
                <td width="15%">ข้อที่ 1 การตัดสินใจ</td>
                <td width="5%"><mark> <?= Ad8code($ad8->question1); ?> </mark></td>
                <td width="15%">ข้อที่ 2 งานอดิเรก</td>
                <td width="5%"><mark> <?= Ad8code($ad8->question2); ?> </mark></td>
                <td width="15%">ข้อที่ 3 พูดซ้ำบ่อย</td>
                <td width="5%"><mark> <?= Ad8code($ad8->question3); ?> </mark></td>
                <td width="15%">ข้อที่ 4 เรียนรู้สิ่งใหม่</td>
                <td width="5%"><mark> <?= Ad8code($ad8->question4); ?> </mark></td>
              </tr>
              <tr>
                <td>ข้อที่ 5 จำเดือน/ปี</td>
                <td width="5%"><mark> <?= Ad8code($ad8->question5); ?> </mark></td>
                <td>ข้อที่ 6 จัดการเงิน</td>
                <td width="5%"><mark> <?= Ad8code($ad8->question6); ?> </mark></td>
                <td>ข้อที่ 7 จำนัดหมาย</td>
                <td width="5%"><mark> <?= Ad8code($ad8->question7); ?> </mark></td>
                <td>ข้อที่ 8 ความจำ</td>
                <td width="5%"><mark> <?= Ad8code($ad8->question8); ?> </mark></td>
              </tr>
            </table>

          </div>


        </div>



      </div>
      <?php $ttl = Testandlimit::find()->where(['register_id' => $model->register_id])->one(); ?>

      <div class="callout callout-info">
        <div class="row">
          <div class="col-9">
            <h2>Test the Limit (เตรียมความพร้อม)</h2>
          </div>
          <div class="col-3">ปฏิบัติถูกต้อง: <mark><?= $ttl->score ?></mark> ข้อ</div>
          <div class="col-12">
            <div class="table-responsive">
              <table width="100%" border="0" class="table">
                <tr>
                  <td width="25%"></td>
                  <td width="25%">ข้อที่ 1</td>
                  <td width="25%">ข้อที่ 2</td>
                  <td width="25%">ข้อที่ 3</td>
                </tr>
                <tr>
                  <td width="15%">การปฏิบัติ</td>
                  <td width="14%"><mark> <?= $ttl->qustion1 != '' ? 'ผ่าน' : 'ไม่ผ่าน' ?></mark></td>
                  <td width="11%"><mark> <?= $ttl->qustion2 != '' ? 'ผ่าน' : 'ไม่ผ่าน' ?></mark></td>
                  <td width="10%"><mark> <?= $ttl->qustion3 != '' ? 'ผ่าน' : 'ไม่ผ่าน' ?></mark> </td>
                </tr>
                <tr>
                  <td>Transcribe</td>
                  <td><?= $ttl->qustion1 ?></td>
                  <td><?= $ttl->qustion2 ?></td>
                  <td><?= $ttl->qustion3 ?></td>
                </tr>
                <tr>
                  <td>ตรวจคำตอบ</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>ไฟล์เสียง</td>
                  <td><audio style="width: 100%;" controls>
                      <source src="<?= Yii::$app->params['frontend'] ?><?= $ttl->voicepath1 ?>" type="audio/mpeg">
                      Your browser does not support the audio element.
                    </audio>
                  </td>
                  <td><audio style="width: 100%;" controls>
                      <source src="<?= Yii::$app->params['frontend'] ?><?= $ttl->voicepath2 ?>" type="audio/mpeg">
                      Your browser does not support the audio element.
                    </audio>
                  </td>

                  <td><audio style="width: 100%;" controls>
                      <source src="<?= Yii::$app->params['frontend'] ?><?= $ttl->voicepath3 ?>" type="audio/mpeg">
                      Your browser does not support the audio element.
                    </audio>
                  </td>

                </tr>
              </table>
            </div>
          </div>
        </div>



      </div>
      <?php $toolx = Toolx::find()->where(['register_id' => $model->register_id])->one(); ?>

      <div class="callout callout-warning">
        <div class="row">
          <div class="col-6">
            <h2>ToolX (ทดสอบ)</h2>
          </div>
          <div class="col-6"></div>
        </div>
        <div class="row">
          <div class="col-6">
            <h2>1.Registeration(จำคำ 3 คำ)</h2>
          </div>
          <div class="col-6">จำคำได้: <mark><?= $toolx->regsiter_score ?></mark> ข้อ</div>
        </div>

        <p></p>
        <table width="100%" border="0" class="table">
          <tr>
            <td width="25%"></td>
            <td width="25%">คำที่ 1</td>
            <td width="25%">คำที่ 2</td>
            <td width="25%">คำที่ 3</td>
          </tr>
          <tr>
            <td width="15%">คำจากระบบ</td>
            <td width="14%"><mark> <?= $toolx->regsiter1; ?></mark></td>
            <td width="11%"><mark> <?= $toolx->regsiter2; ?></mark></td>
            <td width="10%"><mark> <?= $toolx->regsiter3; ?></mark> </td>
          </tr>
          <tr>
            <td>Transcribe</td>
            <td colspan="3"><?= $toolx->regsiterwordseg ?></td>
          </tr>
          <tr>
            <td>ตรวจคำตอบ</td>
            <td><?= (str_contains($toolx->regsiterwordseg, $toolx->regsiter1)) ? '<i class="fas fa-check-circle text-success"></i>' : '<i class="fas fa-times-circle text-danger"></i>' ?></td>
            <td><?= (str_contains($toolx->regsiterwordseg, $toolx->regsiter2)) ? '<i class="fas fa-check-circle text-success"></i>' : '<i class="fas fa-times-circle text-danger"></i>' ?></td>
            <td><?= (str_contains($toolx->regsiterwordseg, $toolx->regsiter3)) ? '<i class="fas fa-check-circle text-success"></i>' : '<i class="fas fa-times-circle text-danger"></i>' ?></td>
          </tr>
          <tr>
            <td>ไฟล์เสียง</td>
            <td colspan="3"><audio controls>
                <source src="<?= Yii::$app->params['frontend'] ?><?= $toolx->voiceregsiter ?>" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>
            </td>

          </tr>
        </table>
        <div class="row">
          <div class="col-6">
            <h2>2.Orientation(วันนี้วันอะไร)</h2>
          </div>
          <div class="col-6">ตอบคำถาม: <mark><?= $toolx->orientation_score == '1' ? 'ถูก' : 'ผิด' ?></mark></div>
        </div>
        <div class="row">
          <table width="100%" border="0" class="table">
            <tr>
              <td width="25%">วันที่ถูก</td>
              <td width="75%"><mark><?= $toolx->datenow ?></mark></td>
            </tr>
            <tr>
              <td>คำตอบที่ Transcribe</td>
              <td><mark> <?= $toolx->orientation; ?></mark></td>
            </tr>
            <tr>
              <td>ตรวจคำตอบ</td>
              <td><?= (stristr($toolx->orientation, $toolx->datenow)) ? '<i class="fas fa-check-circle text-success"></i>' : '<i class="fas fa-times-circle text-danger"></i>' ?></td>
            </tr>
            <tr>
              <td>ไฟล์เสียง</td>
              <td>
                <audio width="100%" controls>
                  <source src="<?= Yii::$app->params['frontend'] ?><?= $toolx->voiceorientationpath ?>" type="audio/mpeg">
                  Your browser does not support the audio element.
                </audio>
              </td>
            </tr>
          </table>
        </div>


        <div class="row">
          <div class="col-4">
            <h2>3. Fruit Fluency (พูดชื่อผลไม้)</h2>
          </div>
          <div class="col-4">ชื่อผลไม้ถูก (ใช้ผลจากระบบ): <mark><?= $toolx->fruitfluency_score ?></mark>ชื่อ</div>
          <div class="col-4">ชื่อผลไม้ถูก (ใช้ผลจากผู้ตรวจ):: <mark>0</mark>ชื่อ</div>
        </div>
        <div class="row">
          <table width="100%" border="0" class="table">
            <tr>
              <td width="25%">ชื่อผลไม้จากการ Transcibe</td>
              <td width="75%"><mark><?= $toolx->fruitfluency ?></mark></td>
            </tr>
            <tr>
              <td>ภายหลังการตัดคำ</td>
              <td>
                <?php $checkfruit = [];
                $fruitwordseg = explode(",", $toolx->fruitwordseg); ?>
                <?php foreach ($fruitwordseg as $value) {
                  if ($value != ' ') { ?>
                    <?php if (!in_array($value, $checkfruit)) { ?>
                      <span class="badge badge-pill badge-<?= in_array($value, $arrayfruit) ? 'success' : 'secondary' ?>"><?= $value ?></span>
                      <?php $checkfruit[] = $value; ?>
                    <?php } else { ?>
                      <span class="badge badge-pill badge-warning"><?= $value ?></span>
                    <?php } ?>
                <?php }
                } ?>
              </td>
            </tr>
            <tr>
              <td>ตรวจคำตอบ</td>
              <td></td>
            </tr>
            <tr>
              <td>ไฟล์เสียง</td>
              <td>
                <audio controls>
                  <source src="<?= Yii::$app->params['frontend'] ?><?= $toolx->voicefruitluency ?>" type="audio/mpeg">
                  Your browser does not support the audio element.
                </audio>
              </td>
            </tr>
          </table>
        </div>
        <div class="row">
          <div class="col-6">
            <h2>4. Recall (นึกคำ 3 คำ)</h2>
          </div>
          <div class="col-6">นึกคำได้: <mark><?= $toolx->wordregsiter_score ?></mark></div>
        </div>
        <p></p>
        <table width="100%" border="0" class="table">
          <tr>
            <td width="25%"></td>
            <td width="25%">คำที่ 1</td>
            <td width="25%">คำที่ 2</td>
            <td width="25%">คำที่ 3</td>
          </tr>
          <tr>
            <td width="15%">คำจากระบบ</td>
            <td width="14%"><mark> <?= $toolx->regsiter1; ?></mark></td>
            <td width="11%"><mark> <?= $toolx->regsiter2; ?></mark></td>
            <td width="10%"><mark> <?= $toolx->regsiter3; ?></mark> </td>
          </tr>
          <tr>
            <td>Transcribe</td>
            <td colspan="3"><?= $toolx->recallwordseg ?></td>
          </tr>
          <tr>
            <td>ตรวจคำตอบ</td>
            <td><?= (str_contains($toolx->recallwordseg, $toolx->regsiter1)) ? '<i class="fas fa-check-circle text-success"></i>' : '<i class="fas fa-times-circle text-danger"></i>' ?></td>
            <td><?= (str_contains($toolx->recallwordseg, $toolx->regsiter2)) ? '<i class="fas fa-check-circle text-success"></i>' : '<i class="fas fa-times-circle text-danger"></i>' ?></td>
            <td><?= (str_contains($toolx->recallwordseg, $toolx->regsiter3)) ? '<i class="fas fa-check-circle text-success"></i>' : '<i class="fas fa-times-circle text-danger"></i>' ?></td>
          </tr>
          <tr>
            <td>ไฟล์เสียง</td>
            <td colspan="3"><audio controls>
                <source src="<?= Yii::$app->params['frontend'] ?><?= $toolx->voicerecall ?>" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>
            </td>

          </tr>
        </table>
      </div>

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>