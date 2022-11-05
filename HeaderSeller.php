<?php
ob_start();
#Connect Database    
require 'Connectdatabase.php';

session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Profil Kerja</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-success bg-gradient py-1">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="home.php">Profil Kerja</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link text-white" href="PublishProduct.php">Publish Product</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Akun
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <p><b class="px-2"> Selamat Datang! </b></p>
                  </li>
                  <li><a class="dropdown-item" href="SellerProfile.php">Biodata</a></li>
                  <li><a class="dropdown-item" href="LogOut.php">Log Out</a></li>
                </ul>
              </li>
            </ul>
        </div>
    </div>
  </nav>
</body>
