<?php
use common\models\Register;
use common\models\Parameter;

@$my =  $_POST['my'];
$Parameter = Parameter::find()->one();
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
    <h2><i class="fas fa-filter" aria-hidden="true"></i> Search with Criteria for Case</h2>
  </div>
  <div class="card-body">
    <form id="form_voice" action="" method="post" enctype="multipart/form-data">
    <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-6">
    <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <button type="button" class="btn bg-gray">เกณฑ์ Test the Limit(X) :</button>
                  </div>
                  <!-- /btn-group -->
                  <input type="text" class="form-control" value="<?=$Parameter->x?>">
                </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
    <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <button type="button" class="btn bg-gray">เกณฑ์ Registration(Y) :</button>
                  </div>
                  <!-- /btn-group -->
                  <input type="text" class="form-control" value="<?=$Parameter->y?>">
                </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
    <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <button type="button" class="btn bg-gray">เกณฑ์ชื่อผลไม้(Z) :</button>
                  </div>
                  <!-- /btn-group -->
                  <input type="text" class="form-control" value="<?=$Parameter->z?>">
                </div>
                </div>
                
      <div class="col-lg-2 col-md-2 col-sm-6 text-center">
          <div class="form-group">
          <div class="row">
            <div class="col">
              <button type="submit" class="btn   btn-outline-success "><i class="fa fa-search"></i> Search</button>
            </div>
          </div>
        </div>
      </div> </div>
      <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12">
      <div class="card">
        <div class="card-body text-center">
        <label > เลือกช่วงเวลาของข้อมูล </label >
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="form-group">
          <select class="form-control " name="my">
            <option value="All">จากเดือน/ปี</option>

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
      <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="form-group">
          <select class="form-control " name="my">
            <option value="All">ถึงเดือน/ปี</option>

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
      </div>

        </div>  
      </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
      <div class="card">
        <div class="card-body ">
            <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox1" >
                          <label for="customCheckbox1" class="custom-control-label">ไม่ผ่าน AD8</label>
            </div>
            <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox2" >
                          <label for="customCheckbox2" class="custom-control-label">ไม่ผ่าน Test the Limit</label>
            </div>
            <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox3" >
                          <label for="customCheckbox3" class="custom-control-label">ไม่ผ่าน ToolX</label>
            </div>
        </div>
    </div>


      </div>
      </div>  </div>  </div></div>


      <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="card">
        <div class="card-body ">
        <div class="table-responsive col-12">

        <table class="table table-striped table-bordered" id="example1">
        <thead>
                  <tr class="bg-info text-center">
                    <th>ชื่อ</th>
                    <th>รหัส</th>
                    <th>อายุ</th>
                    <th>จังหวัด</th>
                    <th>วันที่ทดสอบ</th>
                    <th class="bg-danger">รวม AD8</th>
                    <th class="bg-danger">รวม TTL</th>
                    <th class="bg-success">TX#1</th>
                    <th class="bg-success">TX#2</th>
                    <th class="bg-danger">รวมผลไม้</th>
                    <th class="bg-success">TX#4</th>
                    <th class="bg-danger">รวมคะแนน</th>
                  </tr>
            </thead>
            <tbody>
          <?php  $connection = Yii::$app->getDb();
$command = $connection->createCommand("SELECT
register.`name`,
register.surname,
register.disease,
register.age,
provinces.name_th,
register.datetest,
ad8.score as ad8,
testandlimit.score as ttl,
toolx.regsiter_score,
toolx.fruitfluency_score,
toolx.wordregsiter_score,
toolx.orientation_score
FROM
register
INNER JOIN testandlimit ON register.register_id = testandlimit.register_id
INNER JOIN toolx ON register.register_id = toolx.register_id
INNER JOIN ad8 ON register.register_id = ad8.register_id
INNER JOIN provinces ON register.provinces_id = provinces.provinces_id
");

$result = $command->queryAll();
foreach ($result as $data) {

?>
              <tr >
                    <td><?=$data['name']?><?=$data['surname']?></td>
                    <td><?=$data['disease']?></td>
                    <td><?=$data['age']?></td>
                    <td><?=$data['name_th']?></td>
                    <td><?=DateThai($data['datetest'])?></td>
                    <td><?=$data['ad8']?></td>
                    <td><?=$data['ttl']?></td>
                    <td><?=$data['regsiter_score']?></td>
                    <td><?=$data['orientation_score']?></td>
                    <td><?=$data['fruitfluency_score']?></td>
                    <td><?=$data['wordregsiter_score']?></td>
                    <td><?=$data['ad8']?></td>

          </tr>
<?php } ?>

            </tbody>
            </table>
        </div></div></div>
        
        
          </div></form>
  </div>
</div>