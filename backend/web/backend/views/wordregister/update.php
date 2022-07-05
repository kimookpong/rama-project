<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\wordregister */

$this->title = 'Update Wordregister: ' . $model->wordreg_id;
$this->params['breadcrumbs'][] = ['label' => 'Wordregisters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->wordreg_id, 'url' => ['view', 'wordreg_id' => $model->wordreg_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="wordregister-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
