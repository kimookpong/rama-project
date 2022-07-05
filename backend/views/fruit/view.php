<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\fruit */

$this->title = $model->fruit_id;
$this->params['breadcrumbs'][] = ['label' => 'Fruits', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="fruit-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'fruit_id' => $model->fruit_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'fruit_id' => $model->fruit_id], [
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
            'fruit_id',
            'fruit',
            'keyword:ntext',
        ],
    ]) ?>

</div>
