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
<div class="container">
    <div class="row">
        <div class="col-lg-12 mx-auto pt-4">
            <div class="title2 font-inter mb-4 text-muted text-center"><br><br><br><br>
                <div class="counter mx-auto" id="countdown">
                    3
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var counter = 0;
    var timeDisplay = document.getElementById("countdown");

    function countdownTime() {
        counter = counter + 1;
        if (counter == 3) {
            window.location = "<?= Url::toRoute(['toolx/test', 'id' => $id, 'question' => 1]); ?>";
        }
        timeDisplay.innerHTML = 3 - counter;
    }
    setInterval(countdownTime, 1000);
</script>