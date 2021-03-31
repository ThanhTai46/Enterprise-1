@extends('parentlayout')
<aside class="main-sidebar sidebar-dark-primary elevation-4">
   <a href="index3.html" class="brand-link">
    <img src="{{asset('AdminTemplate/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">Student</span>
  </a>
    <!-- Sidebar -->
    <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('AdminTemplate/dist/img/user1-128x128.jpg')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Student</a>
      </div>
    </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Dashboard
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <!--  -->
              <li class="nav-item">
                <a href="{{route('SHOW_UPLOAD')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>File Management</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('VIEW_SEMESTER')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Semester</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('GRADE')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Grade</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{Route('ACCOUNT')}}" class="nav-link active">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  @section('student_content')
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Welcome Student!</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <section class="content">
    <!-- Default box -->
    <div class="card card-solid">
      <div class="card-body pb-0">
        <div class="row d-flex align-items-stretch">
          @foreach ($getDataStudent as $getDatas)
          <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
            <div class="card bg-light">
              <div class="card-header text-muted border-bottom-0">
                Contribution's Student
              </div>
              <div class="card-body pt-0">
                <div class="row">
                  <div class="col-7">
                    <input type="hidden" id="getId" value="{{$getDatas->student_id}}">
                    <input type="hidden" id="getURL" value="{{url('executeComment/'.$getDatas->student_id)}}">
                    <h2 class="lead"><b>{{$getDatas->student_uploadfile}}</b></h2>
                    <p class="text-muted text-sm"><b>Description: </b>{{$getDatas->student_description}}</p>
                    <p class="text-muted text-sm"><b>Date Upload: </b>{{$getDatas->created_at}}</p>
                    <p class="text-muted text-sm"><b>Faculty: </b>{{$getDatas->faculity_name}}</p>
                  </div>
                  <div class="col-5 text-center">
                    <img src="{{asset("imageStudent/$getDatas->student_uploadimage")}}" alt="" class="img-circle img-fluid">
                  </div>
                </div>
              </div>
              {{-- <div class="card-footer">
                <div class="text-right">
                 
                  <a href="uploadfile/{{$getDatas->student_uploadfile}}" class="btn btn-info">
                    <i class="fas fa-eye"></i> Dowload To View
                  </a>
                </div>
              </div> --}}
            </div>
          </div>
          @endforeach
        </div>
      </div>
      <!-- /.card-body -->  
    </div>
    <!-- /.card -->
  </section>
  @endsection