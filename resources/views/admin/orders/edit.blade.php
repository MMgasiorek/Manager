@extends('admin.home')

@section('content')


<div class="container">
    <div class="row">
       <div class="col-12 col-md-6">
            <div class="card">
                <div class="card-header">
                    <form action="{{ URL::to('/event_create')}}" method="POST" role="form">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <input type="hidden" name="order_id" value="{{ $order->id }}" />
                    <h3>New Client</h3>
                </div>
                <div class="card-body">
                    <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $order->name }}"/>
                    <label for="surname">Surname</label>
                        <input type="text" class="form-control" name="surname" value="{{ $order->surname }}"/>
                    <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" value="{{ $order->email }}"/>
                    <label for="phone">Phone</label>
                        <input type="text" class="form-control" name="phone" value="{{ $order->phone }}"/>
                </div>
            </div>
       </div>

       <div class="col-12 col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3>Order Details</h3>
                </div>
                <div class="card-body">
                    <label for="width">Width</label>
                        <input type="text" class="form-control" name="width" value="{{ $order->width }}"/>
                    <label for="height">Height</label>
                        <input type="text" class="form-control" name="height" value="{{ $order->height }}"/>
                    <label for="place">Place</label>
                        <input type="text" class="form-control" name="place" value="{{ $order->place }}"/>
                    <label for="color">Color</label>
                        <input type="text" class="form-control" name="color" value="{{ $order->color }}"/>
                </div>
            </div>      
       </div>       
    </div>
    <div class="row mt-5">
                <div class="col-sm-12 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3>Calendar</h3>
                        </div>
                        <div class="card-body">
                            @include('admin.fullcalender') 
                        </div>
                    </div>    
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3>Other Details</h3>
                        </div>
                        <div class="card-body">
                            <label for="description">Description</label>
                                <textarea type="text" class="form-control" name="description" value="{{ $order->description }}" rows="6"></textarea>    
                            <label for="date_start">Start</label>
                                <input type="date" class="form-control" name="date_start"/>  
                            <label for="date_end">End</label>
                                <input type="date" class="form-control" name="date_end"/> 
                            <label for="title">Title</label>
                                <input type="text" class="form-control" name="title"/> 
                            <div class="form-group">
                                <label for="employeer_id">Employeer</label>
                                    <select class="form-control" name="employeer_id">
                                    @foreach ($employees as $worker)
                                        <option value="{{$worker->id}}" class="form-control" name="employeer_id">{{$worker->name}}, {{$worker->surname}}</option>
                                    @endforeach
                                    </select>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
    <div class="row mt-4 mb-4">
        <div class="col-12 text-center">             
            <input type="submit" value="Confirm" class="btn btn-success mt-5" />
        </div>
    </div>
    </form>
</div>

@endsection('content')
