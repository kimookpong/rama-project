<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'กำลังเตรียมคำถาม';
$this->params['breadcrumbs'][] = $this->title;
?>
<br><br><br><br><br><br>
<div class=" text-center">
    <div class="countdowntime"></div>
</div>
  
<script>


    function countdownTime() {
        counter = counter + 1;
        if (counter ==4) {
            window.location = "<?= Url::toRoute(['test-the-limit/test', 'id' => $id, 'question' => 1]); ?>";
        }
    }
    setInterval(countdownTime, 1000);
</script>