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
            <li class="breadcrumb-item"><a href="{{Route('DASHBOARD')}}">Home</a></li>
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
        <div class="col col-lg-8 col-md-12 col-sm-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Upload File</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{URL('executeUpload')}}" method="POST" role="form" enctype="multipart/form-data">
              @csrf
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
                  <label for="exampleInputFile1">Upload Image</label>
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
                  <input type="text" name="student_description" value="{{ old('student_description') }}" class="form-control" id="exampleInputPassword1" placeholder="Description">
                </div>
                @if ($errors->has('student_description'))
                  <p class="help is-danger" style="color: red">Please write description for your upload!</p>
                @endif

                <div class="form-group">
                  <label for="">Faculty</label>
                  <select class="form-control" name="faculity_name">
                    <option>Select Falcuty</option>
                    @foreach($faculity as $item)
                    <option value="{{$item -> faculity_name}}">{{$item -> faculity_name}}</option>
                    @endforeach
                  </select>
                </div>
                {{-- <center> --}}
                <div class="form-check">
                  <input type="checkbox" name="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">I agree to Terms and Conditions</label>
                </div>
                @if ($errors->has('checkbox'))
                <p class="help is-danger" style="color: red">Make sure you agree to the terms!</p>
                @endif
                {{-- </center> --}}
              </div>
              <!-- /.card-body -->
              <div class="">
                <button type="submit" class="btn btn-primary ml-3" id="submit">Submit</button>
              </div> 
            </form>
          </div>
          <!-- /.card -->
        </div>
        <div class="col col-lg-4 d-md-12 d-sm-12 ">
        @foreach($semester as $item)
        <div class="card">
          <ul class="list-group list-group-flush">
            <div class="card-body">
              <div class="form-group">
                <label for="">Semester Name : </label>
                <input class="form-control" value = "{{$item -> semester_name}}" disabled="disabled"></input>
              </div>
              <div class="form-group">
                <label for="">Start Day :</label>
                <input class="form-control" value = "{{$item -> start_date}}" disabled="disabled"></input>
              </div>
              <div class="form-group">
                <label for="">Deadline :</label>
                <input class="form-control" id="deadline" value = "{{$item -> end_date}}" disabled="disabled"></input>
              </div>
              <div class="form-group">
                <label for="" id= message ></label>
              </div>                    
            </div>
          </ul>
        </div>
        @endforeach
      </div> 
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <script>
    var deadline = document.getElementById('deadline').value;
    var message =  document.getElementById('message');
    var date = new Date();
    let year = date.getFullYear();
    let month = (1 + date.getMonth()).toString().padStart(2, '0');
    let day = date.getDate().toString().padStart(2, '0');
    var now = year + '-' + month + '-' + day;
    var submit = document.getElementById('submit');
    if (now > deadline) {
        submit.setAttribute("disabled", true);
        submit.classList.remove("btn-primary");
        submit.classList.add("btn-danger");
        message.innerHTML = "Deadline is Time Out!!!"
        message.style.color = "red";
    }
  </script>
@endsection