@extends('admin.home')

@section('content')

<div class="container">
    <div class="row mt-4">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h1 class="mb-3">Worker</h1>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">Name : {{$event->employeer->name}}</li>
                        <li class="list-group-item">Surname : {{$event->employeer->surname}}</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h1 class="mb-3">Client</h1>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">Name: {{$event->client->name}}</li>
                        <li class="list-group-item">SurName : {{$event->client->surname}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-6">  
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Tattoo Details</h2>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                    <li class="list-group-item">Width : {{$event->width}}</li>
                    <li class="list-group-item">Height : {{$event->height}}</li>
                    <li class="list-group-item">Place : {{$event->place}}</li>
                    <li class="list-group-item">Color : {{$event->color}}</li>
                    </ul>
                </div>
            </div>      
        </div>
        <div class="col-6">  
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Tattoo Details</h2>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                    <li class="list-group-item">Date: {{$event->start}}</li>
                    <li class="list-group-item">Description : {{$event->description}}</li>
                    </ul>
                </div>
            </div>      
        </div>
    </div>
</div>

@endsection('content')
