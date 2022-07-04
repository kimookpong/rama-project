<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model common\models\Ad8 */
/* @var $form yii\widgets\ActiveForm */
$q = Yii::$app->helpers->decodeUrl('q')?>
?>


    <?php $form = ActiveForm::begin(); ?>
    <?php $url = Url::toRoute(['update', 'ad8_id' => $model->ad8_id,'q'=>'1']);?>

    <input type="text" name="Ad8[question<?=$q?>]" id="question"></input>
    <input type="text" name="Ad8[step]" value="<?=$q+1?>"></input>
  
    <div class="container fixed-bottom">
			<div class="row">
			  <div class="col py-4 mx-auto text-center">
				<a class="btn btn-lg rounded-pill btn-ad8 col-3 font-inter-bold m-2"  onclick="myFunction(1)">ใช่</a>
        <a class="btn btn-lg rounded-pill btn-ad8  col-3 font-inter-bold  m-2" onclick="myFunction(2)">ไม่ทราบ</a>
        <a class="btn btn-lg rounded-pill btn-ad8  col-3 font-inter-bold  m-2" onclick="myFunction(3)">ไม่ใช่</a>
        <a class="btn btn-lg col-9 text-left"> <i class="fa fa-arrow-circle-left  text-left fa-xl p-1" aria-hidden="true"></i></a>
			  </div>
			</div>
		  </div>

    <?php ActiveForm::end(); ?>

    <script>
function myFunction($v) {
  document.getElementById("question").value = $v;
}
</script>


