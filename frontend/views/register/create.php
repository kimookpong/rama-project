<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\register */

$this->title = 'Create Register';
$this->params['breadcrumbs'][] = ['label' => 'Registers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="register-create">

    <h1>ลงทะเบียน</h1>
    <p>กรุณากรอกข้อมูลของผู้สูงอายุที่ทำแบบทดสอบต่อไปนี้</p>
   
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
