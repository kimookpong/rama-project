<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [

        'AdminLTE/plugins/fontawesome-free/css/all.min.css',
        'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback',
        'https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css',
        'AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css',
        'AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css',
        'AdminLTE/plugins/jqvmap/jqvmap.min.css',
        'AdminLTE/plugins/select2/css/select2.min.css',
        'AdminLTE/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css',
        'AdminLTE/dist/css/adminlte.min.css',
        'AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css',
        'AdminLTE/plugins/daterangepicker/daterangepicker.css',
        'AdminLTE/plugins/summernote/summernote-bs4.min.css',
        'AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css',
        'AdminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css',
        'AdminLTE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css',
        'https://fonts.googleapis.com/css2?family=Pridi&family=Sarabun:wght@500&display=swap',
        'css/site.css',

    ];
    public $js = [
        /*-- jQuery --*/
        // 'AdminLTE/plugins/jquery/jquery.min.js',
        /*-- jQuery UI 1.11.4 --*/
        'AdminLTE/plugins/jquery-ui/jquery-ui.min.js',
        /*-- Bootstrap 4 --*/
        'AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js',
        /*-- ChartJS --*/
        'AdminLTE/plugins/chart.js/Chart.min.js',
        /*-- Sparkline --*/
        //'AdminLTE/plugins/sparklines/sparkline.js',
        /*-- JQVMap --*/
        /*-- Select2 --*/
        'AdminLTE/plugins/select2/js/select2.full.min.js',
        'AdminLTE/plugins/datatables/jquery.dataTables.min.js',
        'AdminLTE/plugins/datatables/jquery.dataTables.min.js',
        'AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js',
        'AdminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js',
        'AdminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js',
        'AdminLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js',
        'AdminLTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js',
        'AdminLTE/plugins/jszip/jszip.min.js',
        'AdminLTE/plugins/pdfmake/pdfmake.min.js',
        'AdminLTE/plugins/pdfmake/vfs_fonts.js',
        'AdminLTE/plugins/datatables-buttons/js/buttons.html5.min.js',
        'AdminLTE/plugins/datatables-buttons/js/buttons.print.min.js',
        'AdminLTE/plugins/datatables-buttons/js/buttons.colVis.min.js',

        //'AdminLTE/plugins/jqvmap/jquery.vmap.min.js',
        //'AdminLTE/plugins/jqvmap/maps/jquery.vmap.usa.js',
        /*-- jQuery Knob Chart --*/
        'AdminLTE/plugins/jquery-knob/jquery.knob.min.js',
        /*-- daterangepicker --*/
        'AdminLTE/plugins/moment/moment.min.js',
        'AdminLTE/plugins/daterangepicker/daterangepicker.js',
        /*-- Tempusdominus Bootstrap 4 --*/
        'AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js',
        /*-- Summernote --*/
        'AdminLTE/plugins/summernote/summernote-bs4.min.js',
        /*-- overlayScrollbars --*/
        'AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js',
        /*-- AdminLTE App --*/
        'AdminLTE/dist/js/adminlte.js',
        /*-- AdminLTE for demo purposes --*/
        /*-- AdminLTE dashboard demo (This is only for demo purposes) --*/
        'AdminLTE/dist/js/pages/dashboard.js',
        'AdminLTE/plugins/select2/js/select2.full.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
