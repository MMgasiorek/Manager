@extends('admin.home')

@section('content')

<div class="container">
    <div class="row mt-5">
        <div class="col-6">
          <div class="card">
            <div class="card-header"><h3>Revenue</h3></div>
            <div class="card-body">
              <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
            </div>
          </div>          
        </div>
        <div class="col-6">
          <div class="card">
            <div class="card-header"><h3>General Report</h3></div>
              <div class="card-body">
                    <form action="{{ url('/report') }}" method="POST" role="form">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
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

    <div class="row mt-4 mb-3">
      <div class="col-4">
            <div class="card">
              <div class="card-header"><h5>Revenue</h5></div>
              <div class="card-body bg-primary text-white text-center"><h2>{{$amount}} zł</h2></div>
            </div>
      </div>
      <div class="col-4">
            <div class="card">
              <div class="card-header"><h5>Work Time</h5></div>
              <div class="card-body bg-primary text-white text-center"><h2>{{$time}} h</h2></div>
            </div>
      </div>
      <div class="col-4">
            <div class="card">
              <div class="card-header"><h5>Tattoos done</h5></div>
              <div class="card-body bg-primary text-white text-center"><h2>{{$visits}}</h2></div>
            </div>
      </div>

    </div>
</div>

@endsection('content')