<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\register */

$this->title = 'Update Register: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Registers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'register_id' => $model->register_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="register-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
