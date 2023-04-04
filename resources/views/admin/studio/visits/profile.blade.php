@extends('admin.home')

@section('content')

<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center mt-2 mb-2">Visit Details</h1>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <ul class="list-group">
                            <li class="list-group-item">ID : {{$visit->id}}</li>
                            <li class="list-group-item">Name : {{$visit->tattoo->name}}</li>
                            <li class="list-group-item">ID Tattoo : {{$visit->tattoo->id}}</li>
                            <li class="list-group-item">Made : {{$visit->employeer->surname}} , {{$visit->employeer->name}}</li>
                            <li class="list-group-item">Client : {{$visit->client->name}} , {{$visit->client->surname}}</li>
                            <li class="list-group-item">Date : {{$visit->date}}</li>
                            <li class="list-group-item">Price : {{$visit->amount}} zł</li>
                            <li class="list-group-item">Work time : {{$visit->time}} h</li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <a href="#"><img src="{{asset('img/tattoos/').'/'.$visit->id.'.png'}}" class="mx-auto d-block responsive"></a>
                    </div>
                </div>
            </div>      
        </div>
    </div>

    <div class="row">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center mt-5 mb-2">Accessories wear</h1>
            </div>
            <div class="card-body">
                <div class="row mt-4 mb-4">
                    <div class="col-6">
                        <ul class="list-group">
                            <li class="list-group-item">Needle : {{$visit->consume_needle}}</li>
                            <li class="list-group-item">Mask : {{$visit->consume_mask}}</li>
                            <li class="list-group-item">Ink : {{$visit->consume_ink}}</li>
                            <li class="list-group-item">Gloves : {{$visit->consume_glove}}</li>
                            <li class="list-group-item">Liquid : {{$visit->consume_liquid}}</li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="list-group">
                            <li class="list-group-item">Healing : {{$visit->consume_healing}}</li>
                            <li class="list-group-item">Soap : {{$visit->consume_soap}}</li>
                            <li class="list-group-item">Anesthesia : {{$visit->consume_anesthesia}}</li>
                            <li class="list-group-item">Calque : {{$visit->consume_calque}}</li>
                            <li class="list-group-item">Holder : {{$visit->consume_holder}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection('content')
