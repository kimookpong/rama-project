<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model common\models\Ad8 */

$this->title = $model->ad8_id;
$this->params['breadcrumbs'][] = ['label' => 'Ad 8s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);

?>
<div class="ad8-view">
<?php  $url = Url::toRoute(['update', 'ad8_id' => $model->ad8_id,'q'=>'1']);?>


<br><br><br><br>

<div id="counter" class="number-ad8 font-inter-bold text-center" /></div>  <!-- text box แสดงการนับถอยหลัง   -->
<script>

 var seconds=4;// กำหนดค่าเริ่มต้น 10 วินาที
 document.getElementById("counter").innerHTML='4';//แสดงค่าเริ่มต้นใน 10 วินาที ใน text box

function display(){ //function ใช้ในการ นับถอยหลัง

    seconds-=1;//ลบเวลาทีละหนึ่งวินาทีทุกครั้งที่ function ทำงาน
 
 if(seconds==-1){return window.location.replace("<?=$url?>");} //เมื่อหมดเวลาแล้วจะหยุดการทำงานของ function display
    document.getElementById("counter").innerHTML=seconds; //แสดงเวลาที่เหลือ
    setTimeout("display()",1000);// สั่งให้ function display() ทำงาน หลังเวลาผ่านไป 1000 milliseconds ( 1000  milliseconds = 1 วินาที )
}
display(); //เปิดหน้าเว็บให้ทำงาน function  display()

</script>


</div>
