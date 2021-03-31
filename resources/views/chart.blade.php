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
    <!-- Content Wrapper. Contains page content -->
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
    // $( function() {
    //   $( "#datepicker" ).datepicker(
    //     {
    //       dateFormat:"yy-mm-dd"
    //     });
    // });
    // $( function() {
    //   $( "#datepicker2" ).datepicker(
    //     {
    //       dateFormat:"yy-mm-dd"
    //     });
    // });
    // $('#btn-dashboard-filter').click(function(){
    //   var _token = $('input[name="_token"]').val();
    //   var from_date = $('#datepicker').val();
    //   var to_date = $('#datepicker2').val();
    //   $.ajax({
    //     url: "{{url('/filter-by-date')}}",
    //     method: "POST",
    //     dateType:"JSON",
    //     data:{from_date:from_date,to_date:to_date,_token:_token},
    //     success:function(data)
    //     {
    //       chart.setData(data);
    //     }
    //   });
    // });
    $(function() {
      new Morris.Bar({
      // ID of the element in which to draw the chart.
      element: 'Chart_bar',
      // Chart data records -- each entry in this array corresponds to a point on
      // the chart.
      // data: [
      //  {label:"Total Contribution", value:<?php echo $contribution ?>, color:colorDanger},
      //  {label:"Total Semester", value:<?php echo $semester ?>, color:color2},
      //  {label:"Total Faculty", value:<?php echo $faculty ?>,color:color3},
      //  {label:"Total Coordinator", value:<?php echo $coordinator ?>,color:color4}
      //  ]
      data: [
      { semester: 'Information Technology', value: <?php echo $contributionIT ?> },
      { semester: 'Business', value: <?php echo $contributionBS ?> },
      { semester: 'Vovinam', value: <?php echo $contributionVV ?> },
      { semester: 'Design', value: <?php echo $contributionDesign ?> },
      { semester: 'Marketing', value: <?php echo $contributionMarketing ?> }
      ],
      // The name of the data record attribute that contains x-values.
      xkey: 'semester',
      // A list of names of data record attributes that contain y-values.
      ykeys: ['value'],
      // Labels for the ykeys -- will be displayed when you hover over the
      // chart.
      labels: ['Value']
    });
    });
    $(function() {
      new Morris.Line({
      // ID of the element in which to draw the chart.
      element: 'Chart_Line',
      // Chart data records -- each entry in this array corresponds to a point on
      // the chart.
      data: [
      { year: '2018', value: 3 },
      { year: '2019', value: 7 },
      { year: '2020', value: 5 },
      { year: '2021', value: <?php echo $contribution ?> }
      ],
      // The name of the data record attribute that contains x-values.
      xkey: 'year', 
      // A list of names of data record attributes that contain y-values.
      ykeys: ['value'], 
      // Labels for the ykeys -- will be displayed when you hover over the
      // chart.
      labels: ['Contributions']
    });
    });
    $(function() {
      Morris.Bar({
        element: 'chart-area',
        data: [
        { y: '2018', a: 3, b: 5 },
        { y: '2019', a: 6,  b: 8 },
        { y: '2020', a: 5,  b: 4 },
        { y: '2021', a: <?php echo $contribution ?>,  b:<?php echo $faculty ?>  }
        ],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Contribution', 'Faculty']
      });
    });
    $(function() {
      var colorDanger = "#FD4835";
      var color2 = "#EA8F24";
      var color3= "#1D8AC5";
      var color4= "#11ACD4";
      Morris.Donut({
        element: 'donut-example',
        resize: true,
        colors: [
        '#E0F7FA',
        '#FD4835',
        '#EA8F24',
        '#D300FF',
        "#051B27",
        '#B2EBF2',
        '#FFA500',
        '#4DD0E1',
        '#26C6DA',
        '#B7C0D1',
        '#00BCD4',
        '#00ACC1',
        '#0097A7',
        '#00838F',
        '#006064'
        ],
        // labelColor:"#cccccc", // text color
        backgroundColor: '#ffffff', // border color
        data: [
        {label:"Total Contribution", value:<?php echo $contribution ?>, color:colorDanger},
        {label:"Total Semester", value:<?php echo $semester ?>, color:color2},
        {label:"Total Faculty", value:<?php echo $faculty ?>,color:color3},
        {label:"Total Coordinator", value:<?php echo $coordinator ?>,color:color4}
        ]
      });
    });
  </script>
  <script>
  </script>
  </body>
</html>
