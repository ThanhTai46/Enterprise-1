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
<section class="content">
  <!-- Default box -->
  <div class="card card-solid main3">
    @foreach($getData as $key => $getDatas)
    <div class="card-body pb-0 main1">  
      <div class="row d-flex align-items-stretch main2">
        <div class="col-12 col-sm-6 col-md-6 d-flex align-items-stretch">
          <div class="card bg-light">
            <div class="card-header text-muted border-bottom-0">
              File Upload By Student
            </div>
            <div class="card-body pt-0">
              <div class="row">
                <div class="col-7">
                  <input type="hidden" id="getId" value="{{$getDatas->student_id}}">
                  <input type="hidden" id="getURL" value="{{url('executeComment/'.$getDatas->student_id)}}">
                  <h2 class="lead"><b id="file1">{{$getDatas->student_uploadfile}}</b></h2>
                  <p class="text-muted text-sm"><b>Description: </b>{{$getDatas->student_description}}</p>
                  <p class="text-muted text-sm"><b>Date Upload: </b>{{$getDatas->created_at}}</p>
                  <p class="text-muted text-sm"><b>Faculty: </b>{{$getDatas->faculity_name}}</p>
                </div>
                <div class="col-5 text-center">
                  <img src="{{asset("imageStudent/$getDatas->student_uploadimage")}}" class="img-circle img-fluid" alt="">
                </div>
              </div>
            </div>
            <div class="card-footer">
              <div class="text-right">
                <button type="button" class="btn btn-sm bg-teal" data-toggle="modal" data-target="#addcomment">
                  <i class="fas fa-comments btnCmt">Comment</i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="callout callout-info templateComment">
      <form action="" method="POST">
        @csrf
      <div class="form-group">
        <h5>
          <i class="fas fa-file-alt"></i>
          <input type="hidden" class="input2" name="student_id" value="">
          File Upload: <h3 class="input1"></h3>
        </h5>
      </div>
      <div class="form-group">
        <label>Comment :</label>
        <textarea class="form-control" rows="8" placeholder="Input Your Comment" name="comment"></textarea>
        <select class="form-control" id="grade">
          <option value="0">Set grade for assignment</option>
          <option value="1">Fail</option>
          <option value="2">Pass</option>
          <option value="3">Merit</option>
          <option value="4">Distinction</option>
        </select>
      </div>
      <button type="button" class="btn btn-secondary btnClose">Close</button>
      <button type="button" class="btn btn-info btn-add-comment btnComment">Comment<i class="fas fa-comments"></i></button>
      </form>
    </div>
    @endforeach
  </div>
</section>
<style>
  .templateComment{
    width: 500px;
    height: 500px;
    /* background-color: red; */
    position: absolute;
    margin-left: auto;
    margin-right: auto;
    left: 0;
    right: 0;
    border-radius: 10px;
    box-shadow: 5px 5px;
    /* text-align: center; */
  }
  #grade{
    margin-top: 10px;
  }
</style>
@endsection