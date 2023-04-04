@extends('admin.home')

@section('content')


<div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h1 class="text-center mt-2 mb-2">Employees</h1>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped table-sm">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Surname</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($employees as $employeer)
                  <tr>
                    <td>{{$employeer->id}}</td>
                    <td>{{$employeer->name}}</td>
                    <td>{{$employeer->surname}}</td>
                    <td>{{$employeer->phone}}</td>
                    <td>
                    <a href="{{ URL::to('/employeer_show' , [$employeer->id] )}}"><button type="button" class="btn btn-success btn-sm">Profile</button></a>
                    <a href="{{ URL::to('/employeer_edit' , [$employeer->id] )}}"><button type="button" class="btn btn-danger btn-sm">Edit</button></a>
                    <a href="{{ URL::to('/employeer_delete' , [$employeer->id] )}}"><button type="button" class="btn btn-info btn-sm">Delete</button></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row text-center mt-2">
        <a href="{{ URL::to('/employeer_add')}}"><button type="button" class="btn btn-warning">Add</button></a>
    </div>
</div>


@endsection('content')