<!DOCTYPE html>
<html>
  <head>
    {{-- <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> --}}
    <title>Dashboard</title>
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
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
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
          <a href="{{Route('DASHBOARD')}}" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="{{Route('DASHBOARD')}}" class="nav-link">Contact</a>
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
      @yield('coordinator_content')
      @yield('manager_content')
      <!-- Main content -->
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    {{-- <footer class="main-footer">
      <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">EWSD_Group_03</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.0.5
      </div>
    </footer> --}}
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->
  <script src="{{asset('AdminTemplate/plugins/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('AdminTemplate/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
  <script>$.widget.bridge('uibutton', $.ui.button)</script>
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
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
    $(document).ready(function(){
      var aa = $('.templateComment').hide();
      $(".btnCmt").click(function(){
        var getValue = $(this).closest(".main1").find("#file1").text(); //get student_uploadfile
        // console.log(getValue);
        var ganValue = $(this).closest(".main3").find(".input1").text(getValue);
        var getValue2 = $(this).closest(".main1").find("#getId").val(); //get student_id
        // console.log(getValue2);
        var ganValue2 =  $(this).closest(".main3").find(".input2").val(getValue2);
        var getValue3 = $(this).closest(".main1").find("#getURL").val(); //get url action
        // console.log(getValue3);
        var ganValue3 =  $(this).closest(".main3").find(".templateComment form").attr('action',getValue3);
        // console.log(ganValue3);
        if($('.templateComment').is(":hidden")){
          $(".templateComment").show();
        }
      });
      $(".btnClose").click(function(){
        $('.templateComment').hide();
        $(this).closest(".templateComment").find("textarea").val('').change(); //dua textarea comment ve rong
        $(this).closest(".templateComment").find("#grade").val('0');  //dua grade ve ban dau
      });
      $(".btnComment").click(function(){
        var student_uploadfile = $(this).closest(".templateComment").find(".input1").text();
        // console.log(student_uploadfile);
        var student_id = $(this).closest(".templateComment").find(".input2").val();
        // console.log(student_id);
        var url = $(this).closest(".main3").find("form").attr('action');
        // console.log(url);
        var comment = $(this).closest(".templateComment").find("textarea").val();
        // console.log(comment);
        var _token = $('input[name="_token"]').val();
        var grade = $(this).closest(".templateComment").find("#grade option:selected").val()
        // console.log(grade);
          if(comment != '' && grade != '0'){
            $.ajax({
            url: url,
            method: 'POST',
            data:{
                student_uploadfile,
                student_id,
                _token,
                comment,
                grade,
                },
                success:function(data){
                  swal({
                    title: "Thanks for your comment!",
                    icon: "success",
                  });
                    $("textarea").val('').change(); //dua textarea comment ve rong
                    $("#grade").val('0');
                    $('.templateComment').hide();
                }
            });
          }else{
            swal({
                    title: "Please comment and set grade for assignment!",
                    icon: "warning",
                  });
            // swal("Please write comment and set grade for assignment");
          }
      });
    })
  </script>
  </body>
</html>
