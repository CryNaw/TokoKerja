<!DOCTYPE html>
<html>
<?php
#Connect Database    
require 'Connectdatabase.php';

session_start();
$email = $_SESSION['email'];
?>

<!-- <style>
    *{
      font-family: Arial;
    }

    .button-header{
      background-color: transparent;
      border:none
    }

    .textbox-search{      
      width:100%;
      border-radius: 5px;

      border-width: thin; 
      border-color: round;
            
      padding-left:20px;

      margin-top:10px;
      margin-bottom:10px;
    }

    .button-submit{
      width:10%;
      border-radius: 5px;

      border-width: thin; 
      border-color: round;
            
      padding-left:20px;

      margin-top:10px;
      margin-bottom:10px;
    }
  </style> -->

<head>
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>

  <!-- <div class="container">

      <div class="row align-items-center">
        <div class="col-2">    
          <h1 style="color:black; cursor:pointer" onclick="window.location.href='searchproduct.php'">Toko<span style="color:red">Kerja</span></h1>
        </div>    
        
        <form id="search" action="SearchProduct.php" method="get"></form>
        <div class="col-7">
          <input type="text" class="textbox-search" placeholder="Find Your Service Here" form="search" name="search">          
        </div>
        <div class="col-1">
          <input type="submit" form="search" name="submit" value="Find">
        </div>           

        <div class="col-2">                    
            <button class="button-header" type="submit" onclick="window.location.href='login.php'">Login</button>                              
            <button class="button-header" style="color:red" onclick="window.location.href='register.php'">Register</button>          
        </div>   

      </div>

      <div class="row align-items-center">
        <div class="col-12">
          <hr>
        </div>
      </div>

    </div> -->

  <div class="bg-success bg-gradient py-1">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link active text-white" aria-current="page" href="index.php">Profil Kerja</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="Register.php">Daftar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="Login.php">Masuk</a>
      </li>
      <li>
        <div class="container-fluid">
          <form class="d-flex" role="search" action="SearchProduct.php" method="GET">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
            <button class="btn btn-light" type="submit">Search</button>
          </form>
        </div>
      </li>
    </ul>
  </div>
  <nav class="navbar navbar-expand-lg bg-light py-0">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse  justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="grafisdandesain.php" class="nav-link text-center"><img src="img/graphic-design.png" width="48" height="48">
              <figcaption>Desain dan Grafis</figcaption>
            </a>
          </li>
          <li class="nav-item">
            <a href="penulisandanpenerjemahan.php" class="nav-link text-center"><img src="img/typing.png" width="48" height="48">
              <figcaption>Penulisan dan Penerjemahan</figcaption>
            </a>
          </li>
          <li class="nav-item">
            <a href="webdanpemrograman.php" class="nav-link text-center"><img src="img/coding.png" width="48" height="48">
              <figcaption>Web dan Pemrograman</figcaption>
            </a>
          </li>
          <li class="nav-item">
            <a href="visualdanstudio.php" class="nav-link text-center"><img src="img/camera.png" width="48" height="48">
              <figcaption>Visual dan Studio</figcaption>
            </a>
          </li>
          <li class="nav-item">
            <a href="pemasarandanperiklanan.php" class="nav-link text-center"><img src="img/growth.png" width="48" height="48">
              <figcaption>Pemasaran dan Periklanan</figcaption>
            </a>
          </li>
          <li class="nav-item">
            <a href="jasakonsultasi.php" class="nav-link text-center"><img src="img/brainstorming.png" width="48" height="48">
              <figcaption>Jasa Konsultasi</figcaption>
            </a>
          </li>
          <li class="nav-item">
            <a href="gayahidup.php" class="nav-link text-center"><img src="img/lifestyle.png" width="48" height="48">
              <figcaption>Gaya Hidup</figcaption>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>