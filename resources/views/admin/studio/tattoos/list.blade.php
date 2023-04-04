@extends('admin.home')

@section('content')


<div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h1 class="text-center">Tattoo</h1>
          </div>
          <div class="card-body">
            <div class="table-responsive" style="height:320px;">
              <table class="table table-striped table-sm">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($tattoos as $tattoo)
                  <tr>
                    <td>{{$tattoo->id}}</td>
                    <td>{{$tattoo->name}}</td>
                    <td>
                    <a href="{{ URL::to('/tattoo_show' , [$tattoo->id] )}}"><button type="button" class="btn btn-success btn-sm">Profile</button></a>
                    <a href="{{ URL::to('/tattoo_edit' , [$tattoo->id] )}}"><button type="button" class="btn btn-danger btn-sm">Edit</button></a>
                    <a href="{{ URL::to('/tattoo_delete' , [$tattoo->id] )}}"><button type="button" class="btn btn-info btn-sm">Delete</button></a>
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

    <div class="row mt-5 mb-4 text-center">
        <a href="{{ URL::to('/tattoo_add')}}"><button type="button" class="btn btn-warning">Add</button></a>
    </div>
</div>

@endsection('content')