<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Testandlimit */

$this->title = $model->testandlimit_id;
$this->params['breadcrumbs'][] = ['label' => 'Testandlimits', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="testandlimit-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'testandlimit_id' => $model->testandlimit_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'testandlimit_id' => $model->testandlimit_id], [
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
            'testandlimit_id',
            'register_id',
            'qustion1',
            'qustion2',
            'qustion3',
            'voicepath1',
            'voicepath2',
            'voicepath3',
            'score',
            'user_id',
            'userrecord_qustion1',
            'userrecord_qustion2',
            'userrecord_qustion3',
            'voicequality1',
            'voicequality2',
            'voicequality3',
            'create_at',
            'update_at',
            'flagdel',
            'success',
        ],
    ]) ?>

</div>
