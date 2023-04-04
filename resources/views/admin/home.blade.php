<!doctype html>
<html>
<head>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/admin.js') }}" defer></script>
    <script src="{{ asset('js/dashboard.js') }}" defer></script>
   
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Nyn-Tattoo</a>
      <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-nav">
        <div class="nav-item text-nowrap">
        </div>
      </div>
    </header>
    
    <div class="container-fluid">
      <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
          <div class="position-sticky pt-3 sidebar-sticky">
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
              <span>Managment</span>
              <a class="link-secondary" href="#" aria-label="Add a new report">
                <span data-feather="minus-circle" class="align-text-bottom"></span>
              </a>
            </h6>
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="{{ URL::to('/admin')}}">
                  <i class="fas fa-circle"></i>
                  Home
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ URL::to('/contents')}}">
                  <i class="fas fa-crow"></i>
                  Content
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ URL::to('/reports')}}">
                  <i class="fas fa-anchor"></i>
                  Reports
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ URL::to('/accessories')}}">
                  <i class="fas fa-water"></i>
                  Accessories
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ URL::to('/orders')}}">
                  <i class="fas fa-sun"></i>
                  Orders
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ URL::to('/planning')}}">
                  <i class="fas fa-beer"></i>
                  Planning
                </a>
              </li>
            </ul>
    
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
              <span>Studio</span>
              <a class="link-secondary" href="#" aria-label="Add a new report">
                <span data-feather="plus-circle" class="align-text-bottom"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="{{ URL::to('/employees')}}">
                    <i class="fas fa-dragon mr-1"></i>
                  Employees
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ URL::to('/clients')}}">
                  <i class="fas fa-snowflake"></i>
                  Clients
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ URL::to('/tattoos')}}">
                  <i class="fas fa-spider"></i>
                  Tattoos
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ URL::to('/visits')}}">
                  <i class="fas fa-toilet-paper"></i>
                  Visits
                </a>
              </li>
            </ul>
          </div>
        </nav>
    
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Admin Panel</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar" class="align-text-bottom"></span>
                This week
              </button>
            </div>
          </div>
        </main>
      </div>
    </div>


    <div class="content">

@include('flash-message')
@yield('content')

    </div>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
</body>
</html>