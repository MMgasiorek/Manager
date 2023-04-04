@extends('admin.home')

@section('content')

<div class="container">
    <div class="row">
        <h1 class="text-center mt-2 mb-2">Orders</h1>
    </div>

    <div class="row mt-5">
        <div class="col-4">
            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid px-1 px-sm-2 mt-1 mb-1" style="width: 15rem;"
                                            src="img/app/6.png" alt="...">
                                    </div>
                                    <p>Add some quality, svg illustrations to your project courtesy of <a
                                            target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a
                                        constantly updated collection of beautiful svg images that you can use
                                        completely free and without attribution!</p>
                                </div>
                            </div>
        </div>
        <div class="col-4">
            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid px-1 px-sm-2 mt-1 mb-1" style="width: 15rem;"
                                            src="img/app/7.png" alt="...">
                                    </div>
                                    <p>Add some quality, svg illustrations to your project courtesy of <a
                                            target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a
                                        constantly updated collection of beautiful svg images that you can use
                                        completely free and without attribution!</p>
                                </div>
                            </div>
        </div>
        <div class="col-4">
            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid px-1 px-sm-2 mt-1 mb-1" style="width: 15rem;"
                                            src="img/app/8.png" alt="...">
                                    </div>
                                    <p>Add some quality, svg illustrations to your project courtesy of <a
                                            target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a
                                        constantly updated collection of beautiful svg images that you can use
                                        completely free and without attribution!</p>
                                </div>
                            </div>
        </div>
    </div>

    <div class="row mt-5 mb-5">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
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
                @foreach ($orders as $order)
                <tr>
                  <td>{{$order->id}}</td>
                  <td>{{$order->name}}</td>
                  <td>{{$order->surname}}</td>
                  <td>{{$order->phone}}</td>
                  <td>{{$order->email}}</td>
                  <td>
                  <a href="{{ URL::to('/order_delete' , [$order->id] )}}"><button type="button" class="btn btn-danger btn-sm">Delete</button></a>
                  <a href="{{ URL::to('/order_edit' , [$order->id] )}}"><button type="button" class="btn btn-primary btn-sm">Details</button></a>
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

@endsection('content')