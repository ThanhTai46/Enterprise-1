@extends('student/dashboardStudent')
@section('student_content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>View Semester</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Semester</li>
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
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <br>
          @if (session('status'))
          <div class="alert alert-success">
            {{ session('status') }}
          </div>
          @endif
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>   
                <tr>
                  <th hidden>id</th>
                  <th>Semester Name</th>
                  <th>Start Date</th>
                  <th>End Date</th>
                  <th>Add Submission</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($semester as $item)
                    <td hidden>{{$loop->iteration}}</td>
                    <td>{{$item->semester_name}}</td>
                    <td>{{$item->start_date}}</td>
                    <td>{{$item->end_date}}</td>
                    <td><a style="color: white" href="{{ url('fileUpload/'.$item->semester_id )}}" class="btn btn-warning">Add Submission <i class="fas fa-pencil-alt"></a></td>
                  </tr>
                </tbody>
                @endforeach
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