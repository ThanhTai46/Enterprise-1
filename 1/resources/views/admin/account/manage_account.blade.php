@extends('adminlayout')
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
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>
                    <a href="#" ui-toggle-class="">
                        <i class="fa fa-check text-success text-active"></i>{{-- edit --}}
                    </a>
                    <a href="" onclick="return confirm('are you sure')" ui-toggle-class="" >
                        <i class="fa fa-times text-danger text"></i>
                      </a>
                  </td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 5.0
                  </td>
                  <td>Win 95+</td>
                  <td>5</td>
                  <td>
                    <a href="#" ui-toggle-class="">
                        <i class="fa fa-check text-success text-active"></i>{{-- edit --}}
                    </a>
                    <a href="" onclick="return confirm('are you sure')" ui-toggle-class="" >
                        <i class="fa fa-times text-danger text"></i>
                      </a>
                  </td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 5.5
                  </td>
                  <td>Win 95+</td>
                  <td>5.5</td>
                  <td>
                    <a href="#" ui-toggle-class="">
                        <i class="fa fa-check text-success text-active"></i>{{-- edit --}}
                    </a>
                    <a href="" onclick="return confirm('are you sure')" ui-toggle-class="" >
                        <i class="fa fa-times text-danger text"></i>
                      </a>
                  </td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 6
                  </td>
                  <td>Win 98+</td>
                  <td>6</td>
                  <td>
                    <a href="#" ui-toggle-class="">
                        <i class="fa fa-check text-success text-active"></i>{{-- edit --}}
                    </a>
                    <a href="" onclick="return confirm('are you sure')" ui-toggle-class="" >
                        <i class="fa fa-times text-danger text"></i>
                      </a>
                  </td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet Explorer 7</td>
                  <td>Win XP SP2+</td>
                  <td>7</td>
                  <td>
                    <a href="#" ui-toggle-class="">
                        <i class="fa fa-check text-success text-active"></i>{{-- edit --}}
                    </a>
                    <a href="" onclick="return confirm('are you sure')" ui-toggle-class="" >
                        <i class="fa fa-times text-danger text"></i>
                      </a>
                  </td>
                </tr>
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