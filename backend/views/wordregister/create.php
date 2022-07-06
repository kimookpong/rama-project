<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\wordregister */

$this->title = 'Create Wordregister';
$this->params['breadcrumbs'][] = ['label' => 'Wordregisters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wordregister-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
