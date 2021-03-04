@extends('admin/dashboardAdmin')
@section('admin_content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Faculty</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Faculty</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-8">

          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Add New Faculty</h3>
               
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{url('addfaculity')}}" method="POST">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name Faculty</label>
                  <input type="text" name="namefaculty" class="form-control" id="namefaculty" placeholder="Enter Faculty" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Description</label>
                  <input type="text" name="description" class="form-control" id="description" placeholder="Description" required>
                </div>
                
                
              <!-- /.card-body -->

              
                <button type="submit" class="btn btn-success ">Add</button>
              
            </form>
          </div>
          <!-- /.card -->

        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
@endsection