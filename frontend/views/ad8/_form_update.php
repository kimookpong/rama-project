<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model common\models\Ad8 */
/* @var $form yii\widgets\ActiveForm */

$q = Yii::$app->helpers->decodeUrl('q') ?>


<?php $form = ActiveForm::begin(); ?>
<?php $url = Url::toRoute(['update', 'ad8_id' => $model->ad8_id, 'q' => '1']); ?>
<?= $form->field($model, 'update_at')->hiddenInput(['value' => date('Y-m-d h:i:s')])->label(false) ?>

<input type="hidden" name="Ad8[question<?= $q ?>]" id="question"></input>

<div class="container fixed-bottom">
  <div class="row">
    <div class="col mx-4 text-center">
      <div class="row">
        <div class="col-4 px-1">
          <a class="btn btn-lg rounded-pill btn-block btn-ad8 font-inter-bold" id='1' onclick="myFunction(1)">ใช่</a>
        </div>
        <div class="col-4 px-1">
          <a class="btn btn-lg rounded-pill btn-block btn-ad8 font-inter-bold text-nowrap" id='2' onclick="myFunction(2)">ไม่ทราบ</a>
        </div>
        <div class="col-4 px-1">
          <a class="btn btn-lg rounded-pill btn-block btn-ad8 font-inter-bold" id='3' onclick="myFunction(3)">ไม่ใช่</a>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col py-0 mx-2 mb-4">
      <a class="btn btn-lg rounded-pill" onclick="history.back();"> <i class="fa fa-arrow-circle-left  text-left fa-xl p-1" aria-hidden="true"></i></a>
      </a>
    </div>
  </div>
</div>

<?php ActiveForm::end(); ?>

<script>
  function myFunction($v) {
    document.getElementById("question").value = $v;
    document.getElementById("w0").submit();
  }
  var q1 = <?= $model->question1 + 0 ?>;
  var q2 = <?= $model->question2 + 0 ?>;
  var q3 = <?= $model->question3 + 0 ?>;
  var q4 = <?= $model->question4 + 0 ?>;
  var q5 = <?= $model->question5 + 0 ?>;
  var q6 = <?= $model->question6 + 0 ?>;
  var q7 = <?= $model->question7 + 0 ?>;
  var q8 = <?= $model->question8 + 0 ?>;
  var q = q<?= $q ?>;
  var element = document.getElementById(q);
  element.classList.add("btn-ad8-check");
</script>