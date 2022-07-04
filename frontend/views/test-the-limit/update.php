<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Testandlimit */

$this->title = 'Update Testandlimit: ' . $model->testandlimit_id;
$this->params['breadcrumbs'][] = ['label' => 'Testandlimits', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->testandlimit_id, 'url' => ['view', 'testandlimit_id' => $model->testandlimit_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="testandlimit-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
