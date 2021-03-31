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
            <li class="breadcrumb-item"><a href="{{Route('DASHBOARD')}}">Home</a></li>
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
                  <label for="">Email</label>
                  <select class="form-control" name="email">
                    <option>Select Coordinator For Faculity</option>
                    @foreach($data as $datas)
                      @if($datas->account_number == 2)
                        <option selected value="{{$datas->account_email}}">{{$datas->account_email}}</option>
                      @endif
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Coordinator Name</label>
                  <input type="text" name="namecoordinator" class="form-control" placeholder="Enter Coordinator Name" value="{{$coordinator->cordinator_name}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Phone Number</label>
                  <input type="text" name="phone" class="form-control" placeholder="Phone number"  value="{{$coordinator->cordinator_phone}}">
                </div>
                <div class="form-group">
                  <label for="">Faculty</label>
                  <select class="form-control" name="faculity_name">
                    @foreach($faculity as $item)
                    <option value="{{$item->faculity_name}}">{{$item->faculity_name}}</option>
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