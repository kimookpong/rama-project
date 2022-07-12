<?php

/** @var \yii\web\View $this */
/** @var string $content */

use backend\assets\AppAsset;
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
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php $this->registerCsrfMetaTags() ?>
  <title><?= Html::encode($this->title) ?></title>
  <?php $this->head() ?>
  <style>
    body {
      font-family: 'Sarabun', serif;
      font-size: 18px;
    }
  </style>
</head>


<body class="hold-transition sidebar-mini layout-fixed">
  <?php $this->beginBody() ?>
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="<?= Yii::$app->params['backend'] ?>AdminLTE/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

      </ul>


      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->

        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">

          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

        <li>
          <form class="form-inline" action="admin/index.php?r=site/logout" method="post">
            <input type="hidden" name="<?= Yii::$app->request->csrfParam; ?>" value="<?= Yii::$app->request->csrfToken; ?>" />
            <button type="submit" class="btn btn-link logout">Logout (admin)</button>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index.php" class="brand-link">
        <img src="<?= Yii::$app->params['backend'] ?>img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">ModX</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="info">
            <a href="#" class="d-block">Alexander Pierce</a>
          </div>
        </div>

        <!-- SidebarSearch Form -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="<?= Url::toRoute('site/index') ?>" class="nav-link <?= (Yii::$app->controller->id == 'site' ? 'active' : '') ?>">
                <i class="nav-icon fas fa-cog"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= Url::toRoute('parameter/index') ?>" class="nav-link <?= (Yii::$app->controller->id == 'parameter' ? 'active' : '') ?>">
                <i class="nav-icon fas fa-cog"></i>
                <p>Parameter</p>
              </a>
            </li>
            <li class="nav-header">Shadowing-A</li>
            <li class="nav-item">
              <a href="<?= Url::toRoute('register/index') ?>" class="nav-link <?= (Yii::$app->controller->id == 'register' ? 'active' : '') ?>">
                <p>
                  Search & Summary
                </p>
              </a>
            </li>

          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
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
    <strong>Copyright &copy; 2014-2021</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
    </div>
  </footer>





  <?php $this->endBody() ?>

  <script>
    $(function() {
      $('.select2').select2();
      $("#example1").DataTable({
        dom: '<"top"if>rt<"bottom"lp><"clear">',
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
