@extends('admin.home')

@section('content')


<div class="container">
    <div class="row">
        <h1 class="text-center mt-2 mb-2">{{$employeer->name}}  {{$employeer->surname}}</h1>
    </div>
    <div class="row mt-3">
        <div class="col-6">
          <div class="card">
            <div class="card-header">
              <h3 class="text-center">Tattoos Done</h3>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped table-sm">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Client</th>
                    <th scope="col">Tattoo</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($visits as $visit)
                  <tr>
                    <td>{{$visit->id}}</td>
                    <td>{{$visit->client->name}}</td>
                    <td>{{$visit->tattoo->name}}</td>
                    <td>
                    <a href="{{ URL::to('/tattoo_show' , [$visit->tattoo->id] )}}"><button type="button" class="btn btn-primary btn-sm">Profile</button></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card">
            <div class="card-header">
              <h3 class="text-center">Report</h3>
            </div>
            <div class="card-body">
                    <form action="{{ url('/employeer_report') }}" method="POST" role="form">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <input type="hidden" name="employeer_id" value="{{$employeer->id}}" />
                            <label for="start">Start</label>
                                <input type="date" class="form-control" name="start"/>
                            <label for="end">End</label>
                                <input type="date" class="form-control" name="end"/>
                        <input type="submit" value="Report" class="btn btn-dark mt-5" />
                    </form>
            </div>
          </div>
        </div>
    </div>

    <div class="row mt-4">
      <div class="col-4">
            <div class="card">
              <div class="card-header"><h5>Tattoo Done</h5></div>
              <div class="card-body bg-primary text-white text-center"><h2>{{$total_tattoo}}</h2></div>
            </div>
      </div>
      <div class="col-4">
            <div class="card">
              <div class="card-header"><h5>Work Time</h5></div>
              <div class="card-body bg-primary text-white text-center"><h2>{{$total_time}} h</h2></div>
            </div>
      </div>
      <div class="col-4">
            <div class="card">
              <div class="card-header"><h5>Earning amount</h5></div>
              <div class="card-body bg-primary text-white text-center"><h2>{{$total_money}} zł</h2></div>
            </div>
      </div>

    </div>
</div>


@endsection('content')
