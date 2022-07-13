<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use common\models\Provinces;
use common\models\Register;
use yii\bootstrap4\ActiveForm;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Registers';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php
function DateThai($strDate)
{
  $strYear = date("Y", strtotime($strDate)) + 543;
  $strMonth = date("n", strtotime($strDate));
  $strDay = date("j", strtotime($strDate));
  $strHour = date("H", strtotime($strDate));
  $strMinute = date("i", strtotime($strDate));
  $strSeconds = date("s", strtotime($strDate));
  $strMonthCut = array("", "ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค.");
  $strMonthThai = $strMonthCut[$strMonth];
  return "$strDay $strMonthThai $strYear";
}

?>
<div class="card">
  <div class="card-header">
    <h2>Search & Summary</h2>
  </div>
  <div class="card-body">
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data', 'id' => 'form_voice']]); ?>
    <?php @$province_id =  $_POST['provinces'];
    @$my =  $_POST['my'];
    @$disease =  $_POST['disease'];

    if(isset($province_id) && $province_id !='All'){
      $qurey1 = "and provinces_id='$province_id'";
    }
    if(isset($my) && $my !='All'){
      $expl = explode("/",$my);
      $qurey2 = "and month='$expl[0]' and year='$expl[1]'";
    }
    if(isset($disease) && $disease !='All'){
      $qurey3 = "and disease='$disease' ";
    }
    ?>
    <div class="row">

      <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="form-group">
          <label for="exampleInputEmail1">จังหวัด</label>
          <select class="form-control " name="provinces">
            <option value="All">เลือกจังหวัด</option>
            <?php
            $sql = 'SELECT
      provinces.name_th,
      provinces.provinces_id
      FROM
      provinces
      INNER JOIN register ON provinces.provinces_id = register.provinces_id
      GROUP BY
      provinces.provinces_id
      ';
            $provinces = Provinces::findBySql($sql)->all();
            foreach ($provinces as $data) {
              $p[$data->provinces_id] = $data->name_th; ?>
              <option value="<?= $data->provinces_id ?>" <?= $province_id == $data->provinces_id ? 'selected' : '' ?>> <?= $data->name_th ?></option>
            <?php  } ?>
          </select>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="form-group">
          <label for="exampleInputEmail1">เดือน/ปี</label>

          <select class="form-control " name="my">
            <option value="All">เลือกเดือน/ปี</option>

            <?php
            $sql = "
SELECT
CONCAT( month, '/', year) AS my,month,year
FROM
register
GROUP BY
my
      ";
            @$mys = Register::findBySql($sql)->all();

            foreach ($mys as $data) {
              $myss = $data->month . '/' . $data->year; ?>
              <option value="<?= $data->month ?>/<?= $data->year ?>" <?= $my == $myss ? 'selected' : '' ?>><?= $data->month ?>/<?= $data->year ?></option>
            <?php  }  ?>

          </select>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="form-group">
          <label for="exampleInputEmail1">รหัสสถานะ</label>

          <select class="form-control" name="disease">
            <option value="All" <?= $disease == 'All' ? 'All' : '' ?>>All</option>
            <option value="control" <?= $disease == 'control' ? 'selected' : '' ?>>Control</option>
            <option value="disease" <?= $disease == 'disease' ? 'selected' : '' ?>>Disease</option>
          </select>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 text-center pt-3">
        <button type="submit" class="btn  btn-outline-success "><i class="fa fa-search"></i> Search</button>
        <button type="reset" class="btn  btn-outline-danger "><i class="fa fa-undo"></i> Reset</button>

      </div>
      <?php ActiveForm::end(); ?>
    </div>
  </div>
</div>
<div class="card">
  <!-- /.card-header -->
  <div class="card-body">
    <?php if (isset($_POST[''])) ?>
    <div class="col-12">
    <table id="example1" class="table table-bordered table-hover dataTable dtr-inline collapsed">
      <thead>
        <tr>
          <th>วันที่ทดสอบ</th>
          <th>ชื่อ</th>
          <th>สกุล</th>
          <th>รหัส</th>
          <th>อายุ</th>
          <th>จังหวัด</th>
          <th>โทรศัพท์</th>
          <th>อีเมล</th>
          <th>#</th>

        </tr>
      </thead>
      <tbody>
        <?php
        @$sql = " SELECT * FROM register where flagdel = 0 $qurey1 $qurey2 $qurey3";
        @$Registers = Register::findBySql($sql)->all();

        foreach ($Registers as $data) { ?>
          <tr>
            <td><?= DateThai($data->datetest) ?></td>
            <td><?= $data->name ?></td>
            <td><?= $data->surname ?></td>
            <td><?= $data->disease ?></td>
            <td><?= $data->age ?></td>
            <td><?= $p[$data->provinces_id] ?></td>
            <td><?= $data->tel ?></td>
            <td><?= $data->email ?></td>

            <td>
              <?= Html::a('รายละเอียด', ['view', 'register_id' => $data->register_id], ['class' => 'btn btn-info btn-sm']) ?>
          </tr>
        <?php } ?>
      </tbody>

    </table>
  </div></div>
  <!-- /.card-body -->
</div>
<!-- /.card -->
</div>
<!-- /.col -->
</div>


</div>
</div>
</div>