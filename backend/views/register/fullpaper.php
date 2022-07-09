<?php

use common\models\Ad8;
use common\models\Testandlimit;
$this->title = 'Registers';
$this->params['breadcrumbs'][] = $this->title;
function Ad8code($val)
{
  $text = ['','ใช่','ไม่ทราบ','ไม่ใช่'];
  return $text[$val];
}
?>
<div class="col-md-12">
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-bullhorn"></i>
                  ToolX Results
                </h3>
              </div>
              <!-- /.card-header -->
              <?php $ad8 = Ad8::find()->where(['register_id' => $model->register_id])->one();?>
              <div class="card-body">
                <div class="callout callout-primary ">
                <div class="row"> 
                 <div class="col-4"><h2>แบบคัดกรอง AD8</h2></div>
                 <div class="col-4">ผลการทำแบบคัดกรอง <?=$ad8->results?></div>
                 <div class="col-4">ตอบแบบคัดกรอง <mark><?=$ad8->respondents?></mark></input></div>
                 <table width="100%" class="table">
  <tr>
    <td width="15%">ข้อที่ 1 การตัดสินใจ</td>
    <td width="5%"><mark> <?=Ad8code($ad8->question1);?> </mark></td>
    <td width="15%">ข้อที่ 2 งานอดิเรก</td>
    <td width="5%"><mark> <?=Ad8code($ad8->question2);?> </mark></td>
    <td width="15%">ข้อที่ 3 พูดซ้ำบ่อย</td>
    <td width="5%"><mark> <?=Ad8code($ad8->question3);?> </mark></td>
    <td width="15%">ข้อที่ 4 เรียนรู้สิ่งใหม่</td>
    <td width="5%"><mark> <?=Ad8code($ad8->question4);?> </mark></td>
  </tr>
  <tr>
    <td>ข้อที่ 5 จำเดือน/ปี</td>
    <td width="5%"><mark> <?=Ad8code($ad8->question5);?> </mark></td>
    <td>ข้อที่ 6 จัดการเงิน</td>
    <td width="5%"><mark> <?=Ad8code($ad8->question6);?> </mark></td>
    <td>ข้อที่ 7 จำนัดหมาย</td>
    <td width="5%"><mark> <?=Ad8code($ad8->question7);?> </mark></td>
    <td>ข้อที่ 8 ความจำ</td>
    <td width="5%"><mark> <?=Ad8code($ad8->question8);?> </mark></td>
  </tr>
</table>


               
               
                </div>
                 


                </div>
                <?php $ttl = Testandlimit::find()->where(['register_id' => $model->register_id])->one();?>

                <div class="callout callout-info">
                <div class="row"> 
                 <div class="col-3"><h2>Test the Limit</h2></div>
                 <div class="col-9">ปฏิบัติถูกต้อง: <mark><?=$ttl->score?></mark> ข้อ</div>
                </div>
                <table width="100%" border="0" class="table">
                <tr>
    <td width="15%"></td>
    <td width="14%">ข้อที่ 1</td>
    <td width="18%">ข้อที่ 2</td>
    <td width="15%">ข้อที่ 3</td>
  </tr>
  <tr>
    <td width="15%">การปฏิบัติ</td>
    <td width="14%"><mark> <?=$ttl->qustion1!=''?'ผ่าน':'ไม่ผ่าน'?></mark></td>
    <td width="11%"><mark> <?=$ttl->qustion2!=''?'ผ่าน':'ไม่ผ่าน'?></mark></td>
    <td width="10%"><mark> <?=$ttl->qustion3!=''?'ผ่าน':'ไม่ผ่าน'?></mark> </td>
  </tr>
  <tr>
    <td>Transcribe</td>
    <td><?=$ttl->qustion1?></td>
    <td><?=$ttl->qustion2?></td>
    <td><?=$ttl->qustion3?></td>
  </tr>
  <tr>
    <td>ตรวจคำตอบ</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>ไฟล์เสียง</td>
    <td><audio controls>
        <source src="<?=Yii::$app->params['frontend']?>/records/<?=$ttl->voicepath1?>" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
  </td>
    <td><audio controls>
        <source src="<?=Yii::$app->params['frontend']?>/records/<?=$ttl->voicepath2?>" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
  </td>

    <td><audio controls>
        <source src="<?=Yii::$app->params['frontend']?>/records/<?=$ttl->voicepath3?>" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
  </td>

  </tr>
</table>


                </div>
                <div class="callout callout-warning">
                  <h5>I am a warning callout!</h5>

                  <p>This is a yellow callout.</p>
                </div>
                <div class="callout callout-success">
                  <h5>I am a success callout!</h5>

                  <p>This is a green callout.</p>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>