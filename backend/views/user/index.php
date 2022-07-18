<?php

use common\models\Role;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-6">
                <h2><?= $this->title ?></h2>
            </div>
            <div class="col-6">
                <?= Html::a('Create User', ['create'], ['class' => 'btn btn-success float-right']) ?>
            </div>
        </div>
    </div>
    <div class="card-body">

        <table id="example1" class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>สิทธิ์การเข้าใช้งาน</th>
                    <th>สถานะ</th>
                    <th width="60px">#</th>

                </tr>
            </thead>
            <tbody>
                <?php

                foreach ($model as $data) { ?>
                    <tr>
                        <td>
                            <div class="product-info">
                                <div class="product-title">
                                    <?= $data->username ?>
                                </div>
                                <span class="product-description text-muted">
                                    <?= $data->fullname ?>
                                </span>
                            </div>
                        </td>
                        <td><?= Role::findOne($data->role)->role ?></td>
                        <td><?= ($data->status == 10) ? '<span class="badge badge-success">ใช้งาน</span>' : '<span class="badge badge-danger">ไม่ใช้งาน</span>' ?></td>
                        <td class="text-center">
                            <div class="btn-group btn-group-sm">
                                <?= Html::a('<i class="fas fa-pencil-alt"></i>', ['update', 'id' => $data->id], ['class' => 'btn btn-info btn-sm']) ?>
                                <?= Html::a('<i class="fas fa-trash"></i>', ['delete', 'id' => $data->id], ['class' => 'btn btn-danger btn-sm', 'data-confirm' => 'Are you sure you want to delete this item?', 'data-method' => 'post']) ?>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>