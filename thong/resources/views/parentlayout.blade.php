<!DOCTYPE html>
<html>
<head>
  {{-- <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> --}}
  <title>AdminLTE 3 | Dashboard</title>
  {{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}
    <link rel="stylesheet" href="{{asset('AdminTemplate/plugins/fontawesome-free/css/all.min.css')}}">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="{{asset('AdminTemplate/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <link rel="stylesheet" href="{{asset('AdminTemplate/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('AdminTemplate/plugins/jqvmap/jqvmap.min.css')}}">
  <link rel="stylesheet" href="{{asset('AdminTemplate/dist/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{asset('AdminTemplate/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <link rel="stylesheet" href="{{asset('AdminTemplate/plugins/daterangepicker/daterangepicker.css')}}">
  <link rel="stylesheet" href="{{asset('AdminTemplate/plugins/summernote/summernote-bs4.css')}}">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <div class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- /.content-header -->

    @yield('admin_content')
    @yield('student_content')
    <!-- Main content -->
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<script src="{{asset('AdminTemplate/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('AdminTemplate/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="{{asset('AdminTemplate/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('AdminTemplate/plugins/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('AdminTemplate/plugins/sparklines/sparkline.js')}}"></script>
<script src="{{asset('AdminTemplate/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('AdminTemplate/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<script src="{{asset('AdminTemplate/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<script src="{{asset('AdminTemplate/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('AdminTemplate/plugins/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('AdminTemplate/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<script src="{{asset('AdminTemplate/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script src="{{asset('AdminTemplate/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<script src="{{asset('AdminTemplate/dist/js/adminlte.js')}}"></script>
<script src="{{asset('AdminTemplate/dist/js/pages/dashboard.js')}}"></script>
<script src="{{asset('AdminTemplate/dist/js/demo.js')}}"></script>
</body>
</html>
