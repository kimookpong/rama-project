<?php

use common\models\Ad8;
use common\models\Testandlimit;
use common\models\Toolx;
use common\models\Fruit;
use common\models\User;

$this->title = 'Registers';
$this->params['breadcrumbs'][] = $this->title;
function Ad8code($val)
{
  $text = ['', 'ใช่', 'ไม่ทราบ', 'ไม่ใช่'];
  return $text[$val];
}

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
  return "$strDay $strMonthThai $strYear ";
}
?>
<div class="col-md-12">
  <div class="card card-default">
    <div class="card-header">
      <h1>
        <i class="fas fa-bullhorn"></i>
        Registration Result Comparison
      </h1>
    </div>
    <div class="card-body">
      <div class="callout callout-info " style="border-left-color:#0000FF">
        <div class="row">
          <table width="100%">
            <tr>
              <td width="33%"> &nbsp&nbspชื่อ-สกุล: <mark> <?= $model->name ?> <?= $model->surname ?></mark> </td>
              <td width="33%"> &nbsp&nbspจังหวัด: <mark> <?= $model->provinces ?> </mark>  </td>
              <td width="33%"> &nbsp&nbspวันที่ทดสอบ: <mark> <?= DateThai($model->datetest) ?> </mark>  </td>

            </tr>
        </table>
        </div>
        <?php $ttl = Testandlimit::find()->where(['register_id' => $model->register_id])->one(); ?>
        <?php $toolx = Toolx::find()->where(['register_id' => $model->register_id])->one(); ?>

        <div class="row">
        <div class="col-md-6">
          คุณภาพเสียง B : 
          <input type="checkbox" id="toolx-user_a_voice_quality1" name="voicequality1" value="1" <?=$ttl->voicequality1=='1'?'checked':''?>> ดี
          <input type="checkbox" id="toolx-user_a_voice_quality1" name="voicequality1" value="1" <?=$ttl->voicequality2=='1'?'checked':''?>> เสียงเบา
          <input type="checkbox" id="toolx-user_a_voice_quality1" name="voicequality1" value="1"<?=$ttl->voicequality3=='1'?'checked':''?>> มีเสียงรบกวน
        </div>
        <div class="col-md-3">
          ผู้ตรวจเสียง A: <?=@User::find()->where(['id' => $toolx->user_id])->one()->fullname;?>
        </div>
        <div class="col-md-3">
        ผู้ตรวจเสียง B: <?=@User::find()->where(['id' => $toolx->user_id_b])->one()->fullname;?> 
        </div>
    </div></div></div>

     
        <div class="row p-3">
          <div class="col-12">
            <h2>เปรียบเทียบผล ToolX:Registeration(จำคำ 3 คำ)</h2>
          </div>
        
        <p></p>
        <div class="col-6">
        <table width="100%" border="0" class="table table-bordered text-center">
          <tr>
          <td width="10%"></td>
            <td width="10%"></td>
            <td width="30%">ตรวจเสียง A</td>
            <td width="30%">ACTUAL</td>
          </tr>
          <tr>
            <td width="15%"><i class="fas <?=$toolx->regsiter1==$toolx->user_a_record_regsiter_1?'fa-check text-success':'fa-times text-danger'?>"></i> </td>
            <td width="25%">คำที่ 1</td>
            <td width="11%"><mark> <?= $toolx->user_a_record_regsiter_1; ?></mark></td>
            <td width="14%"><mark> <?= $toolx->regsiter1; ?></mark></td>

          <tr>
            <td> <i class="fas <?=$toolx->regsiter2==$toolx->user_a_record_regsiter_2?'fa-check text-success':'fa-times text-danger'?>"></i></td>
            <td width="25%">คำที่ 2</td>
            <td width="11%"><mark> <?= $toolx->user_a_record_regsiter_2; ?></mark></td>
            <td width="14%"><mark> <?= $toolx->regsiter2; ?></mark></td>

          </tr>
          <tr>
            <td><i class="fas <?=$toolx->regsiter2==$toolx->user_a_record_regsiter_2?'fa-check text-success':'fa-times text-danger'?>"></i> </td>
            <td width="25%">คำที่ 3</td>
            <td width="11%"><mark> <?= $toolx->user_a_record_regsiter_3; ?></mark></td>
            <td width="14%"><mark> <?= $toolx->regsiter3; ?></mark></td>
          </tr>
              <?php $ta =0;
              if($toolx->regsiter1==$toolx->user_a_record_regsiter_1){$ta=$ta+1;}
              if($toolx->regsiter2==$toolx->user_a_record_regsiter_2){$ta=$ta+1;}
              if($toolx->regsiter3==$toolx->user_a_record_regsiter_3){$ta=$ta+1;}
              ?>
          <tr>
            <td></td>
            <td width="25%">Accuracy(%)</td>
            <td width="14%"><?=number_format($ta/3*100,2)?></td>
            <td width="11%"></td>
          </tr>
        </table>
       


       

      </div>
      <div class="col-6">
        <table width="100%" border="0" class="table table-bordered text-center">
          <tr>
            <td width="10%"></td>
            <td width="30%">ตรวจเสียง B</td>
            <td width="30%">Speech-to-Text</td>
            <td width="10%"></td>

          </tr>
          <tr>
            <td width="25%">คำที่ 1</td>
            <td width="14%"><mark> <?= $toolx->user_b_record_regsiter_1; ?></mark></td>
            <td width="11%" rowspan="3"><?= $toolx->regsiterwordseg;$regsiterwordseg = explode(",", $toolx->regsiterwordseg);
 ?></td>
            <td width="15%"><i class="fas <?=in_array($toolx->user_b_record_regsiter_1,$regsiterwordseg)?'fa-check text-success':'fa-times text-danger'?>"></i> </td>

          <tr>
            <td width="25%">คำที่ 2</td>
            <td width="14%"><mark> <?= $toolx->user_b_record_regsiter_2; ?></mark></td>
            <td width="15%"><i class="fas <?=in_array($toolx->user_b_record_regsiter_2,$regsiterwordseg)?'fa-check text-success':'fa-times text-danger'?>"></i> </td>


          </tr>
          <tr>
            <td width="25%">คำที่ 3</td>
            <td width="14%"><mark> <?= $toolx->user_b_record_regsiter_3; ?></mark></td>
            <td><i class="fas <?=in_array($toolx->user_b_record_regsiter_3,$regsiterwordseg)?'fa-check text-success':'fa-times text-danger'?>"></i> </td>

          </tr>
              <?php $ta =0;
              if($toolx->regsiter1==$toolx->user_a_record_regsiter_1){$ta=$ta+1;}
              if($toolx->regsiter2==$toolx->user_a_record_regsiter_2){$ta=$ta+1;}
              if($toolx->regsiter3==$toolx->user_a_record_regsiter_3){$ta=$ta+1;}
              ?>
               <?php $tb =0;
              if(in_array($toolx->user_b_record_regsiter_1,$regsiterwordseg)){$tb=$tb+1;}
              if(in_array($toolx->user_b_record_regsiter_2,$regsiterwordseg)){$tb=$tb+1;}
              if(in_array($toolx->user_b_record_regsiter_3,$regsiterwordseg)){$tb=$tb+1;}
              ?>
          <tr>
            <td></td>
            <td width="25%">Accuracy(%)</td>
            <td width="14%"><?=number_format($tb/3*100,2)?></td>
            <td width="11%"></td>
          </tr>
        </table>
       


       

      </div> </div>

      <div class="mt-2 row p-4">
          <div class="col-4">
            <a class="btn btn-block btn-secondary" href="/backend/web/index.php?r=register/fullpaper&register_id=<?=$_GET['register_id']?>">Back</a>          </div>
            <div class="col-4"></div>
            <div class="col-4">
            <a class="btn btn-block btn-secondary" href="/backend/web/index.php?r=register%2Findex">Search</a>          </div>
          </div>
       </div>   

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>