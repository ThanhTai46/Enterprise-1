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
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">View Contribution</li>
        </ol>

      </div>
    </div>
  </div><!-- /.container-fluid -->

</section>

  @if(session()->has('message'))
        <div class="alert alert-success">
          {!! session()->get('message') !!}
        </div>
        @elseif(session()->has('error'))
        <div class="alert alert-danger">
          {!! session()->get('error') !!}
        </div>
  @endif
<section class="content1">
  @if (session('status'))
    <div class="alert alert-success">
      {{ session('status') }}
    </div>
   @endif
  <!-- Default box -->
  <div class="card card-solid">
    <div class="card-body pb-0">
      <div class="row d-flex align-items-stretch">

        @foreach($student as $item)
        <div class="col-12 col-sm-6 col-md-6 d-flex align-items-stretch">
          <div class="card bg-light main1">
            <div class="card-header text-muted border-bottom-0">
              File Upload By Student
            </div>
            <div class="card-body pt-0">
              <div class="row">
                <div class="col-7">
                  {{$loop->iteration}}
                  <h2 class="lead"><b class="file1">{{$item->student_uploadfile}}</b></h2>
                  <p class="text-muted text-sm"><b>Description: </b>{{$item->student_description}}</p>
                  <p class="text-muted text-sm"><b>Date Upload: </b>{{$item->created_at}}</p>
                </div>
                <div class="col-5 text-center">
                  {{-- <img src="../../dist/img/user1-128x128.jpg" alt="" class="img-circle img-fluid"> --}}
                  <img src="{{asset("imageStudent/$item->student_uploadimage")}}" class="img-circle img-fluid" alt="">
                </div>
              </div>
            </div>
            <div class="card-footer">
              <div class="text-right">

                <a href="{{url('addcomment/'.$item->student_id)}}" class="btn btn-sm bg-teal " class="btn btn-sm bg-teal">
                   <i class="fas fa-comments"></i>
                </a>
                <a href="#" class="btn btn-sm btn-primary">
                  <i class="fas fa-user"></i> View Profile
                </a>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</section>
@endsection