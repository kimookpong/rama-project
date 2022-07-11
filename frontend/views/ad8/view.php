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

    
    <script type="text/javascript">
        function noBack()
         {
             window.history.forward()
         }
        noBack();
        window.onload = noBack;
        window.onpageshow = function(evt) { if (evt.persisted) noBack() }
        window.onunload = function() { void (0) }
    </script>