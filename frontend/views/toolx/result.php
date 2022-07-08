<?php

use common\models\Toolx;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Testandlimits';
$this->params['breadcrumbs'][] = $this->title;


?>
<div class="ad8-create text-center h-100">
    <div class="row h-100">
        <div class="circlesuccess"></div>
        <div class="col-sm-12 col-md-6 mx-auto my-auto">
            <div>
                <h3>สิ้นสุดการคัดกรองสมองเรื่องการรู้คิด</h3>
            </div>
        </div>
    </div>
    <div class="container fixed-bottom">
        <div class="row">
            <div class="col py-4 mx-auto">
                <a class=" w-100 btn btn-lg rounded-pill btn-brain" href="<?= Url::toRoute(['site/index']); ?>">ออก <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</div>