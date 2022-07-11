<?php

use yii\helpers\Html;
use common\models\Ad8master;
/* @var $this yii\web\View */
/* @var $model common\models\Ad8 */

$masters = Ad8master::findOne(Yii::$app->helpers->decodeUrl('q'));

$this->title = 'แบบทดสอบ AD8';
$this->params['breadcrumbs'][] = ['label' => 'Ad 8s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ad8_id, 'url' => ['view', 'ad8_id' => $model->ad8_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<br><br>

<p class="number-ad8 font-inter-bold text-center"><?= Yii::$app->helpers->decodeUrl('q') ?></p><br><br>
<h3 class="font-38 font-inter-bold text-center mx-2"> <?= $masters->head ?></h3><br>
<p class="title2 text-center mx-2"> <?= $masters->title ?></p>
<?= $this->render('_form_update', [
    'model' => $model,
]) ?>
</div>