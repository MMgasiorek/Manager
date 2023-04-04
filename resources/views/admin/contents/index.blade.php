@extends('admin.home')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-9 mt-3 mb-4">
            <h3>Content Management</h3>
        </div>
        <div class="col-3 mt-3 mb-4">
            <a href="{{ URL::to('/content_add')}}"><button type="button" class="btn btn-success">Add new</button></a>
        </div>
        @foreach ($content_areas as $content_area)
            <div class="col-6 text-center">
                    <div class="card">
                        <div class="card-header ">{{Str::upper($content_area->name)}}</div>
                            <div class="card-body">
                <a href="{{ URL::to('/content_show' , [$content_area->id] )}}"><button type="button" class="btn btn-warning">Manage</button></a>
                            </div>
                    </div>
            </div>
        @endforeach
    </div>

    <div class="row mt-5">
        <div class="col-4">
            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid px-1 px-sm-2 mt-1 mb-1" style="width: 15rem;"
                                            src="img/app/1.png" alt="...">
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
                                            src="img/app/2.png" alt="...">
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
                                            src="img/app/3.png" alt="...">
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