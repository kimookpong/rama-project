<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Registers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="register-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Register', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'register_id',
            'case_id',
            'casecode',
            'name',
            'surname',
            //'disease',
            //'age',
            //'gender',
            //'provinces_id',
            //'email:email',
            //'tel',
            //'datetest',
            //'month',
            //'year',
            //'user_id',
            //'source',
            //'create_at',
            //'update_at',
            //'flagdel',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, register $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'register_id' => $model->register_id]);
                 }
            ],
        ],
    ]); ?>


</div>
