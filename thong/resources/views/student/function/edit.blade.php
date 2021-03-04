{{-- @dd($errors) --}}
@extends('student/dashboardStudent')
@section('student_content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Student</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Student</li>
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
              <h3 class="card-title">Edit Upload</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{Route('show_upload.update',$getId->student_id)}}" method="POST" role="form" enctype="multipart/form-data">
              @csrf
              @method('put')
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputFile">Upload File</label>
                  <div class="input-group">
                      <input type="file" name="student_uploadfile" class="custom-file-input" id="exampleInputFile">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                  </div>
                </div>
                @if ($errors->has('student_uploadfile'))
                  <p class="help is-danger" style="color: red">Please upload your file!</p>
                @endif
                <div class="form-group">
                  <label for="exampleInputFile">Upload Image</label>
                  <div class="input-group">
                      <input type="file" name="student_uploadimage" class="custom-file-input" id="exampleInputFile1">
                      <label class="custom-file-label" for="exampleInputFile1">Choose image</label>
                  </div>
                </div>
                @if ($errors->has('student_uploadimage'))
                  <p class="help is-danger" style="color: red">Please upload your image!</p>
                @endif
                <div class="form-group">
                  <label for="exampleInputPassword1">Description</label>
                  <input type="text" name="student_description" value="{{ old('student_description',$getId->student_description) }}" class="form-control" id="exampleInputPassword1" placeholder="Description">
                </div>
                @if ($errors->has('student_description'))
                  <p class="help is-danger" style="color: red">Please write description for your upload!</p>
                @endif
                <div class="form-check">
                  <input type="checkbox" name="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">I agree to Terms and Conditions</label>
                </div>
                @if ($errors->has('checkbox'))
                <p class="help is-danger" style="color: red">Make sure you agree to the terms!</p>
                @endif
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
              </div>
              <!-- /.card-body -->

            </form>
          </div>
          <!-- /.card -->

        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
@endsection