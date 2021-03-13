@extends('coordinatorFE/dashboardCoordinator')
@section('coordinator_content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Statistics Contribution</h1>
        <div class="pull-right">
      </div>
     </div>

      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">View Statistics</li>
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
      
    </div>
  </div>
  <!-- Default box -->
  
  
</section>





@endsection