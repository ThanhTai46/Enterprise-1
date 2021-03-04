@extends('admin/dashboardAdmin')
@section('admin_content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Account</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">DataTables</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

<center>
  <div class="col-sm-5">
    @if(session()->has('message'))
    <div class="alert alert-success">
      {!! session()->get('message') !!}
    </div>
    @elseif(session()->has('error'))
    <div class="alert alert-danger">
      {!! session()->get('error') !!}
    </div>
    @endif
 </div>
</center>
  
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
              <style>
                  #thong{
                    background-color: #007bff;
                  }
                  .card-title{
                      color: #fff;
                  }
              </style>
            <div class="card-header" id="thong">
              <h3 class="card-title">Account Management</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Email Address</th>
                  <th>Password</th>
                  <th>Image</th>
                  <th>Roles</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $datas)
                <tr>
                  <td>{{$datas->account_email}}</td>
                  <td>{{$datas->account_password}}</td>
                  <td>
                    {{-- <img src="public/upload/{{$datas->account_image}}" --}}
                    <img src="{{asset("upload/$datas->account_image")}}" width="100" height="100" alt="">
                  </td>
                  <td>
                      @if($datas->account_number == 1)
                          Guest
                      @elseif($datas->account_number == 2)
                          Coordinator
                      @elseif($datas->account_number == 3)
                          Student
                      @else 
                          Marketing Manager
                      @endif
                  </td>
                  <td>
                    <a href="{{ROUTE('manage_account.edit',$datas->account_id)}}" ui-toggle-class="">
                        <i class="fa fa-check text-success text-active"></i>{{-- edit --}}
                    </a>
                    <a href="{{URL('delete_account/'.$datas->account_id)}}" onclick="return confirm('are you sure')" ui-toggle-class="" >
                        <i class="fa fa-times text-danger text"></i>
                      </a>
                  </td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
@endsection