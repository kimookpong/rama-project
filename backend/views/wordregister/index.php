<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Wordregisters';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wordregister-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Wordregister', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'wordreg_id',
            'word',
            'verbtype',
            'voicepart',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, wordregister $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'wordreg_id' => $model->wordreg_id]);
                 }
            ],
        ],
    ]); ?>


</div>
