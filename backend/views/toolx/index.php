<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Toolxes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="toolx-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Toolx', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'toolx_id',
            'register_id',
            'regsiter1',
            'regsiter2',
            'regsiter3',
            //'datenow',
            //'caseregsiter',
            //'regsiterwordseg',
            //'orientation',
            //'fruitfluency:ntext',
            //'fruitwordseg:ntext',
            //'recall',
            //'recallwordseg',
            //'voiceregsiter',
            //'voiceorientationpath',
            //'voicefruitluency',
            //'voicerecall',
            //'user_id',
            //'regsiter_score',
            //'fruitfluency_score',
            //'wordregsiter_score',
            //'orientation_score',
            //'user_a_record_regsiter_1',
            //'user_a_record_regsiter_2',
            //'user_a_record_regsiter_3',
            //'user_b_record_regsiter_1',
            //'user_b_record_regsiter_2',
            //'user_b_record_regsiter_3',
            //'user_b_record_orientation',
            //'user_b_record_friut:ntext',
            //'user_b_record_recall1',
            //'user_b_record_recall2',
            //'user_b_record_recall3',
            //'create_at',
            //'update_at',
            //'flagdel',
            //'success',
            //'user_b_record_friut_score',
            //'user_id_b',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, toolx $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'toolx_id' => $model->toolx_id]);
                 }
            ],
        ],
    ]); ?>


</div>
