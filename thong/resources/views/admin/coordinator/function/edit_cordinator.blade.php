@extends('admin/dashboardAdmin')
@section('admin_content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Coordinator</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Coordinator</li>
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
              <h3 class="card-title">Edit Coordinator</h3>
               
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{url('management_coordinator/'.$coordinator->cordinator_id)}}" method="POST">
               @method('patch')
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Coordinator Name</label>
                  <input type="text" name="namecoordinator" class="form-control" id="namecoordinator" placeholder="Enter Coordinator Name" value = "{{$coordinator -> cordinator_name}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Email</label>
                  <input type="email" name="email" class="form-control" id="email" placeholder="Email"  value = "{{$coordinator -> cordinator_email}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Phone Number</label>
                  <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone number"  value = "{{$coordinator -> cordinator_phone}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Address</label>
                  <input type="text" name="address" class="form-control" id="address" placeholder="Address" value = "{{$coordinator -> cordinator_address}}">
                </div>
                <div class="form-group">
                  <label for="">Faculty</label>
                  <select class= "form-control" id = "faculty" name="faculty">
          
                    <option  selected value="{{$coordinator -> faculity_name}}">{{$coordinator -> faculity_name}}</option>
                    @foreach($faculity as $item)
                    <option value="{{$item -> faculity_name}}">{{$item -> faculity_name}}</option>
                    @endforeach
                   
                  </select>
                </div>
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-success ">Update Faculty</button>
              </div>
            </form>
          
          <!-- /.card -->

        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
@endsection