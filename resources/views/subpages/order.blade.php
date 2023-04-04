@extends('welcome')

@section('content')

<div class="container text-white">
    <form action="{{ url('order_create') }}" method="POST" role="form">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <div class="form-group">
        <div class="row">
            @include('flash-message')
        </div>
        <div class="row mt-5">
            <div class="col-12 col-md-6">
                
                <h3 class="text-center">Personal Info</h3>
                <label for="name">Name</label>
                    <input type="text" class="form-control" name="name"/>
                <label for="name">Surname</label>
                    <input type="text" class="form-control" name="surname"/>
                <label for="phone">Phone</label>
                    <input type="text" class="form-control" name="phone"/>
                <label for="email">Email</label>
                    <input type="text" class="form-control" name="email"/>
            </div>
            <div class="col-12 col-md-6">
                <h3 class="text-center">Tattoo Details</h3>
                <label for="width">Width</label>
                    <input type="text" class="form-control" name="width"/>
                <label for="height">Height</label>
                    <input type="text" class="form-control" name="height"/>
                <label for="place">Place</label>
                    <input type="text" class="form-control" name="place"/>
                <label for="color">Section for element</label>
                    <select class="form-control" name="color" id="color">
                        <option>yes</option>
                        <option>no</option>
                    </select>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <label for="description" class="text-center">Description</label>
                    <textarea type="text" class="form-control" name="description" rows="5"></textarea>  
            </div>
        
            <div class="text-center">    
                    <input type="submit" value="Send" class="btn btn-primary mt-2" />
            </div> 
        </div>
    </div>
    </form>
</div>

@endsection('content')



