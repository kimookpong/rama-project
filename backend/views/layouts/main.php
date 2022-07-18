<?php

/** @var \yii\web\View $this */
/** @var string $content */

use backend\assets\AppAsset;
use common\models\Role;
use yii\bootstrap4\Html;
use yii\helpers\Url;
use common\widgets\Alert;

AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
  <meta charset="<?= Yii::$app->charset ?>">
  <meta id="vp" name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no,viewport-fit=cover">
  <?php $this->registerCsrfMetaTags() ?>
  <title><?= Html::encode($this->title) ?></title>
  <link href="<?= Yii::getAlias('@web') ?>/img/logo.png" rel="shortcut icon">
  <?php $this->head() ?>
  <style>
    body {
      font-family: 'Sarabun', serif;
      font-size: 18px;
    }

    .card-body {
      padding: 5px;
    }
  </style>
  <script>
    window.onload = function() {
      if (screen.width < 480) {
        var mvp = document.getElementById('vp');
        mvp.setAttribute('content', 'user-scalable=no,width=480');
      }
    }
  </script>
</head>


<body class="hold-transition sidebar-mini layout-fixed" style="min-width:480px;">
  <?php $this->beginBody() ?>
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="<?= Yii::$app->params['backend'] ?>AdminLTE/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>


    <nav class="main-header navbar navbar-expand navbar-white navbar-light">

      <ul class=" navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index3.html" class="nav-link">Home</a>
        </li>
      </ul>

      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown user-menu">
          <a href="javascript:;" class="nav-link dropdown-toggle px-2" data-toggle="dropdown" aria-expanded="true">
            <i class="far fa-user"></i>
            <span class="d-none d-md-inline"><?= Yii::$app->user->identity->fullname ?></span>
          </a>
          <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;">
            <!-- User image -->
            <li class="user-header bg-primary">
              <img src="<?= Yii::$app->params['backend'] ?>AdminLTE/dist/img/AdminLTELogo.png" class="img-circle elevation-2" alt="User Image">

              <p>
                <?= Yii::$app->user->identity->fullname ?><small><?= Role::findOne(Yii::$app->user->identity->role)->role  ?></small>
              </p>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              <a href="#" class="btn btn-default btn-flat">โปรไฟล์</a>
              <?= Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline float-right']) ?>
              <?= Html::submitButton(
                'ออกจากระบบ',
                ['class' => 'btn btn-default btn-flat']
              ) ?>
              <?= Html::endForm() ?>
            </li>
          </ul>
        </li>
      </ul>
    </nav>

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index.php" class="brand-link">
        <img src="<?= Yii::$app->params['backend'] ?>img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Brain.Test</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">


        <!-- SidebarSearch Form -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="<?= Url::toRoute('site/index') ?>" class="nav-link <?= (Yii::$app->controller->id == 'site' ? 'active' : '') ?>">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
              </a>
            </li>

            <!--li class="nav-header">Shadowing-A</!--li-->
            <li class="nav-item">
              <a href="<?= Url::toRoute('register/index') ?>" class="nav-link <?= (Yii::$app->controller->id == 'register' ? 'active' : '') ?>">
                <i class="nav-icon fas fa-chart-bar"></i>
                <p>
                  Search & Summary
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?= Url::toRoute('fruit/index') ?>" class="nav-link <?= (Yii::$app->controller->id == 'fruit' ? 'active' : '') ?>">
                <i class="nav-icon fas fa-apple-alt"></i>
                <p>Fruit List</p>
              </a>
            </li>

            <?php if (Yii::$app->user->identity->role == 10) { ?>
              <li class="user-panel"></li>
              <li class="nav-item">
                <a href="<?= Url::toRoute('parameter/index') ?>" class="nav-link <?= (Yii::$app->controller->id == 'parameter' ? 'active' : '') ?>">
                  <i class="nav-icon fas fa-cog"></i>
                  <p>Setting</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= Url::toRoute('user/index') ?>" class="nav-link <?= (Yii::$app->controller->id == 'user' ? 'active' : '') ?>">
                  <i class="nav-icon fas fa-users"></i>
                  <p>User Management</p>
                </a>
              </li>
            <?php } ?>

          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header p-0">
        <?= Alert::widget() ?>
        <div class="container-fluid">
          <?= $content ?>
          <!-- /.row (main row) -->
        </div>
      </div>
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>&copy; 2022 Faculty of Medicine Ramathibadi Hospital, All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
      </div>
  </footer>





  <?php $this->endBody() ?>

  <script>
    $(function() {
      $('.select2').select2();
      $("#example1").DataTable({
        rowReorder: true,
        order: [
          [0, 'desc']
        ],
        "language": {
          "decimal": "",
          "emptyTable": "ไม่มีรายการข้อมูล",
          "info": "แสดงรายการที่ _START_ ถึง _END_ จาก _TOTAL_ รายการ",
          "infoEmpty": "ไม่มีรายการข้อมูล",
          "infoFiltered": "(กรองจากทั้งหมด _MAX_ รายการ)",
          "infoPostFix": "",
          "thousands": ",",
          "lengthMenu": "แสดง  _MENU_ รายการ",
          "loadingRecords": "กำลังโหลดข้อมูล...",
          "processing": "กำลังประมวลผล...",
          "search": "ค้นหา:",
          "zeroRecords": "ไม่พบรายการที่ค้นหา",
          "paginate": {
            "first": "หน้าแรก",
            "last": "หน้าสุดท้าย",
            "next": "ถัดไป",
            "previous": "ก่อนหน้า"
          },
          "aria": {
            "sortAscending": ": เรียงข้อมูลจากน้อยไปมาก",
            "sortDescending": ": เรียงข้อมูลจากมากไปน้อย"
          }
        }
      });

    })
  </script>
</body>

</html>
<?php $this->endPage();
