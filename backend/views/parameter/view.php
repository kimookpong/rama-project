<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Parameter */

$this->title = $model->param_id;
$this->params['breadcrumbs'][] = ['label' => 'Parameters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="parameter-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'param_id' => $model->param_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'param_id' => $model->param_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'param_id',
            'x',
            'y',
            'z',
            'test_the_limit',
            'toolx_3word',
            'toolx_fruit',
            'toolx_recall',
            'toolx_fruit_delay',
        ],
    ]) ?>

</div>
