<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\testandlimit;
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
                    <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="true">Test the limit</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false">Registeration</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-three-messages-tab" data-toggle="pill" href="#custom-tabs-three-messages" role="tab" aria-controls="custom-tabs-three-messages" aria-selected="false">Orientation</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-three-settings-tab" data-toggle="pill" href="#custom-tabs-three-settings" role="tab" aria-controls="custom-tabs-three-settings" aria-selected="false">Fruit Fluency</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-three-recall-tab" data-toggle="pill" href="#custom-tabs-three-recall" role="tab" aria-controls="custom-tabs-three-recall" aria-selected="false">Recall</a>
                  </li>

                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-three-tabContent">
                  <div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
                 
                  <h3>Test the Limit (บันทึกเสียงที่ได้ยินจากผู้ทดสอบ)</h3>
บันทึกคำที่ได้ยินจากผู้ทดสอบ หรือจากระบบที่บันทึกเอาไว้
<div class="row"><div class="col-6">
  
</div>
<div class="col-6">
    <div class="row g-3">
        <div class="col-6 col-form-label">บันทึกคำจากระบบคำที่ 1</div>
        <div class="col-6"> <div class="form-group field-toolx-user_a_record_regsiter_1">

<input type="text" id="toolx-user_a_record_regsiter_1" class="form-control" name="Testandlimit[userrecord_qustion1]" maxlength="100">

<div class="help-block"></div>
</div></div>
    </div>
    <div class="row g-3">
        <div class="col-6 col-form-label">บันทึกคำจากระบบคำที่ 2</div>
        <div class="col-6"> <div class="form-group field-toolx-user_a_record_regsiter_2">

<input type="text" id="toolx-user_a_record_regsiter_2" class="form-control" name="Testandlimit[userrecord_qustion2]" maxlength="100">

<div class="help-block"></div>
</div></div>
    </div>
    <div class="row g-3">
        <div class="col-6 col-form-label">บันทึกคำจากระบบคำที่ 3</div>
        <div class="col-6"> <div class="form-group field-toolx-user_a_record_regsiter_3">

<input type="text" id="toolx-user_a_record_regsiter_3" class="form-control" name="Testandlimit[userrecord_qustion3]"  maxlength="100">

<div class="help-block"></div>
</div></div>
    </div>
    </div>
   </div> 
   
   <div class="row g-3">
        <div class="col-3 col-form-label">คุณภาพเสียง</div>
        <div class="col-1">  <div class="form-group field-toolx-user_a_voice_quality1">

<input type="hidden" name="Testandlimit[voicequality1]" value="0"><label><input type="checkbox" id="toolx-user_a_voice_quality1" name="Testandlimit[voicequality1]" value="1"> ดี</label>

<div class="help-block"></div>
</div></div>
        <div class="col-2">  <div class="form-group field-toolx-user_a_voice_quality2">

<input type="hidden" name="Testandlimit[voicequality2]" value="0"><label><input type="checkbox" id="toolx-user_a_voice_quality2" name="Testandlimit[voicequality2]" value="1"> เสียงเบา</label>

<div class="help-block"></div>
</div></div>
        <div class="col-3">  <div class="form-group field-toolx-user_a_voice_quality3">

<input type="hidden" name="Testandlimit[voicequality3]" value="0"><label><input type="checkbox" id="toolx-user_a_voice_quality3" name="Testandlimit[voicequality3]" value="1"> มีเสียงรบกวน</label>

<div class="help-block"></div>
</div></div>
    </div>

                  
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">
                  <h3>บันทึกผล ToolX (บันทึกเสียงที่ได้ยินข้อ 1/4)</h3>
บันทึกคำที่ได้ยินจากผู้ทดสอบ หรือจากระบบที่บันทึกเอาไว้
<h5>Registeration(จำคำ 3 คำ)</h5>
<div class="row">
<div class="col-6">  <div class="row g-3">
        <div class="col-4 col-form-label">ฟังเสียง</div>
        <div class="col-8">
        <audio width="100%" controls>
                  <source src="<?= Yii::$app->params['frontend'] ?><?=$model->voiceregsiter?>" type="audio/mpeg">
                  Your browser does not support the audio element.
                </audio>
      </div>
    </div>
</div>
<div class="col-6">
  
    <div class="row g-3">
        <div class="col-6 col-form-label">บันทึกคำจากระบบคำที่ 1</div>
        <div class="col-6"> <?= $form->field($model, 'user_b_record_regsiter_1')->textInput(['maxlength' => true])->label(false) ?></div>
    </div>
    <div class="row g-3">
        <div class="col-6 col-form-label">บันทึกคำจากระบบคำที่ 2</div>
        <div class="col-6"> <?= $form->field($model, 'user_b_record_regsiter_2')->textInput(['maxlength' => true])->label(false) ?></div>
    </div>
    <div class="row g-3">
        <div class="col-6 col-form-label">บันทึกคำจากระบบคำที่ 3</div>
        <div class="col-6"> <?= $form->field($model, 'user_b_record_regsiter_3')->textInput(['maxlength' => true])->label(false) ?></div>
    </div>
    </div>  </div>                  </div>
                  <div class="tab-pane fade" id="custom-tabs-three-messages" role="tabpanel" aria-labelledby="custom-tabs-three-messages-tab">

                  <h3>บันทึกผล ToolX (บันทึกเสียงที่ได้ยินข้อ 2/4)</h3>
บันทึกคำที่ได้ยินจากผู้ทดสอบ หรือจากระบบที่บันทึกเอาไว้
<h5>Orientation(วันนี้วันอะไร)</h5>
<div class="row">
<div class="col-6">  <div class="row g-3">
        <div class="col-4 col-form-label">ฟังเสียง</div>
        <div class="col-8">
        <audio width="100%" controls>
                  <source src="<?= Yii::$app->params['frontend'] ?><?=$model->voiceorientationpath?>" type="audio/mpeg">
                  Your browser does not support the audio element.
                </audio>
      </div>
    </div>
</div>
<div class="col-6">
  
    <div class="row g-3">
        <div class="col-6 col-form-label">บันทึกคำที่ได้ยิน </div>
        <div class="col-6"> <?= $form->field($model, 'user_b_record_orientation')->textInput(['maxlength' => true])->label(false) ?></div>
    </div>
   
    </div>  </div> 

                </div>
                  <div class="tab-pane fade" id="custom-tabs-three-settings" role="tabpanel" aria-labelledby="custom-tabs-three-settings-tab">

                  <h3>บันทึกผล ToolX (บันทึกเสียงที่ได้ยินข้อ 3/4)</h3>
บันทึกคำที่ได้ยินจากผู้ทดสอบ หรือจากระบบที่บันทึกเอาไว้
<h5>Fruit Fluency (พูดชื่อผลไม้ ให้ได้มากที่สุดในเวลา 1 นาที)</h5>
<div class="row">
<div class="col-6">  <div class="row g-3">
        <div class="col-4 col-form-label">ฟังเสียง</div>
        <div class="col-8">
        <audio width="100%" controls>
                  <source src="<?= Yii::$app->params['frontend'] ?><?=$model->voicefruitluency?>" type="audio/mpeg">
                  Your browser does not support the audio element.
                </audio>
      </div>
    </div>
</div>
<div class="col-6">
  
    <div class="row g-3">
        <div class="col-6 col-form-label">บันทึกคำที่ได้ยิน </div>
        <div class="col-12"> <?= $form->field($model, 'user_b_record_friut')->textArea(['maxlength' => true])->label(false) ?></div>
    </div>
   
    </div>  </div> 
                 </div> 
    <div class="tab-pane fade" id="custom-tabs-three-recall" role="tabpanel" aria-labelledby="custom-tabs-three-recall-tab">
      
    <h3>บันทึกผล ToolX (บันทึกเสียงที่ได้ยินข้อ 4/4)</h3>
บันทึกคำที่ได้ยินจากผู้ทดสอบ หรือจากระบบที่บันทึกเอาไว้
<h5>Recall(จำคำ 3 คำ)</h5>
<div class="row">
<div class="col-6">  <div class="row g-3">
        <div class="col-4 col-form-label">ฟังเสียง</div>
        <div class="col-8">
        <audio width="100%" controls>
                  <source src="<?= Yii::$app->params['frontend'] ?><?=$model->voiceregsiter?>" type="audio/mpeg">
                  Your browser does not support the audio element.
                </audio>
      </div>
    </div>
</div>
<div class="col-6">
  
    <div class="row g-3">
        <div class="col-6 col-form-label">บันทึกคำจากระบบคำที่ 1</div>
        <div class="col-6"> <?= $form->field($model, 'user_b_record_recall1')->textInput(['maxlength' => true])->label(false) ?></div>
    </div>
    <div class="row g-3">
        <div class="col-6 col-form-label">บันทึกคำจากระบบคำที่ 2</div>
        <div class="col-6"> <?= $form->field($model, 'user_b_record_recall2')->textInput(['maxlength' => true])->label(false) ?></div>
    </div>
    <div class="row g-3">
        <div class="col-6 col-form-label">บันทึกคำจากระบบคำที่ 3</div>
        <div class="col-6"> <?= $form->field($model, 'user_b_record_recall3')->textInput(['maxlength' => true])->label(false) ?></div>
    </div>
    </div>  </div>     
  
  
  
  
  
  </div>



                </div>

                </div>
                </div>
              </div>
              <!-- /.card -->
            </div>
          </div>



    <div class="text-center p-3">
        <?= Html::ResetButton('Cancel', ['class' => 'btn btn-danger']) ?>
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div></div>