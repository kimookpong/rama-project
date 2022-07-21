<?php

use yii\helpers\Html;
use common\models\Register;
/* @var $this yii\web\View */
/* @var $model common\models\toolx */

$this->title = 'Update Toolx: ' . $model->toolx_id;
$this->params['breadcrumbs'][] = ['label' => 'Toolxes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->toolx_id, 'url' => ['view', 'toolx_id' => $model->toolx_id]];
$this->params['breadcrumbs'][] = 'Update';
$modelreg = register::find()->where(['register_id' => $model->register_id])->one();
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
                  Shadowing-B: Test the Limit
                </h1>
              </div>
               <div class="card-body">
               <div class="row">
                <div class="col-md-4">    ชื่อ:<mark><?=$modelreg->name?></mark></div>
                <div class="col-md-4">    นามสกุล:<mark><?=$modelreg->surname?></mark></div>
                <div class="col-md-4">    รหัส:<mark><?=$modelreg->disease?></mark></div>
                </div>
<div class="row"><div class="col-md-8">ผู้บันทึกข้อมูล <mark><?=Yii::$app->user->identity->fullname?></mark></div><div class="col-md-4">วันที่ทดสอบ <mark><?=DateThai($modelreg->datetest)?></mark></div> </div>

<hr>
    <?= $this->render('_form_shodowingb', [
        'model' => $model,
    ]) ?>

</div>
