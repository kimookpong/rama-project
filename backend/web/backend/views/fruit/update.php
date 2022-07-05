<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\fruit */

$this->title = 'Update Fruit: ' . $model->fruit_id;
$this->params['breadcrumbs'][] = ['label' => 'Fruits', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->fruit_id, 'url' => ['view', 'fruit_id' => $model->fruit_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fruit-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
