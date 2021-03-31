@extends('student/dashboardStudent')
@section('student_content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Student</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{Route('DASHBOARD')}}">Home</a></li>
            <li class="breadcrumb-item active">Student</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
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
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
              <style>
                  #thong{
                    background-color: #007bff;
                  }
                  .card-title{
                      color: #fff;
                  }
              </style>
            <div class="card-header" id="thong">
              <h3 class="card-title">File Management</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>File Upload</th>
                  <th>Image</th>
                  <th>Description</th>
                  <th>Date Upload</th>
                  <th>Date Update</th>
                  <th>Edit</th>
                  <th>Download</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($data as $datas)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$datas->student_uploadfile}}</td>
                  <td>
                    <img src="{{asset("imageStudent/$datas->student_uploadimage")}}" width="100" height="100" alt="">
                  </td>
                  <td>{{$datas->student_description}}</td>
                  <td>{{$datas->created_at}}</td>
                  @if($datas->updated_at != null)
                    <td>{{$datas->updated_at}}</td>
                  @else
                    <td></td>
                  @endif
                  <td>
                    <a style="color: white" href="{{Route('show_upload.edit',$datas->student_id)}}" class="btn btn-warning">
                      Edit <i class="fas fa-pencil-alt"></i>
                    </a>
                  </td>

                  <td>
                    <a style="color: white" href="uploadfile/{{$datas->student_uploadfile}}" download="{{$datas->student_uploadfile}}" class="btn btn-danger">
                      <i class="fa fa-download"></i>
                      Download
                    </a>
                  </td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
@endsection