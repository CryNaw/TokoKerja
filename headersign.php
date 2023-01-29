<!doctype html>
<html lang="en">

<head>
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-57C6ZZ233V"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-57C6ZZ233V');
</script>
  <!-- CSS Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">  
  
  <!-- JavaScript Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="http://code.jquery.com/jquery-latest.js"></script> 
</head>

<body>
  <div>
    <nav class="navbar navbar-expand-lg bg-success bg-gradient py-1">     
      <div class="container-fluid">
        
        <a class="navbar-brand text-white" href="SearchProduct.php">TokoKerja</a>  
        
        <div class="position-absolute start-50 translate-middle-x fixed-top" style="margin-top: 5px;">
        <form class="d-flex" role="search" action="SearchProduct.php" method="GET">
        <input class="form-control me-2" type="search" placeholder="Pencarian" aria-label="search" name="search">
        <button class="btn btn-light" type="submit">Cari</button>
        </form>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
          <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link text-white" href="SellerProductList.php">Produk Anda</a>
              </li>

              <li>
                <a class="nav-link text-white" href="SellerOrderList.php">Pesanan Anda</a>
              </li>

              <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Akun
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                      <p style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: 200px;"><b class="px-2"><?php echo $_SESSION['email'] ?></b></p>
                  </li>
                  <li><a class="dropdown-item" href="PurchaseList.php">Daftar Pembelian</a></li>
                  <li><a class="dropdown-item" href="SellerProfile.php">Profil</a></li>                  
                  <li><a class="dropdown-item" href="Logout.php">Keluar</a></li>
                  </ul>
                </li>                    
            </ul>
          </div>                             
      </div>                
    </nav>   


    <nav class="navbar navbar-expand-lg bg-light py-0">
      <div class="container-fluid">
        <button class="navbar-toggler w-100" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span> Kategori Jasa
        </button>
        <div class="collapse navbar-collapse  justify-content-center" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="SearchProduct.php?kategori=desain_dan_grafis" class="nav-link text-center"><img src="img/graphic-design.png" width="48" height="48">
                <figcaption>Desain dan Grafis</figcaption>
              </a>
            </li>
            <li class="nav-item">
              <a href="SearchProduct.php?kategori=penulisan_dan_penerjemahan" class="nav-link text-center"><img src="img/typing.png" width="48" height="48">
                <figcaption>Penulisan dan Penerjemahan</figcaption>
              </a>
            </li>
            <li class="nav-item">
              <a href="SearchProduct.php?kategori=web_dan_pemrograman" class="nav-link text-center"><img src="img/coding.png" width="48" height="48">
                <figcaption>Web dan Pemrograman</figcaption>
              </a>
            </li>
            <li class="nav-item">
              <a href="SearchProduct.php?kategori=visual_dan_studio" class="nav-link text-center"><img src="img/camera.png" width="48" height="48">
                <figcaption>Visual dan Studio</figcaption>
              </a>
            </li>
            <li class="nav-item">
              <a href="SearchProduct.php?kategori=pemasaran_dan_periklanan" class="nav-link text-center"><img src="img/growth.png" width="48" height="48">
                <figcaption>Pemasaran dan Periklanan</figcaption>
              </a>
            </li>
            <li class="nav-item">
              <a href="SearchProduct.php?kategori=jasa_konsultasi" class="nav-link text-center"><img src="img/brainstorming.png" width="48" height="48">
                <figcaption>Jasa Konsultasi</figcaption>
              </a>
            </li>
            <li class="nav-item">
              <a href="SearchProduct.php?kategori=gaya_hidup" class="nav-link text-center"><img src="img/lifestyle.png" width="48" height="48">
                <figcaption>Gaya Hidup</figcaption>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>      
  </div>  
</body>

</html>