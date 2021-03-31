@extends('admin/dashboardAdmin')
@section('admin_content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Account</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{Route('DASHBOARD')}}">Home</a></li>
            <li class="breadcrumb-item active">Account</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
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
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-8">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Update Account</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ROUTE('manage_account.update', $getId->account_id)}}" method="POST" role="form" enctype="multipart/form-data">
              @csrf
              @method('put')
              <div class="card-body">
                <div class="form-group">
                  <label>Roles</label>
                  <select name="account_number" class="form-control">
                      <option value="1" {{ old('account_number', $getId->account_number) == 1 ? 'selected' : '' }} >Guest</option>
                      <option value="2" {{ old('account_number', $getId->account_number) == 2 ? 'selected' : '' }}>Coordinator</option>
                      <option value="3" {{ old('account_number', $getId->account_number) == 3 ? 'selected' : '' }}>Student</option>
                      <option value="4" {{ old('account_number', $getId->account_number) == 4 ? 'selected' : '' }}>Marketing Manager</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" name="account_email" value="{{ old('account_email', $getId->account_email) }}" class="form-control" id="exampleInputEmail1" placeholder="Enter new email">
                </div>
                @if ($errors->has('account_email'))
                  <p class="help is-danger" style="color: red">{{ $errors->first('account_email') }}</p>
                @endif
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name="account_password" value="{{ old('account_password', $getId->account_password) }}" class="form-control" id="exampleInputPassword1" placeholder="Enter new password">
                </div>
                @if ($errors->has('account_password'))
                  <p class="help is-danger" style="color: red">{{ $errors->first('account_password') }}</p>
                @endif
                <div class="form-group">
                  <label for="exampleInputFile">Image</label>
                  <div class="input-group">
                      <input type="file" name="account_image" class="custom-file-input" id="exampleInputFile">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                  </div>
                </div>
                @if ($errors->has('account_image'))
                  <p class="help is-danger" style="color: red">{{ $errors->first('account_image') }}</p>
                @endif
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
@endsection