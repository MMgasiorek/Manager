@extends('admin.home')

@section('content')


<div class="container">
        
    <div class="row mb-4">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Add new visit</h1>
            </div>
            <div class="card-body">
                <div class="row">
                <div class="col-4">
            <form action="{{ url('visit_create') }}" method="POST" role="form">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                <div class="form-group">
                    <label for="name">Client</label>
                    <select class="form-control" name="client_id" id="client_id">
                        @foreach ($clients as $client)
                            <option value="{{$client->id}}">{{$client->name}}</option>
                        @endforeach
                    </select>
                </div>
               
                <div class="form-group">
                    <label for="name">Worker</label>
                    <select class="form-control" name="employeer_id" id="employeer_id">
                        @foreach ($employees as $employeer)
                            <option value="{{$employeer->id}}">{{$employeer->name}}</option>
                        @endforeach
                    </select>
                </div>
                </div>
                <div class="col-4">
                        <div class="form-group">
                            <label for="name">Tattoo</label>
                            <select class="form-control" name="tattoo_id" id="tattoo_id">
                                @foreach ($tattoos as $tattoo)
                                    <option value="{{$tattoo->id}}">{{$tattoo->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <label for="amount">Amount</label>
                            <input type="text" class="form-control" name="amount"/>
                </div>
                <div class="col-4">
                        <label for="date">Date</label>
                            <input type="date" class="form-control" name="date"/>
                        <label for="time">Work time</label>
                            <input type="text" class="form-control" name="time"/>
                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3 mb-3">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Accessory wear</h1>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                            <label for="consume_needle">Needle</label>
                                <input type="text" class="form-control" name="consume_needle"/>
                            <label for="consume_mask">Masks</label>
                                <input type="text" class="form-control" name="consume_mask"/>
                            <label for="consume_ink">Ink</label>
                                <input type="text" class="form-control" name="consume_ink"/>
                            <label for="consume_glove">Gloves</label>
                                <input type="text" class="form-control" name="consume_glove"/>
                            <label for="consume_liquid">Liquid</label>
                                <input type="text" class="form-control" name="consume_liquid"/>
                    </div>
                    <div class="col-6">
                            <label for="consume_cream_healing">Healing</label>
                                <input type="text" class="form-control" name="consume_cream_healing"/>
                            <label for="consume_soap">Soap</label>
                                <input type="text" class="form-control" name="consume_soap"/>
                            <label for="consume_cream_anesthesia">Anesthesia</label>
                                <input type="text" class="form-control" name="consume_cream_anesthesia"/>
                            <label for="consume_calque">Calque</label>
                                <input type="text" class="form-control" name="consume_calque"/>
                            <label for="consume_holder">Holder</label>
                                <input type="text" class="form-control" name="consume_holder"/>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <div class="row">
            <div class="text-center mb-4 mt-3 col-12">    
                    <input type="submit" value="Add" class="btn btn-primary mt-2" />
            </div>  
    </div>
</form>
</div>

@endsection('content')