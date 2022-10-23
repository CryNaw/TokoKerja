<!DOCTYPE html>
<html>
  <?php  
  #Connect Database    
  require 'Connectdatabase.php';

  session_start();
  $email = $_SESSION['email'];
  ?>

  <style>
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
  </style>

  <head> 
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container">

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

    </div>

  </body>
</html>


