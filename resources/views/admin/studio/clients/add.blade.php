@extends('admin.home')

@section('content')

<div class="container">
    <div class="row mt-5">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Add Client</h1>
            </div>
            <div class="card-body">
                <form action="{{ url('client_create') }}" method="POST" role="form">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div class="row">
                        <div class="col-12">
                            <label for="name">Name</label>
                                <input type="text" class="form-control" name="name"/>
                            <label for="surname">Surname</label>
                                <input type="text" class="form-control" name="surname"/>
                            <label for="email">Email</label>
                                <input type="text" class="form-control" name="email"/>
                            <label for="phone">Phone</label>
                                <input type="text" class="form-control" name="phone"/>
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