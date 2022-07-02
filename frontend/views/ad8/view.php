<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Ad8 */

$this->title = $model->ad8_id;
$this->params['breadcrumbs'][] = ['label' => 'Ad 8s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="ad8-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'ad8_id' => $model->ad8_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'ad8_id' => $model->ad8_id], [
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
            'ad8_id',
            'register_id',
            'respondent',
            'question1',
            'question2',
            'question3',
            'question4',
            'question5',
            'question6',
            'question7',
            'question8',
            'score',
            'create_at',
            'update_at',
            'flagdel',
            'success',
        ],
    ]) ?>

</div>
