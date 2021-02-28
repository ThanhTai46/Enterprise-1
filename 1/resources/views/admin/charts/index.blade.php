@extends('adminlayout')
@section('admin_content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Statistic Manage </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Charts</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  @if(session()->has('message'))
        <div class="alert alert-success">
          {!! session()->get('message') !!}
        </div>
        @elseif(session()->has('error'))
        <div class="alert alert-danger">
          {!! session()->get('error') !!}
        </div>
  @endif
  
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
       

      <div class="row">
        
        <h4 class="mb-4 mt-3 m-lg-2">Thống kê đóng góp của học sinh</h4>
        <form autocomplete="off">
          @csrf
          <div class="card-body">
                <!-- Date -->
                <div class="form-group">
                  <label>Từ ngày:</label>
                    <div class="input-group date" id="datepicker" data-target-input="nearest">
                        <input type="text" id="datepicker" class="form-control datetimepicker-input" data-target="#datepicker">
                        <div class="input-group-append" data-target="#datepicker" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                  <label>Đến ngày:</label>
                  <div class="input-group date" id="datepicker2" data-target-input="nearest">
                      <input type="text" id="datepicker2" class="form-control datetimepicker-input" data-target="#datepicker2">
                      <div class="input-group-append" data-target="#datepicker2" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                      </div>
                  </div> 
                  
                  
                  <input type="button" id="btn-dashboard-filter" class="btn btn-primary " value="Lọc kết quả" onclick = onClick()>
                </div>
            </div>
            <div class="form-group">
              <label> Lọc theo:</label>
              <select class="dashboard-filter form-control">
                <option>--Chọn--</option>
                <option value="7days">7 ngày qua</option>
                <option value="1monthago">1 tháng trước</option>
                <option value="thismonth">tháng này</option>
                <option value="1yearago">1 năm qua</option>
              </select>
            </div> 
              
                
        </div>
            

              

                

         
        </form>
            <div class="col-lg-12">
                <div class="card">
                  <div class="card-header border-0">
                    <div class="d-flex justify-content-between">
                      <h3 class="card-title">Online Store Visitors</h3>
                      <a href="javascript:void(0);">View Report</a>
                    </div>
                  </div>
                    <div class="position-relative mb-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                      <canvas id="visitors-chart" height="200" width="385" class="chartjs-render-monitor" style="display: block; width: 385px; height: 200px;"></canvas>
                    </div>
                    <div class="d-flex flex-row justify-content-end">
                      <span class="mr-2">
                        <i class="fas fa-square text-primary"></i> This Week
                      </span>
    
                      <span>
                        <i class="fas fa-square text-gray"></i> Last Week
                      </span>
                    </div>
                  </div>
                </div>
                <!-- /.card -->
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header border-0">
                      <div class="d-flex justify-content-between">
                        <h3 class="card-title">Sales</h3>
                        <a href="javascript:void(0);">View Report</a>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="d-flex">
                        <p class="d-flex flex-column">
                          <span class="text-bold text-lg">$18,230.00</span>
                          <span>Sales Over Time</span>
                        </p>
                        <p class="ml-auto d-flex flex-column text-right">
                          <span class="text-success">
                            <i class="fas fa-arrow-up"></i> 33.1%
                          </span>
                          <span class="text-muted">Since last month</span>
                        </p>
                      </div>
                      <!-- /.d-flex -->
                      <div class="position-relative mb-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                        <canvas id="sales-chart" height="200" style="display: block; width: 385px; height: 200px;" width="385" class="chartjs-render-monitor"></canvas>
                      </div>
      
                      <div class="d-flex flex-row justify-content-end">
                        <span class="mr-2">
                          <i class="fas fa-square text-primary"></i> This year
                        </span>
      
                        <span>
                          <i class="fas fa-square text-gray"></i> Last year
                        </span>
                      </div>
                    </div>
                </div>
              </div>    
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    
    <!-- /.container-fluid -->
  </section>

  <script type="text/javascript">
   
   function onClick()
   {
    //  $('#btn-dashboard-filter').click(function(){
    //   var _token = $('input[name="_token"]').val();
    //   var from_date = $('#datepicker').val();
    //   var to_date = $('#datepicker2').val();
    //   alert(from_date);
      
      // $.ajax({
      //   url: '{{url('/filter-by-date')}}',
      //   method: 'POST',
      //   dataType: 'json',
      //   data: {from_date:from_date, to_date:to_date, _token:_token},
      //   success:function(data)
      //   {
      //     chart.setData(data);
      //   }
      // });

    //     var btn = document.querySelector('#btn-dashboard-filter');

    //     var _token = document.querySelector('input[name="_token"]').value;

    //     var from_date = document.getElementById('datepicker').value;
    //     var to_date = document.querySelector('#datepicker2').value;

    //   console.log(from_date)
    //      alert(from_date);

    //  };
    $(function() {
    $( "#datepicker" ).datepicker();
    
    //selecting the button and adding a click event
    $("#alert").click(function() {
      //alerting the value inside the textbox
      var date = $("#datepicker").datepicker("getDate");
      alert($.datepicker.formatDate("dd-mm-yy", date));
    });
  });
     
  </script>
   
  
   

@endsection