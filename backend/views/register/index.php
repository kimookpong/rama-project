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
		$strYear = date("Y",strtotime($strDate))+543;
		$strMonth= date("n",strtotime($strDate));
		$strDay= date("j",strtotime($strDate));
		$strHour= date("H",strtotime($strDate));
		$strMinute= date("i",strtotime($strDate));
		$strSeconds= date("s",strtotime($strDate));
		$strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
		$strMonthThai=$strMonthCut[$strMonth];
		return "$strDay $strMonthThai $strYear";
	}

?>
<div class="card">
    <div class="card-header"><h2>Search & Summary</h2></div>
<div class="card-body">
<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data', 'id' => 'form_voice']]); ?>
<?php @$provinces =  $_POST['provinces'];?>
    <div class="row">
      <div class="col-3">จังหวัด 
      <select class="form-control select2" name="provinces">
      <option >เลือกจังหวัด</option >
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
      foreach ($provinces as $data) { $p[$data->provinces_id]=$data->name_th;?> 
      <option value="<?=$data->provinces_id?>"><?=$data->name_th?></option>
      <?php  } ?> 
      </select>
      </div>         
      <div class="col-2">เดือน/ปี
      <select class="form-control  select2" name="my">
      <option >เลือกเดือน/ปี</option >

      <?php  
      $sql = "
SELECT
CONCAT( month, '/', year) AS my,month,year
FROM
register
GROUP BY
my
      ";
      @$my = Register::findBySql($sql)->all();  
        
      foreach ($my as $data) {?> 
      <option value="<?=$data->month?>/<?=$data->year?>"><?=$data->month?>-<?=$data->year?></option>
      <?php  }  ?> 
      
      </select></div>         
      <div class="col-2">รหัสสถานะ
      <select class="form-control" name="disease">
        <option value="control">Control</option>
        <option value="disease">Disease</option>
      </select>
      </div>         
      <div class="col-2"></div>    
      <div class="col-3">
      <button type="submit" class="btn btn-success btn-block">Search</button>
    </div>         
    <?php ActiveForm::end(); ?>
    </div>   </div>   </div>  
    <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <?php if(isset($_POST['']))?>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ชื่อ</th>
                    <th>สกุล</th>
                    <th>รหัส</th>
                    <th>อายุ</th>
                    <th>จังหวัด</th>
                    <th>โทรศัพท์</th>
                    <th>อีเมล</th>
                    <th>วันที่ทดสอบ</th>
                    <th>#</th>

                  </tr>
                  </thead>
                  <tbody>
                  <?php  
      $sql = "
SELECT
*
FROM
register

      ";
      @$Registers = Register::findBySql($sql)->all();  
        
      foreach ($Registers as $data) {?> 
                  <tr>
                    <td><?=$data->name?></td>
                    <td><?=$data->surname?></td>
                    <td><?=$data->disease?></td>
                    <td><?=$data->age?></td>
                    <td><?=$p[$data->provinces_id]?></td>
                    <td><?=$data->tel?></td>
                    <td><?=$data->email?></td>
                    <td><?=DateThai($data->datetest)?></td>
                    <td>
                    <?= Html::a('รายละเอียด', ['view', 'register_id' => $data->register_id], ['class' => 'btn btn-info btn-sm']) ?>

                  </tr>
             <?php } ?>
                  </tbody>
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>


</div>
              </div>
</div>
