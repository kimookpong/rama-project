<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\register */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Registers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="register-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'register_id' => $model->register_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'register_id' => $model->register_id], [
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
            'register_id',
            'case_id',
            'casecode',
            'name',
            'surname',
            'disease',
            'age',
            'gender',
            'provinces_id',
            'email:email',
            'tel',
            'datetest',
            'month',
            'year',
            'user_id',
            'source',
            'create_at',
            'update_at',
            'flagdel',
        ],
    ]) ?>

</div>
