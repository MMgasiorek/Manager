@extends('admin.home')

@section('content')

<div class="container">
    <div class="row mt-5">
        <h1 class="text-center">Add Accessories</h1>
    </div>   
        <form action="{{ url('accessory_create') }}" method="POST" role="form">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <div class="row">
            <div class="col-12">
                <label for="name">Name</label>
                    <input type="text" class="form-control" name="name"/>
                <label for="amount">Value</label>
                    <input type="text" class="form-control" name="amount"/>
                <label for="safety_level">Safety Level</label>
                    <input type="text" class="form-control" name="safety_level"/>
            </div>

            <div class="text-center mb-4">    
                    <input type="submit" value="Dodaj" class="btn btn-primary mt-2" />
            </div>  
        </form>
    </div>
</div>

@endsection('content')