@extends('admin.home')

@section('content')

<div class="container text-center">
    <div class="row">
        <div class="col-4">
            <div class="card">
                <div class="card-header"><h2>Content</h2></div>
                <div class="card-body"><h6>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</h6></div>
                <div class="card-footer">
                    <a href="{{ URL::to('/contents')}}">
                        <button type="button" class="btn btn-primary">Manage</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-header"><h2>Reports</h2></div>
                <div class="card-body"><h6>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</h6></div>
                <div class="card-footer">
                    <a href="{{ URL::to('/reports')}}">
                        <button type="button" class="btn btn-primary">Manage</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-header"><h2>Accessories</h2></div>
                <div class="card-body"><h6>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</h6></div>
                <div class="card-footer">
                    <a href="{{ URL::to('/accessories')}}">
                        <button type="button" class="btn btn-primary">Manage</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-3">
            <div class="card">
                <div class="card-header"><h2>Visits</h2></div>
                <div class="card-body"><h6>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</h6></div>
                <div class="card-footer">
                    <a href="{{ URL::to('/visits')}}">
                        <button type="button" class="btn btn-primary">Manage</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <div class="card-header"><h2>Customers</h2></div>
                <div class="card-body"><h6>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</h6></div>
                <div class="card-footer">
                    <a href="{{ URL::to('/clients')}}">
                        <button type="button" class="btn btn-primary">Manage</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <div class="card-header"><h2>Tattoos</h2></div>
                <div class="card-body"><h6>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</h6></div>
                <div class="card-footer">
                    <a href="{{ URL::to('/tattoos')}}">
                        <button type="button" class="btn btn-primary">Manage</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <div class="card-header"><h2>Employees</h2></div>
                <div class="card-body"><h6>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</h6></div>
                <div class="card-footer">
                    <a href="{{ URL::to('/employees')}}">
                        <button type="button" class="btn btn-primary">Manage</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection('content')