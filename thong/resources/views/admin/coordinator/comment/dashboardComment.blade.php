@extends('parentlayout')

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
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
          <img src="{{asset('AdminTemplate/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Coordinator</a>
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
                <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>View Contribution</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{Route('COMMENT')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Comment Contribution</p>
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
    <div class="container-fluid ">

      <div class="row">
        <!-- left column -->
        <div class="col-md-8 ">

          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Add Comment</h3>

            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="addcomment" method="POST">
              @csrf
              <div class="card-body">
                <div class="form-group">
                   
                  <select class="form-control" id="exampleSelectBorder" name="fileupload">
                    <option  selected >Selected Student's Contribution</option>
                    @foreach ($comment as $item) 
                   
                    <option>{{$item->student_uploadfile}}</option>
                    @endforeach

                  </select>
                </div>
                <div class="form-group">
                  <label>Comment</label>
                  <textarea name="comment" class="form-control" rows="10" placeholder="Input Your Comment "></textarea>
                </div>
               



                <!-- /.card-body -->

                
                <button type="submit" class="btn btn-success ">Add Comment</button>
                
              </form>
            </div>

          </div>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </div>
  
@endsection