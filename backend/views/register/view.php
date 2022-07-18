<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model common\models\register */
function DateThai($strDate)
{
  $strYear = date("Y",strtotime($strDate))+543;
  $strMonth= date("n",strtotime($strDate));
  $strDay= date("j",strtotime($strDate));
  $strHour= date("H",strtotime($strDate));
  $strMinute= date("i",strtotime($strDate));
  $strSeconds= date("s",strtotime($strDate));
  $strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
  $strMonthThai=$strMonthCut[$strMonth];
  return "$strDay $strMonthThai $strYear";
}
$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Registers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
if(isset($_REQUEST['del'])){
$model->flagdel = 1;
$model->save(false);
Yii::$app->response->redirect(Url::to(['index'], true));

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
    <td width="15%"><div align="right">ชื่อ:</div></td>
    <td width="15%"><mark><?=$model->name?></mark></td>
    <td width="15%"><div align="right">นามสกุล:</div></td>
    <td width="15%"><mark><?=$model->surname?></mark></td>
    <td width="15%"><div align="right">โทรศัพท์:</div></td>
    <td width="15%"><mark><?=$model->tel?></mark></td>
  </tr>
  <tr>
    <td><div align="right">จังหวัด:</div></td>
    <td width="15%"><mark><?=$model->provinces?></mark></td>
    <td><div align="right">เพศ:</div></td>
    <td width="15%"><mark><?=$model->sex?></mark></td>
    <td><div align="right">อายุ:</div></td>
    <td width="15%"><mark><?=$model->age?></mark></td>
  </tr>
  <tr>
    <td><div align="right">ชื่อแพทย์:</div></td>
    <td width="15%"><mark><?=$model->Doctor?></mark></td>
    <td><div align="right">รหัส:</div></td>
    <td width="15%"><mark><?=$model->disease?></mark></td>
    <td><div align="right">อีเมล:</div></td>
    <td width="15%"><mark><?=$model->email?></mark></td>
  </tr>
</table>
              </div>
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
                      <tr>
                        <th>1</th>
                        <th><?=$model->name?></th>
                        <th class="text-center"><?=$model->age?></th>
                        <th class="text-center"><?=DateThai($model->datetest)?></th>
                        <th class="text-center"><?=$model->ad8?></th>
                        <th class="text-center"><?=$model->llt?></th>
                        <th class="text-center"><?=$model->toolx?> <a class="btn btn-sm btn-info" href="index.php?r=toolx/entering&&toolx_id=10">Data Entering</a> </th>
                        <th class="text-center"><?=$model->complete?></th>
                        <th class="text-center">
                        <?php if($model->complete=='ทดสอบไม่ครบ'){?>
                          <a class="btn btn-sm btn-danger" href="index.php?r=register/view&register_id=<?=$model->register_id?>&del=1">ลบ</a>
                          <?php } else { ?>
                          <a class="btn btn-sm btn-primary" href="index.php?r=register/fullpaper&register_id=<?=$model->register_id?>">ToolX Results</a></th>
                        <?php }?>

                      </tr>

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
