<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\register */

$this->title = 'ลงทะเบียน';
$this->params['breadcrumbs'][] = ['label' => 'Registers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

    <h1 class="display-5 font-inter-bold pr-4" style="color:#2969E5">ลงทะเบียน</h1>
    <p class="px-4"><b>กรุณากรอกข้อมูลของผู้สูงอายุที่ทำแบบทดสอบต่อไปนี้</b></p>
    <div class="px-4">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
    </div>

    <script type="text/javascript">
        function noBack()
         {
             window.history.forward()
         }
        noBack();
        window.onload = noBack;
        window.onpageshow = function(evt) { if (evt.persisted) noBack() }
        window.onunload = function() { void (0) }
    </script>
