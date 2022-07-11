<?php
/** @var \yii\web\View $this */
/** @var string $content */

?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ModX2 | Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=Yii::$app->params['backend']?>AdminLTE/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?=Yii::$app->params['backend']?>AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?=Yii::$app->params['backend']?>AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?=Yii::$app->params['backend']?>AdminLTE/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=Yii::$app->params['backend']?>AdminLTE/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?=Yii::$app->params['backend']?>AdminLTE/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

  <link rel="stylesheet" href="<?=Yii::$app->params['backend']?>AdminLTE/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?=Yii::$app->params['backend']?>AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?=Yii::$app->params['backend']?>AdminLTE/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?=Yii::$app->params['backend']?>AdminLTE/plugins/summernote/summernote-bs4.min.css">

  <link rel="stylesheet" href="<?=Yii::$app->params['backend']?>AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?=Yii::$app->params['backend']?>AdminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?=Yii::$app->params['backend']?>AdminLTE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

</head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pridi&family=Sarabun:wght@500&display=swap" rel="stylesheet">
<style>
      body {
        font-family: 'Sarabun', serif;
        font-size: 18px;
      }
    </style>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?=Yii::$app->params['backend']?>AdminLTE/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
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
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
       
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
         
        <li><form class="form-inline" action="/rama-project/backend/web/index.php?r=site%2Flogout" method="post">
<input type="hidden" name="_csrf-backend" value="scVrEeQpf8m-pmp4VJbuhi_JVbyOPHO5HZVBwUucJ8fbnQBHolw2henlHjE-_Ny-VY4d3cB_PNZ2rHGrBflXqg=="><button type="submit" class="btn btn-link logout">Logout (admin)</button></form></li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">ModX</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?=Yii::$app->params['backend']?>AdminLTE/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Config
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="index.php?r=user" class="nav-link active">
                  <p>Users</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?r=Docters" class="nav-link active">
                  <p>Docters</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?r=wordregister" class="nav-link">
                  <p>word</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?r=fruit" class="nav-link">
                  <p>fruit</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">Shadowing-A</li>
          <li class="nav-item">
            <a href="index.php?r=register" class="nav-link">
              <p>
              Search & Summary
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/gallery.html" class="nav-link">
              <p>
              Data Entering
              </p>
            </a>
          </li>
          <li class="nav-header">Shadowing-B</li>
          <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <p>
              Search & Summary
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/gallery.html" class="nav-link">
              <p>
              Data Entering
              </p>
            </a>
          </li>
          <li class="nav-header">Researcher</li>
          <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <p>
              Search & Summary
              </p>
            </a>
          </li>
            <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <p>
              Advanced Search
              </p>
            </a>
          </li>
          <li class="nav-header">Staff</li>
          <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <p>
              Search & Summary
              </p>
            </a>
          </li>
            <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <p>
              Advanced Search
              </p>
            </a>
          </li>
          <li class="nav-header">Tuning</li>
          <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <p>
              Disease & Control
              </p>
            </a>
          </li>
            <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <p>
              Online
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

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?=Yii::$app->params['backend']?>AdminLTE/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?=Yii::$app->params['backend']?>AdminLTE/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?=Yii::$app->params['backend']?>AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?=Yii::$app->params['backend']?>AdminLTE/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?=Yii::$app->params['backend']?>AdminLTE/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
  <!-- Select2 -->
  <script src="<?=Yii::$app->params['backend']?>AdminLTE/plugins/select2/js/select2.full.min.js"></script>
  <script src="<?=Yii::$app->params['backend']?>AdminLTE/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?=Yii::$app->params['backend']?>AdminLTE/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=Yii::$app->params['backend']?>AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?=Yii::$app->params['backend']?>AdminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?=Yii::$app->params['backend']?>AdminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?=Yii::$app->params['backend']?>AdminLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?=Yii::$app->params['backend']?>AdminLTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?=Yii::$app->params['backend']?>AdminLTE/plugins/jszip/jszip.min.js"></script>
<script src="<?=Yii::$app->params['backend']?>AdminLTE/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?=Yii::$app->params['backend']?>AdminLTE/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?=Yii::$app->params['backend']?>AdminLTE/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?=Yii::$app->params['backend']?>AdminLTE/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?=Yii::$app->params['backend']?>AdminLTE/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script src="<?=Yii::$app->params['backend']?>AdminLTE/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?=Yii::$app->params['backend']?>AdminLTE/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?=Yii::$app->params['backend']?>AdminLTE/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?=Yii::$app->params['backend']?>AdminLTE/plugins/moment/moment.min.js"></script>
<script src="<?=Yii::$app->params['backend']?>AdminLTE/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?=Yii::$app->params['backend']?>AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?=Yii::$app->params['backend']?>AdminLTE/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?=Yii::$app->params['backend']?>AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=Yii::$app->params['backend']?>AdminLTE/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?=Yii::$app->params['backend']?>AdminLTE/dist/js/pages/dashboard.js"></script>
<script src="<?=Yii::$app->params['backend']?>AdminLTE/plugins/select2/js/select2.full.min.js"></script>

</body>
</html>


<script>
  $(function () {
    $('.select2').select2();

        $("#example1").DataTable({
      dom: '<"top"if>rt<"bottom"lp><"clear">',
        "language": {   
            "decimal":        "",
            "emptyTable":     "ไม่มีรายการข้อมูล",
            "info":           "แสดงรายการที่ _START_ ถึง _END_ จาก _TOTAL_ รายการ",
            "infoEmpty":      "ไม่มีรายการข้อมูล",
            "infoFiltered":   "(กรองจากทั้งหมด _MAX_ รายการ)",
            "infoPostFix":    "",
            "thousands":      ",",
            "lengthMenu":     "แสดง  _MENU_ รายการ",
            "loadingRecords": "กำลังโหลดข้อมูล...",
            "processing":     "กำลังประมวลผล...",
            "search":         "ค้นหา:",
            "zeroRecords":    "ไม่พบรายการที่ค้นหา",
            "paginate": {
                "first":      "หน้าแรก",
                "last":       "หน้าสุดท้าย",
                "next":       "ถัดไป",
                "previous":   "ก่อนหน้า"
            },
            "aria": {
                "sortAscending":  ": เรียงข้อมูลจากน้อยไปมาก",
                "sortDescending": ": เรียงข้อมูลจากมากไปน้อย"
            }               
        }       
    });

  })
</script>



       
  
