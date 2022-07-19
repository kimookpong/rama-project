<?php

use yii\helpers\Html;
use common\models\register;
/* @var $this yii\web\View */
/* @var $model common\models\toolx */

$this->title = 'Update Toolx: ' . $model->toolx_id;
$this->params['breadcrumbs'][] = ['label' => 'Toolxes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->toolx_id, 'url' => ['view', 'toolx_id' => $model->toolx_id]];
$this->params['breadcrumbs'][] = 'Update';
$modelreg = register::find()->where(['register_id' => $model->register_id])->one();
?>
<div class="col-md-12">
            <div class="card card-default">
              <div class="card-header">
                <h1>
                  <i class="fas fa-bullhorn"></i>
                  Shodowing-A: Data Entering
                </h1>
              </div>
               <div class="card-body">
               <div class="row">
                <div class="col-md-4">    ชื่อ:<mark><?=$modelreg->name?></mark></div>
                <div class="col-md-4">    นามสกุล:<mark><?=$modelreg->surname?></mark></div>
                <div class="col-md-4">    รหัส:<mark><?=$modelreg->disease?></mark></div>
                </div>
<div class="row"><div class="col-md-6">ผู้บันทึกข้อมูล <mark><?=Yii::$app->user->identity->fullname?></mark></div><div class="col-md-6">วันที่ทดสอบ </div> </div>

<hr>
    <?= $this->render('_form_entering', [
        'model' => $model,
    ]) ?>

</div>
