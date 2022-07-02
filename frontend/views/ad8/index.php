<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ad 8s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ad8-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ad 8', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ad8_id',
            'register_id',
            'respondent',
            'question1',
            'question2',
            //'question3',
            //'question4',
            //'question5',
            //'question6',
            //'question7',
            //'question8',
            //'score',
            //'create_at',
            //'update_at',
            //'flagdel',
            //'success',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Ad8 $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'ad8_id' => $model->ad8_id]);
                 }
            ],
        ],
    ]); ?>


</div>
