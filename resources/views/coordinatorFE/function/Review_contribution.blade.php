@extends('coordinatorFE/dashboardCoordinator')
@section('coordinator_content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>View Contribution</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{Route('DASHBOARD')}}">Home</a></li>
          <li class="breadcrumb-item active">View Contribution</li>
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
                    <th>File Upload</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Date Upload</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $datas)
                  <tr>
                    <td hidden>{{$loop->iteration}}</td>
                    <td>{{$datas->student_uploadfile}}</td>
                    <td>
                      <img src="{{asset("imageStudent/$datas->student_uploadimage")}}" width="100" height="100" alt="">
                    </td>
                    <td>{{$datas->student_description}}</td>
                    <td>{{$datas->created_at}}</td>
                    <td>
                    <form action="{{url('review/'.$datas->student_id)}}" method="post" onsubmit="return confirm('Are you sure delete post?')">
                        @method('delete')
                        @csrf
                        <a style="color: white" href="{{url('publish/'.$datas->student_id)}}" class="btn btn-primary">
                            Select for publish <i class="fas fa-eye"></i>
                        </a>
                        <button class="btn btn-danger">
                            Remove <i class="fa fa-trash-alt"></i>  
                        </button>      
                    </form>
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