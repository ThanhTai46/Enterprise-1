@extends('coordinatorFE/dashboardCoordinator')
@section('coordinator_content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Comment Contribution</h1>
        <div class="pull-right">
        <a href="{{Route('VIEW_CONTRIBUTION')}}" class="btn btn-secondary btn-sm"><i class="fas fa-undo"></i> Back</a>
      </div>
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

<section class="content">
  
  <div class="row">
    <div class="col-md-6 offset-sm-1">
      <form action="{{url('addcomment/'.$addcomment->student_id)}}" method="POST">
       @method('patch')
       @csrf
        <div class="form-group">
          <label  for="inputDescription"></label>
          <input class="form-control"  disabled="" type="text" value="{{ $addcomment->student_uploadfile }}">
          
        </div>
        <div class="form-group">
          <label for="inputDescription">Comment</label>
          <textarea name="comment" required="" id="inputDescription" placeholder="Input your comment" class="form-control" rows="4"></textarea>
        </div>
        <input type="submit" value="Save" class="btn btn-success float-right">
      </form>
    </div>
  </div>
  <!-- Default box -->
  
  
</section>





@endsection