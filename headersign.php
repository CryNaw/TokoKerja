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
    </ul>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>