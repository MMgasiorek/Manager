@extends('admin.home')

@section('content')

<div class="container">
    <div class="row mt-5">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Edit Client</h1>
            </div>
            <div class="card-body">
                <form action="{{ url('client_create') }}" method="POST" role="form">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <input type="hidden" name="id" value="{{ $client->id }}" />
                    <div class="row">
                        <div class="col-12">
                            <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" value="{{ $client->name}}"/>
                            <label for="name">Surname</label>
                                <input type="text" class="form-control" name="surname" value="{{ $client->surname}}"/>
                            <label for="name">Email</label>
                                <input type="text" class="form-control" name="email" value="{{ $client->email}}"/>
                            <label for="name">Phone</label>
                                <input type="text" class="form-control" name="phone" value="{{ $client->phone}}"/>
                        </div>
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