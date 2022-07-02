<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Ad8 */

$this->title = 'Update Ad 8: ' . $model->ad8_id;
$this->params['breadcrumbs'][] = ['label' => 'Ad 8s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ad8_id, 'url' => ['view', 'ad8_id' => $model->ad8_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ad8-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
