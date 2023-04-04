@extends('admin.home')

@section('content')

<div class="container">
    <div class="row">
      <div class="card">
        <div class="card-header">
          <h1 class="text-center mt-2 mb-2">Visits</h1>
        </div>
        <div class="card-body">
          <div class="table-responsive" style="height:320px;">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Employeer</th>
                  <th scope="col">Client</th>
                  <th scope="col">Tattoo</th>
                  <th scope="col">Date</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($visits as $visit)
                <tr>
                <th scope="row">{{ $visit->id}}</th>
                <td>{{ $visit->employeer->name}} ({{$visit->employeer->surname}})</td>
                <td>{{ $visit->client->name}} {{ $visit->client->surname}}</td>
                <td>{{ $visit->tattoo->name}}</td>
                <td>{{ $visit->date}}</td>
                  <td>
                  <a href="{{ URL::to('/visit_show' , [$visit->id] )}}"><button type="button" class="btn btn-success btn-sm">Profile</button></a>
                  <a href="{{ URL::to('/visit_delete' , [$visit->id] )}}"><button type="button" class="btn btn-info btn-sm">Delete</button></a>
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
        <a href="{{ URL::to('/visit_add')}}"><button type="button" class="btn btn-warning">Add</button></a>
    </div>
</div>

@endsection('content')