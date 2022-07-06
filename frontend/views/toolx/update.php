<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Toolx */

$this->title = 'Update Toolx: ' . $model->toolx_id;
$this->params['breadcrumbs'][] = ['label' => 'Toolxes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->toolx_id, 'url' => ['view', 'toolx_id' => $model->toolx_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="toolx-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
