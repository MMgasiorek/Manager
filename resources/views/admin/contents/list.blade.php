@extends('admin.home')

@section('content')

<div class="container">
    <div class="row">
        <h1 class="text-center mt-2 mb-2">Sections {{$area->name}}</h1>
      <div class="card">
        <div class="card-body">
        <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Name</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($contents as $content)
            <tr>
              <td>{{$content->id}}</td>
              <td>{{$content->title}}</td>
              <td>
              <a href="{{ URL::to('/content_delete' , [$content->id] )}}"><button type="button" class="btn btn-danger btn-sm">Delete</button></a>
              <a href="{{ URL::to('/content_edit' , [$content->id] )}}"><button type="button" class="btn btn-info btn-sm">Edit</button></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
        </div>
      </div>

    </div>

    <div class="row mt-5">
        <div class="col-6">
            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <div class="text-center">
                                      <img class="img-fluid px-1 px-sm-2 mt-1 mb-1" style="width: 15rem;"
                                            src="img/app/1.png" alt="...">
                                    </div>
                                    <p>Adds some quality, svg illustrations to your project courtesy of <a
                                            target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a
                                        constantly updated collection of beautiful svg images that you can use
                                        completely free and without attribution!</p>
                                </div>
                            </div>
        </div>
        <div class="col-6">
            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid px-1 px-sm-2 mt-1 mb-1" style="width: 15rem;"
                                            src="img/app/2.png" alt="...">
                                    </div>
                                    <p>Add some quality, svg illustrations to your project courtesy of <a
                                            target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a
                                        constantly updated collection of beautiful svg images that you can use
                                        completely free and without attribution!</p>
                                </div>
                            </div>
        </div>
    </div>
</div>

@endsection('content')