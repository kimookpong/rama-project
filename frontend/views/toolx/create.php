<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Toolx */

$this->title = 'Create Toolx';
$this->params['breadcrumbs'][] = ['label' => 'Toolxes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="toolx-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
