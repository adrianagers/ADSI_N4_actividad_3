<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link bootstrap css-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- link bootstrap js-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
    <!-- inicio de menu -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="#"><img src="{{URL::asset('image/logo2.JPG')}}" width="100%" height="90px"></a>
<div class="container-fluid">
  <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="#">Docentes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('students.index')}}">Aprendices</a>
      </li>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('files.index')}}">fichas</a>
      </li>
      
    </ul>
  </div>
</div>
</nav>
<!-- fin de menu -->
    <!-- Content--->
        <div>
             @yield('contenido');
        </div>
    <!-- end Content-->
   <!-- footer -->
    <div class="p-3 mb-2 bg-info text-white fixed-bottom text-center">
    <h4>HECHO POR MANOS COLOMBIANAS 💖</h4>  
    </div>

    <!-- finalización footer -->


</body>
</html>