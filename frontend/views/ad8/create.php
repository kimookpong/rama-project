<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Ad8 */

$this->title = 'Create Ad 8';
$this->params['breadcrumbs'][] = ['label' => 'Ad 8s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ad8-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
