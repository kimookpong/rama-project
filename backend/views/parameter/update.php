<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Parameter */

$this->title = 'ตั้งค่าระบบ';
$this->params['breadcrumbs'][] = ['label' => 'Parameters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->param_id, 'url' => ['view', 'param_id' => $model->param_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="card">
    <div class="card-header">
        <h2><?= $this->title ?></h2>
    </div>
    <div class="card-body">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>