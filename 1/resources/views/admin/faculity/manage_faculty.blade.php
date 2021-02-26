@extends('adminlayout')
@section('admin_content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Faculty Management</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">DataTables</li>
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
       <a style="color: white" href="{{route('ADD_FACULTY')}}" class="btn btn-warning"> Add New Faculty <i class="fas fa-plus"></i></a>

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
                  <th>ID</th>
                  <th>Faculty Name</th>
                  <th>Description</th>
                  <th>Add Student in Faculty</th>
                  <th>Add Coordinator in Faculty</th>
                  <th>Edit Action</th>
                  <th>Delete Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($faculity as $item)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->Faculity_name}}</td>
                    <td>{{$item->Faculity_description}}</td>
                    <td><a style="color: white" href="#" class="btn btn-success"> <i class="fas fa-plus"></i> Add Student</a></td> 
                    <td><a style="color: white" href="#" class="btn btn-success"> <i class="fas fa-plus"></i> Add Coordinator</a></td> 
                    <td><a style="color: white" href="{{ url('management_faculty/edit_faculty/'.$item->Faculity_id )}}" class="btn btn-warning">Edit <i class="fas fa-pencil-alt"></a></td>
                    <td>
                      <form action="{{ url('management_faculty/'.$item->Faculity_id) }}" method = "POST" onsubmit="return confirm('Are you sure delete?')">
                          @method('delete')
                          @csrf
                          <button style="color: white" class="btn btn-danger">Delete <i class="fas fa-trash-alt"></button></td>
                          <!-- <a style="color: white" class="btn btn-danger">Delete <i class="fas fa-trash-alt"></a></td> -->
                      </form>

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