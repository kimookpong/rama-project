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
