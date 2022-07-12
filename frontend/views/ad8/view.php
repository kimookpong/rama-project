<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model common\models\Ad8 */

$this->title = 'กำลังเตรียมคำถาม';
$this->params['breadcrumbs'][] = ['label' => 'Ad 8s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);

?>
<div class="ad8-view">
    <?php $url = Url::toRoute(['update', 'ad8_id' => $model->ad8_id, 'q' => '1']); ?>


    <div class="container">
        <div class="row">
            <div class="col-lg-12 mx-auto pt-4">
                <div class="title2 font-inter mb-4 text-muted text-center  align-middle"><br><br><br><br><br><br>
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
                window.location = "<?= $url ?>";
            }
            timeDisplay.innerHTML = 3 - counter;
        }
        setInterval(countdownTime, 1000);
        function noBack()
         {
             window.history.forward()
         }
        noBack();
        window.onload = noBack;
        window.onpageshow = function(evt) { if (evt.persisted) noBack() }
        window.onunload = function() { void (0) }
    </script>