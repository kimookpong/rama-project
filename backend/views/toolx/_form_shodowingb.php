<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\toolx */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="toolx-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'user_id')->HiddenInput(['value' => Yii::$app->user->identity->id])->label(false); ?>


    <div class="col-12 col-sm-12">
            <div class="card card-primary card-outline card-tabs">
              <div class="card-header p-0 pt-1 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="true">Test the Limit</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false">Registeration(จำคำ 3 คำ)</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-three-messages-tab" data-toggle="pill" href="#custom-tabs-three-messages" role="tab" aria-controls="custom-tabs-three-messages" aria-selected="false">Orientation(วันนี้วันอะไร)</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-three-settings-tab" data-toggle="pill" href="#custom-tabs-three-settings" role="tab" aria-controls="custom-tabs-three-settings" aria-selected="false">Fruit Fluency(พูดชื่อผลไม้)</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-three-recall-tab" data-toggle="pill" href="#custom-tabs-three-recall" role="tab" aria-controls="custom-tabs-three-recall" aria-selected="false">Recall(นึกคำ 3 คำ)</a>
                  </li>

                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-three-tabContent">
                  <div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
                 
                  <h3>Test the Limit (บันทึกเสียงที่ได้ยินจากผู้ทดสอบ)</h3>
บันทึกคำที่ได้ยินจากผู้ทดสอบ หรือจากระบบที่บันทึกเอาไว้
<div class="row"><div class="col-6"></div>
<div class="col-6">
    <div class="row g-3">
        <div class="col-4 col-form-label">บันทึกคำจากระบบคำที่ 1</div>
        <div class="col-6"> <?= $form->field($model, 'user_a_record_regsiter_1')->textInput(['maxlength' => true])->label(false) ?></div>
    </div>
    <div class="row g-3">
        <div class="col-4 col-form-label">บันทึกคำจากระบบคำที่ 2</div>
        <div class="col-6"> <?= $form->field($model, 'user_a_record_regsiter_2')->textInput(['maxlength' => true])->label(false) ?></div>
    </div>
    <div class="row g-3">
        <div class="col-4 col-form-label">บันทึกคำจากระบบคำที่ 3</div>
        <div class="col-6"> <?= $form->field($model, 'user_a_record_regsiter_3')->textInput(['maxlength' => true])->label(false) ?></div>
    </div>

    

    </div>
   </div> <div class="row g-3">
        <div class="col-3 col-form-label">คุณภาพเสียง</div>
        <div class="col-1">  <?= $form->field($model, 'user_a_voice_quality1')->checkBox() ?></div>
        <div class="col-2">  <?= $form->field($model, 'user_a_voice_quality2')->checkBox() ?></div>
        <div class="col-3">  <?= $form->field($model, 'user_a_voice_quality3')->checkBox() ?></div>
    </div>

                  
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">
                     Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra purus ut ligula tempor, et vulputate metus facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas sollicitudin, nisi a luctus interdum, nisl ligula placerat mi, quis posuere purus ligula eu lectus. Donec nunc tellus, elementum sit amet ultricies at, posuere nec nunc. Nunc euismod pellentesque diam.
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-three-messages" role="tabpanel" aria-labelledby="custom-tabs-three-messages-tab">
                     Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris. Phasellus volutpat augue id mi placerat mollis. Vivamus faucibus eu massa eget condimentum. Fusce nec hendrerit sem, ac tristique nulla. Integer vestibulum orci odio. Cras nec augue ipsum. Suspendisse ut velit condimentum, mattis urna a, malesuada nunc. Curabitur eleifend facilisis velit finibus tristique. Nam vulputate, eros non luctus efficitur, ipsum odio volutpat massa, sit amet sollicitudin est libero sed ipsum. Nulla lacinia, ex vitae gravida fermentum, lectus ipsum gravida arcu, id fermentum metus arcu vel metus. Curabitur eget sem eu risus tincidunt eleifend ac ornare magna.
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-three-settings" role="tabpanel" aria-labelledby="custom-tabs-three-settings-tab">
                     Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis vulputate. Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum pharetra. Donec interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam. Nunc et felis ut nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet accumsan ex sit amet facilisis.
                  </div>
                </div>
              </div>
              <!-- /.card -->
            </div>
          </div>



    <div class="text-center">
        <?= Html::ResetButton('Cancel', ['class' => 'btn btn-danger']) ?>
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div></div>
