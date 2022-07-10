<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Ad8 */

$this->title = 'แบบทดสอบ AD8';
$this->params['breadcrumbs'][] = ['label' => 'Ad 8s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ad8-create">
    <h1 class="display-5 font-inter-bold pl-4" style="color:#D3B200">AD8</h1>
    <p class=" pl-4 title3"><b>AD8 เครื่องมือนี้สร้างจากแบบคัดกรองมาตรฐานที่ใช้คัดกรองผู้น่าจะมีภาวะสมองเสื่อม ให้รีบพบผู้เชี่ยวชาญ ประกอบด้วยคำถาม 8 ข้อ และต้องตอบคำถามทุกข้อตามลำดับ</b></p>
    <p class=" pl-4 title3"><b>ผู้สูงอายุสามารถทำแบบทดสอบขั้นตอนนี้ด้วยตนเองหรือมีผู้ดูแลช่วยทำแบบทดสอบ</b></p>
    <hr>
    <div class="pl-4 ">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
</div>