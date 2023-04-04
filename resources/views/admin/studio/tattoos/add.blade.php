@extends('admin.home')

@section('content')

<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Add tattoo</h1>
            </div>
            <div class="card-body">
                <form action="{{ url('tattoo_create') }}" method="POST" role="form" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <div class="row">
                            <div class="col-12">
                                <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name"/>
                                <label for="picture_number">Picture number</label>
                                    <input type="text" class="form-control" name="picture_number"/>
                                <label for="image">Upload picture</label>
                                    <input type="file" name="image" class="form-control">
                            </div>
                    <div class="text-center mb-4">    
                            <input type="submit" value="Add" class="btn btn-primary mt-2" />
                    </div>  
                </form>
            </div>
        </div>      
    </div>   
</div>

@endsection('content')