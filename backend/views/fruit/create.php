<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\fruit */

$this->title = 'Create Fruit';
$this->params['breadcrumbs'][] = ['label' => 'Fruits', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fruit-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
