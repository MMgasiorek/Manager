@extends('admin.home')

@section('content')

<div class="container">
    <div class="row mt-5">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Edit Employeer</h1>
            </div>
            <div class="card-body">
                <form action="{{ url('employeer_update') }}" method="POST" role="form">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input type="hidden" name="id" value="{{ $employeer->id }}" />
                        <div class="row">
                            <div class="col-12">
                                <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" value="{{ $employeer->name}}"/>
                                <label for="name">Surname</label>
                                    <input type="text" class="form-control" name="surname" value="{{ $employeer->surname}}"/>
                                <label for="name">Email</label>
                                    <input type="text" class="form-control" name="email" value="{{ $employeer->email}}"/>
                                <label for="name">Phone</label>
                                    <input type="text" class="form-control" name="phone" value="{{ $employeer->phone}}"/>
                            </div>
                        </div>
                    <div class="text-center mb-4">    
                            <input type="submit" value="Dodaj" class="btn btn-primary mt-2" />
                    </div>  
                </form>
            </div>
        </div>       
    </div>   
</div>

@endsection('content')