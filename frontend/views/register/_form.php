<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model common\models\register */
/* @var $form yii\widgets\ActiveForm */
use common\models\Provinces;
use common\models\Doctor;

$provinces = Provinces::find()->all();
$listData = ArrayHelper::map($provinces, 'provinces_id', 'name_th');
$Docter = Doctor::find()->all();
$listDataDocter = ArrayHelper::map($Docter, 'doctor_id', 'fullname');

?>

<div class="row">

    <?php $form = ActiveForm::begin(); ?>


    <div class="row g-3">
        <div class="col-2 col-form-label">ชื่อ <font class="text-danger">*</font>
        </div>
        <div class="col-10"><?= $form->field($model, 'name')->textInput(['maxlength' => true, 'placeholder' => 'ชื่อ'])->label(false) ?></div>
    </div>
    <div class="row g-3">
        <div class="col-2 col-form-label">นามสกุล <font class="text-danger">*</font>
        </div>
        <div class="col-10"><?= $form->field($model, 'surname')->textInput(['maxlength' => true, 'placeholder' => 'สกุล'])->label(false) ?></div>
    </div>
    <div class="row g-3">
        <div class="col-2 col-form-label">เพศ <font class="text-danger"></font>
        </div>
        <div class="col-10">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="Register[gender]" id="inlineCheckbox1" value="F">
                <label class="form-check-label" for="inlineCheckbox1">หญิง</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="Register[gender]" id="inlineCheckbox2" value="M">
                <label class="form-check-label" for="inlineCheckbox2">ชาย</label>
            </div>
        </div>
    </div>
</div>
<div class="row g-3">
    <div class="col-2 col-form-label">อายุ</div>
    <div class="col-10"><?= $form->field($model, 'age')->textInput(['maxlength' => true, 'placeholder' => 'อายุ'])->label(false) ?></div>
</div>
<div class="row g-3">
    <div class="col-2 col-form-label">โทรศัพท์</div>
    <div class="col-10"><?= $form->field($model, 'tel')->textInput(['maxlength' => true, 'placeholder' => 'XXX-XXX-XXXX'])->label(false) ?></div>
</div>

<div class="row g-3">
    <div class="col-2 col-form-label">จังหวัด <font class="text-danger">*</font>
    </div>
    <div class="col-10">
        <?= $form->field($model, 'provinces_id')->dropDownList($listData, ['prompt' => 'เลือกจังหวัด', 'class' => 'form-control select2'])->label(false) ?></div>
</div>
<div class="row g-3">
    <div class="col-2 col-form-label">แพทย์ <font class="text-danger">*</font>
    </div>
    <div class="col-10"> <?= $form->field($model, 'docter_id')->dropDownList($listDataDocter, ['prompt' => 'เลือกแพทย์ที่ส่งตรวจ', 'class' => 'form-control select2'])->label(false) ?></div>
</div>
<div class="row g-3">
    <div class="col-2 col-form-label">รหัสสถานะ <font class="text-danger">*</font>
    </div>
    <div class="col-10"><?= $form->field($model, 'disease')->dropDownList(['control' => 'Control', 'disease' => 'Disease'], ['prompt' => 'เลือกรหัสระบุโรค'])->label(false) ?></div>
</div>
<div class="row g-3">
    <div class="col-2 col-form-label">อีเมล์</div>
    <div class="col-10"><?= $form->field($model, 'email')->textInput(['maxlength' => true, 'placeholder' => 'อีเมล์'])->label(false) ?></div>
</div>

<?= $form->field($model, 'source')->hiddenInput(['value' => 'uat'])->label(false) ?>

<?= $form->field($model, 'datetest')->hiddenInput(['value' => date('Y-m-d')])->label(false) ?>

<?= $form->field($model, 'month')->hiddenInput(['value' => date('m')])->label(false) ?>

<?= $form->field($model, 'year')->hiddenInput(['value' => date('Y')])->label(false) ?>

<?= $form->field($model, 'create_at')->hiddenInput(['value' => date('Y-m-d H:i:s')])->label(false) ?>
<?= $form->field($model, 'update_at')->hiddenInput(['value' => date('Y-m-d H:i:s')])->label(false) ?>
<div class=" text-center">
    <button type="submit" class="btn btn-lg rounded-pill btn-brain">หน้าถัดไป <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
    </button>
</div>
<?php ActiveForm::end(); ?>

</div>