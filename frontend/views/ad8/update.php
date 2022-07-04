<?php

use yii\helpers\Html;
use common\models\Ad8master;
/* @var $this yii\web\View */
/* @var $model common\models\Ad8 */
$masters = Ad8master::find(Yii::$app->helpers->decodeUrl('q'))->one();

$this->title = 'Update Ad 8: ' . $model->ad8_id;
$this->params['breadcrumbs'][] = ['label' => 'Ad 8s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ad8_id, 'url' => ['view', 'ad8_id' => $model->ad8_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<br><br><br><br>

<p class="number-ad8 font-inter-bold text-center"><?=Yii::$app->helpers->decodeUrl('q')?></p><br><br>
<p class=" font-inter-bold text-center"> <?=$masters->head?></p><br>
<p class="title-2 text-center"> <?=$masters->title?></p>
    <?= $this->render('_form_update', [
        'model' => $model,
    ]) ?>
</div>
