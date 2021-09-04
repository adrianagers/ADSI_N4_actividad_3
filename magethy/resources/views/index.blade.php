@extends('layouts.footer')
@section('content')

<!-- inicio de menu -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
<a class="navbar-brand" href="#"><img src="{{URL::asset('image/logo2.JPG')}}" width="200%" height="100px"></a>
<div class="container-fluid">
  <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="#">Diurna</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Nocturna</a>
      </li>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Fines de semana</a>
      </li>
      
    </ul>
  </div>
</div>
</nav>
<!-- fin de menu -->

<!-- inicio img-->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{URL::asset('image/slider1.jpg')}}" height="620px" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{URL::asset('image/slider2.jpg')}}" height="620px" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{URL::asset('image/slider3.jpg')}}" height="620px" alt="Third slide">
    </div>
  </div>
</div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- finalización de carousel img -->

@endsection