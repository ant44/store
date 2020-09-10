<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>پنل مارکت | @yield('pageTitle')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('AdminPanel/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="{{ url('AdminPanel/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ url('AdminPanel/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ url('AdminPanel/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('AdminPanel/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ url('AdminPanel/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ url('AdminPanel/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ url('AdminPanel/plugins/summernote/summernote-bs4.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

@yield('headerStyles')

<!-- IRANSans Font -->
    <link rel="stylesheet" href="{{ url('AdminPanel/css/sans.css') }}">
    <!-- RTL Styles -->
    <link rel="stylesheet" href="{{ url('AdminPanel/css/rtl.css') }}">

    @yield('headerScript')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
@include('AdminPanel.navbar.navbar')
<!-- /.navbar -->

    <!-- Main Sidebar Container -->
@include('AdminPanel.sidebar.sidebar')
<!-- /.Main Sidebar Container -->


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('mainContent')
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <strong>کپی رایت &copy; 2020-1399 <a href="http://pezhvakweb.com" target="_blank">پژواک وب</a>.</strong>
        تمامی حقوق سایت برای فروشگاه حامد محفوظ می باشد.
    </footer>



</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ url('AdminPanel/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ url('AdminPanel/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ url('AdminPanel/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ url('AdminPanel/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ url('AdminPanel/plugins/sparklines/sparkline.js') }}"></script>
{{--<!-- JQVMap -->--}}
{{--<script src="{{ url('AdminPanel/plugins/jqvmap/jquery.vmap.min.js') }}"></script>--}}
{{--<script src="{{ url('AdminPanel/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>--}}
<!-- jQuery Knob Chart -->
<script src="{{ url('AdminPanel/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ url('AdminPanel/plugins/moment/moment.min.js') }}"></script>
<script src="{{ url('AdminPanel/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ url('AdminPanel/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ url('AdminPanel/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ url('AdminPanel/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
{{--<!-- Layout JS -->--}}
{{--<script src="{{ url('AdminPanel/js/Layout.js') }}"></script>--}}
{{--<!-- TreeView js -->--}}
{{--<script src="{{ url('AdminPanel/js/Treeview.js') }}"></script>--}}
<script src="{{ url('AdminPanel/js/adminlte.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ url('AdminPanel/js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url('AdminPanel/js/demo.js') }}"></script>
@yield('footerScripts')

</body>
</html>

