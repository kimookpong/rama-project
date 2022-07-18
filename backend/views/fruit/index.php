<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Fruits';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-6">
                <h2><?= $this->title ?></h2>
            </div>
            <div class="col-6">
                <?= Html::a('Create Fruits', ['create'], ['class' => 'btn btn-success float-right']) ?>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>fruit</th>
                    <th width="60px">#</th>
                </tr>
            </thead>
            <tbody>
                <?php

                foreach ($model as $data) { ?>
                    <tr>
                        <td><?= $data->fruit ?></td>
                        <td class="text-center">
                            <div class="btn-group btn-group-sm">
                                <?= Html::a('<i class="fas fa-pencil-alt"></i>', ['update', 'fruit_id' => $data->fruit_id], ['class' => 'btn btn-info btn-sm']) ?>
                                <?= Html::a('<i class="fas fa-trash"></i>', ['delete', 'fruit_id' => $data->fruit_id], ['class' => 'btn btn-danger btn-sm', 'data-confirm' => 'Are you sure you want to delete this item?', 'data-method' => 'post']) ?>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>