<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use common\models\Provinces;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Registers';
$this->params['breadcrumbs'][] = $this->title;
$provinces = Provinces::find()->all();
?>

<div class="card">
    <div class="card-header"><h2>Search & Summary</h2></div>
<div class="card-body">
    <div class="row">
      <div class="col-3">จังหวัด 
      <select class="form-control select2" name="provinces">
      <?php  foreach ($provinces as $data) {?> 
      <option value="<?=$data->provinces_id?>"><?=$data->name_th?></option>
      <?php  } ?> 

      </select>
      </div>         
      <div class="col-2">เดือนปี
      <select class="form-control  select2" name="my">
        <option value="07/2565">07/2565</option>
      </select></div>         
      <div class="col-2">รหัสระบุโรค
      <select class="form-control" name="disease">
        <option value="control">Control</option>
        <option value="disease">Disease</option>
      </select>
      </div>         
      <div class="col-2">ID <input type="text" class="form-control" placeholder="ใส่ % ตอนท้าย" name="code"></div>    
      <div class="col-3"><button type="submit" class="btn btn-success btn-block">Search</button></div>         
     
</div>
              </div>
</div>
