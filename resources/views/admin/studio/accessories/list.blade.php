@extends('admin.home')

@section('content')

<div class="container">
    <div class="row">
    @foreach ($accessories as $accessory)
        <div class="col-12 col-md-6 mb-4">
            <div class="card border border-dark">
                <div class="card-header text-center small font-weight-bold"><h3>{{$accessory->name}}<h3></div>
                <div class="card-body">
                    <div class="progress mb-4">
                            @php
                            $value = ($accessory->amount / $accessory->safety_level *100)
                            @endphp
                            @if ($value < 25)
                            <div class="progress-bar bg-danger" role="progressbar"
                             style="width: {{ $value }}%"></div>
                            @elseif($value > 25 &&  $value < 60)
                            <div class="progress-bar bg-warning" role="progressbar"
                             style="width: {{ $value }}%"></div>
                            @else
                            <div class="progress-bar bg-success" role="progressbar"
                            style="width: {{ $value }}%"></div>
                            @endif
                    </div>
                    <form action="{{ url('accessory_update') }}" method="POST" role="form">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div class="form-group">
                        <input type="text" class="form-control" name="amount" value="{{ $accessory->amount }}"/>
                        <input type="hidden" class="form-control" name="id" value="{{ $accessory->id }}"/> 
                    </div>
                        <input type="submit" value="Update" class="btn btn-info mt-2 btn-sm" />
                        <a href="{{ URL::to('/accessory_delete' , [$accessory->id] )}}"><button type="button" class="btn btn-danger btn-sm mt-2">Delete</button></a>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
    </div>

    <div class="row mt-5 text-center mt-2 mb-5">
        <a href="{{ URL::to('/accessory_add')}}"><button type="button" class="btn btn-warning">Add</button></a>
    </div>
</div>

@endsection('content')