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
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Account</li>
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
              <h3 class="card-title">Add New Account</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{URL('addaccount')}}" method="POST" role="form" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label>Roles</label>
                  <select name="account_number" class="form-control">
                      <option value="1">Guest</option>
                      <option value="2">Coordinator</option>
                      <option value="3">Student</option>
                      <option value="4">Marketing Manager</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" name="account_email" value="{{ old('account_email') }}" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                @if ($errors->has('account_email'))
                  <p class="help is-danger" style="color: red">{{ $errors->first('account_email') }}</p>
                @endif
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="text" name="account_password" value="{{ old('account_password') }}" class="form-control" id="exampleInputPassword1" placeholder="Password">
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
                <div class="form-check">
                  <input type="checkbox" value="1" name="student_check" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Add</button>
              </div>
            </form>
          </div>
          <!-- /.card -->

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        {{-- <div class="col-md-4">
          <!-- general form elements disabled -->
          <div class="card card-warning">
            <div class="card-header">
              <h3 class="card-title">General Elements</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                  <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Text</label>
                      <input type="text" class="form-control" placeholder="Enter ...">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Text Disabled</label>
                      <input type="text" class="form-control" placeholder="Enter ..." disabled>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <!-- textarea -->
                    <div class="form-group">
                      <label>Textarea</label>
                      <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Textarea Disabled</label>
                      <textarea class="form-control" rows="3" placeholder="Enter ..." disabled></textarea>
                    </div>
                  </div>
                </div>

                <!-- input states -->

            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          <!-- general form elements disabled -->
        </div> --}}
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
@endsection