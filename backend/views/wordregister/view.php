<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\wordregister */

$this->title = $model->wordreg_id;
$this->params['breadcrumbs'][] = ['label' => 'Wordregisters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="wordregister-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'wordreg_id' => $model->wordreg_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'wordreg_id' => $model->wordreg_id], [
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
            'wordreg_id',
            'word',
            'verbtype',
            'voicepart',
        ],
    ]) ?>

</div>
