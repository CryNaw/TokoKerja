<!doctype html>
<html lang="en">

<head>
  <!-- CSS Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">  
  
  <!-- JavaScript Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>

<body>   
  <span>
      <nav class="navbar navbar-expand-lg bg-success bg-gradient py-1">     
      <div class="container-fluid">
        
          <a class="navbar-brand text-white" href="SearchProduct.php">TokoKerja</a> 
          <div class="position-absolute start-50 translate-middle-x">
          <form class="d-flex" role="search" action="SearchProduct.php" method="GET">
          <input class="form-control me-2" type="search" placeholder="Pencarian" aria-label="search" name="search">
          <button class="btn btn-light " type="submit">Cari</button>
          </form>  
          </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button> 
          <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="Register.php">Daftar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="Login.php">Masuk</a>
                    </li>
                    
                </ul>
            </div>                             
      </div>                
    </nav>   
  </span>
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
      
      
  </body>

</html>