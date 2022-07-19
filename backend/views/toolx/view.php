<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\toolx */

$this->title = $model->toolx_id;
$this->params['breadcrumbs'][] = ['label' => 'Toolxes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="toolx-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'toolx_id' => $model->toolx_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'toolx_id' => $model->toolx_id], [
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
            'toolx_id',
            'register_id',
            'regsiter1',
            'regsiter2',
            'regsiter3',
            'datenow',
            'caseregsiter',
            'regsiterwordseg',
            'orientation',
            'fruitfluency:ntext',
            'fruitwordseg:ntext',
            'recall',
            'recallwordseg',
            'voiceregsiter',
            'voiceorientationpath',
            'voicefruitluency',
            'voicerecall',
            'user_id',
            'regsiter_score',
            'fruitfluency_score',
            'wordregsiter_score',
            'orientation_score',
            'user_a_record_regsiter_1',
            'user_a_record_regsiter_2',
            'user_a_record_regsiter_3',
            'user_b_record_regsiter_1',
            'user_b_record_regsiter_2',
            'user_b_record_regsiter_3',
            'user_b_record_orientation',
            'user_b_record_friut:ntext',
            'user_b_record_recall1',
            'user_b_record_recall2',
            'user_b_record_recall3',
            'create_at',
            'update_at',
            'flagdel',
            'success',
            'user_b_record_friut_score',
            'user_id_b',
        ],
    ]) ?>

</div>
