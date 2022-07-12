<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Parameter */

$this->title = 'Update Parameter: ' . $model->param_id;
$this->params['breadcrumbs'][] = ['label' => 'Parameters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->param_id, 'url' => ['view', 'param_id' => $model->param_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="card">
    <div class="card-header">
        <h2>Parameters</h2>
    </div>
    <div class="card-body">
        <div class="parameter-update">

            <h1><?= Html::encode($this->title) ?></h1>

            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>

        </div>
    </div>
</div>