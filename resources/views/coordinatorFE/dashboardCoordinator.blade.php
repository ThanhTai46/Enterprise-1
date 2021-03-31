@extends('parentlayout')
<aside class="main-sidebar sidebar-dark-primary elevation-4">
   <a href="index3.html" class="brand-link">
    <img src="{{asset('AdminTemplate/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">Coordinator</span>
  </a>
    <!-- Sidebar -->
    <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('AdminTemplate/dist/img/avatar5.png')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Coordinator</a>
      </div>
    </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Dashboard
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{Route('VIEW_CONTRIBUTION')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>View Contribution</p>
                    </a>
                </li>
                <li class="nav-item">
                  <a href="{{Route('REVIEW_POST')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Review Post</p>
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
@section('coordinator_content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Welcome Coordinator!</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{Route('DASHBOARD')}}">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
  {{-- Welcome Coordinator! --}}
@endsection