@extends('admin.home')

@section('content')

<div class="container">
    <div class="row">
      <div class="card">
        <div class="card-header">
          <h1 class="text-center mt-2 mb-2">Clients</h1>
        </div>
        <div class="card-body">
          <div class="table-responsive" style="max-height:330px;">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Name</th>
                  <th scope="col">Surname</th>
                  <th scope="col">Phone</th>
                  <th scope="col">Email</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($clients as $client)
                <tr>
                  <td>{{$client->id}}</td>
                  <td>{{$client->name}}</td>
                  <td>{{$client->surname}}</td>
                  <td>{{$client->phone}}</td>
                  <td>{{$client->email}}</td>
                  <td>
                  <a href="{{ URL::to('/client_edit' , [$client->id] )}}"><button type="button" class="btn btn-danger btn-sm">Edit</button></a>
                  <a href="{{ URL::to('/client_delete' , [$client->id] )}}"><button type="button" class="btn btn-info btn-sm">Delete</button></a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <div class="row mt-5 mb-4 text-center">
        <a href="{{ URL::to('/client_add')}}"><button type="button" class="btn btn-warning">Add</button></a>
    </div>
</div>

@endsection('content')