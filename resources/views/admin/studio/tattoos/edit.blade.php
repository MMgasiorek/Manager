@extends('admin.home')

@section('content')

<div class="container">
    <div class="row mt-5">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Tattoo Number</h1>
            </div>
            <div class="card-body">
                <form action="{{ url('tattoo_update') }}" method="POST" role="form">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <input type="hidden" name="id" value="{{ $tattoo->id }}" />
                    <div class="row">
                        <div class="col-12">
                            <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" value="{{ $tattoo->name}}"/>
                            <label for="picture_number">Picture Number</label>
                                <input type="text" class="form-control" name="picture_number" value="{{ $tattoo->picture_number}}"/>
                        </div>
                    </div>        
                <div class="text-center mb-4">    
                        <input type="submit" value="Edytuj" class="btn btn-primary mt-2" />
                </div>  
                </form>
            </div>
        </div>      
    </div>   
</div>


@endsection('content')