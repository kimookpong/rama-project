<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'กำลังประมวลผล...';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="px-4 py-5 text-center">
        <div class="spinner-border" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
        <div class="col-lg-6 mx-auto">
            <p class="lead my-4">กำลังประมวลผล กรุณารอสักครู่</p>
        </div>
    </div>
</div>

<script type="text/javascript">
    function goProcess() {
        console.log('start_process');
        $.ajax({
            url: "process?id=<?= $id ?>",
            method: "GET",
            success: function(data) {
                window.location = "<?= Url::toRoute(['test-the-limit/result', 'id' => $id]); ?>";
            }
        });
    }
    window.onload = function() {
        goProcess();
    };
</script>