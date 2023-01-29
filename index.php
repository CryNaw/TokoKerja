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
</head>
<?php   
  session_start();
  require 'ConnectDatabase.php';

  if(isset($_SESSION['email'])){    
    ?>
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
    <?php  
    }else{
    ?>
     <span>
      <nav class="navbar navbar-expand-lg bg-success bg-gradient py-1">     
      <div class="container-fluid">
        
          <a class="navbar-brand text-white" href="SearchProduct.php">TokoKerja</a> 
          <div class="position-absolute start-50 translate-middle-x fixed-top" style="margin-top: 5px;">
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
  <?php  
  }
  ?>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TokoKerja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<style>  
  .resize-image{
  height:150px;  
  width: 100%;
  object-fit: cover;
  object-position: center center;
  }  
 
  .text-ellipsis--2 {
    text-overflow: ellipsis;
    overflow: hidden;
    display: -webkit-box !important;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    white-space: normal;
  }

  a:hover .child{
      color:green;    
  }
</style>

<body>
    <div class="bg-success bg-gradient">     


        <a href="SearchProduct.php" style="text-decoration:none;">
            <h1 class="text-center text-white py-3">Toko Kerja</h1>
        </a>

        <h2 class="text-center text-white py-3">Temukan freelancer yang sempurna untuk anda</h2>

        <nav class="navbar">
            <div class="container-fluid  justify-content-center">                                
            </div>
        </nav>        
    </div>
    
    <nav class="navbar navbar-expand-lg bg-light py-0">
        <div class="container-fluid">
            <button class="navbar-toggler w-100" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                KATEGORI
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse  justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="SearchProduct.php?kategori=Desain_dan_Grafis" class="nav-link text-center"><img src="img/graphic-design.png" width="48" height="48">
                            <figcaption>Desain dan Grafis</figcaption>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="SearchProduct.php?kategori=Penulisan_dan_Penerjemahan.php" class="nav-link text-center"><img src="img/typing.png" width="48" height="48">
                            <figcaption>Penulisan dan Penerjemahan</figcaption>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="SearchProduct.php?kategori=Web_dan_Pemrograman.php" class="nav-link text-center"><img src="img/coding.png" width="48" height="48">
                            <figcaption>Web dan Pemrograman</figcaption>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="SearchProduct.php?kategori=Visual_dan_Studio.php" class="nav-link text-center"><img src="img/camera.png" width="48" height="48">
                            <figcaption>Visual dan Studio</figcaption>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="SearchProduct.php?kategori=Pemasaran_dan_Periklanan.php" class="nav-link text-center"><img src="img/growth.png" width="48" height="48">
                            <figcaption>Pemasaran dan Periklanan</figcaption>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="SearchProduct.php?kategori=Jasa_Konsultasi.php" class="nav-link text-center"><img src="img/brainstorming.png" width="48" height="48">
                            <figcaption>Jasa Konsultasi</figcaption>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="SearchProduct.php?kategori=Gaya_Hidup.php" class="nav-link text-center"><img src="img/lifestyle.png" width="48" height="48">
                            <figcaption>Gaya Hidup</figcaption>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <br>

    <div class="container">
      <div class="row">
        <h1>Featured</h1>
      </div>
    <div class="row justify-content-center">      
      <?php

      if ((isset($_GET['search'])) AND ($searchtext != null)) {
        $sql = "select * FROM productlist WHERE judul LIKE '%$searchtext%'";
        $result = $conn->query($sql);
      }elseif ((isset($_GET['kategori'])) AND ($searchtextkategori != null)) {
        $sql = "select * FROM productlist WHERE kategori LIKE '%$searchtextkategori%'";
        $result = $conn->query($sql);
      }else{
        $sql = "select * from productlist";
        $result = $conn->query($sql);
      }
      
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          $id = $row['id'];
          $sample1 = $row['sample1'];
          $email = $row['email'];
          $judul = $row['judul'];
          $harga = $row['harga'];

          $sql2 = "select namatoko FROM user WHERE email='".$email."' Limit 12";
          $result2 = $conn->query($sql2);
          if ($result2->num_rows > 0) {
            while ($row2 = $result2->fetch_assoc()) {
              $namatoko = $row2['namatoko'];
            }
          }
      ?>        
          <a class="col-6 col-md-4 col-lg-2" style="color:black; text-decoration:none; margin-bottom:10px" href="DetailProduct.php?id=<?php echo $id?>">
            <div class="card h-100">
              <img class="card-img-top resize-image" src=<?php echo $sample1 ?> alt="Sample1">
            
              <div class="card-body">
                <p class="child card-title text-truncate" style="font-weight:bold" ><?php echo $namatoko?></p> 
                <p class="child card-title text-truncate text-ellipsis--2"><?php echo $judul ?></p>
              </div>
              <div class="card-footer">
                <p class="child">Rp. <?php echo $harga ?></p>
              </div>
            </div>
          </a>   
      <?php
        }
      }    
      ?>                    
    </div>
  </div>
    
  <br>
    <h1 class="text-center">- Cara Menggunakan -</h1>
      
    <div class="container overflow-hidden text-center">
        <div class="row gy-5">
            <div class="col-6">
                <div class="p-3 border bg-light bg-gradient">
                    <h3>1. Cari</h3>
                    <p>Cari freelancer yang sesuai dengan kebutuhan anda dengan melihat portofolio, kemampuan, dan ulasan.</p>
                </div>
            </div>
            <div class="col-6">
                <div class="p-3 border bg-light bg-gradient">
                    <h3>2. Berdiskusi</h3>
                    <p>Diskusikan detail pekerjaan yang anda butuhkan dan diskusikan penawaran harga dari freelancer.</p>
                </div>
            </div>
            <div class="col-6">
                <div class="p-3 border bg-light bg-gradient ">
                    <h3>3. Bayar</h3>
                    <p>Pembayaran melalui Profil Kerja dijamin aman.</p>
                </div>
            </div>
            <div class="col-6">
                <div class="p-3 border bg-light bg-gradient ">
                    <h3>4. Setujui dan berikan ulasan</h3>
                    <p>Setujui hasil kerja freelancer dan berikan ulasan</p>
                </div>
            </div>
        </div>
    </div>

    <br><br>

    
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


</body>

</html>

<?php
require 'Footer.php';
?>