<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Ad8 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ad8-form">

    <?php $form = ActiveForm::begin(); ?>

<p class="title3"> ผู้ทำแบบสอบถาม </p>
    <?= $form->field($model, 'register_id')->hiddenInput(['value'=>$_REQUEST['reg_id']])->label(false) ?>
    <div class="radio">
  <label>
    <input type="radio" id="ad8-respondent1"  name="Ad8[respondent]" value="1" checked>
    ทำด้วยตนเอง
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" id="ad8-respondent2"  name="Ad8[respondent]" value="2">
    ผู้ดูแล/ญาติช่วยทำ
  </label>
</div>

<?= $form->field($model, 'create_at')->hiddenInput(['value'=>date('Y-m-d h:i:s')])->label(false) ?>
<?= $form->field($model, 'update_at')->hiddenInput(['value'=>date('Y-m-d h:i:s')])->label(false) ?>


    <div class="container fixed-bottom">
			<div class="row">
			  <div class="col py-4 mx-auto">
				<button class=" w-100 btn btn-lg rounded-pill btn-brain" type="submit">เริ่มการทดสอบ</button>
			  </div>
			</div>
		  </div>

    <?php ActiveForm::end(); ?>

</div>
