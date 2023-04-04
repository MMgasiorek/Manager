<!doctype html>
<html>
<head>
    <link rel="icon" type="image/x-icon" href="/img/background.png">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/home.js') }}" defer></script>
    <script src="{{ asset('js/gallery.js') }}" defer></script>
   
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/loader.css') }}" rel="stylesheet">
    <link href="{{ asset('css/gallery.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js">


</script>

</head>

<body class="bg-black" onload="myFunction()">

<div id="loader" class="text-center">
  <p class="plix">H</p>
  <p class="plix">E</p>
  <p class="plix">L</p>
  <p class="plix">L</p>
  <p class="plix">O</p>
  <p class="plix">O</p>
  <p class="plix">O</p>
</div>

<div style="display:none;" id="myDiv_0" class="animate-bottom">



<nav class="navbar navbar-expand-lg navbar-black bg-black text-white sticky-top" aria-label="Tenth navbar example">
    <div class="container-fluid">
      <button class="navbar-toggler link-info bg-info" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon bg-info"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link link-info" href="{{ URL::to('/')}}"><h4 class="hovi">Home</h4></a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-info" href="{{ URL::to('/about_us')}}"><h4 class="hovi">Team</h4></a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-info" href="{{ URL::to('/blog')}}"><h4 class="hovi">Blog</h4></a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-info" href="{{ URL::to('/special')}}"><h4 class="hovi">Promotion</h4></a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-info" href="{{ URL::to('/regulations')}}"><h4 class="hovi">Regulations</h4></a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-info" href="{{ URL::to('/contact')}}"><h4 class="hovi">Contact</h4></a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-info" href="{{ URL::to('/order_add')}}"><h4 class="hovi">Order</h4></a>
          </li>
      
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle link-info" href="#" data-bs-toggle="dropdown" aria-expanded="false">Artist</a>
            <ul class="dropdown-menu link-info">
              <li><a class="dropdown-item" href="{{ URL::to('/gallery')}}">Bart</a></li>
              <li><a class="dropdown-item" href="{{ URL::to('/gallery')}}">Caroline</a></li>
              <li><a class="dropdown-item" href="{{ URL::to('/gallery')}}">Nicodem</a></li>
              <li><a class="dropdown-item" href="{{ URL::to('/gallery')}}">Mike</a></li>
              <li><a class="dropdown-item" href="{{ URL::to('/gallery')}}">Kaja</a></li>
              <li><a class="dropdown-item" href="{{ URL::to('/gallery')}}">Kodżo</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
   @yield('content')

<div class="container-fluid opaciti" id="myDiv_19">
    <div class="row mt-4 border-top border-white text-white"  style="font-size:52px;">
            <div class="col-sm-12 col-md-3">
                <p class="fa fam fa-facebook"></p>
            </div>
            <div class="col-sm-12 col-md-3">
                <p class="fa fam fa-youtube"></p>
            </div>
            <div class="col-sm-12 col-md-3">
                <p class="fa fam fa-instagram"></p>
            </div>
            <div class="col-sm-12 col-md-3">
                <p class="fa fam fa-pinterest"></p>
            </div>
    </div>
</div>


</div>

</body>
</html>