<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Testandlimit */

$this->title = 'Create Testandlimit';
$this->params['breadcrumbs'][] = ['label' => 'Testandlimits', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="testandlimit-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
