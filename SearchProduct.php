<!DOCTYPE html>
<html>

<head>
  <?php
  require "Header.php";

  if (isset($_GET['search'])){
    $searchtext = $_GET['search'];        
  }elseif(isset($_GET['kategori'])) {
    $searchtextkategori = $_GET['kategori'];
  }

  ?>
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
  <div class="container">
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

          $sql2 = "select namatoko FROM user WHERE email='".$email."'";
          $result2 = $conn->query($sql2);
          if ($result2->num_rows > 0) {
            while ($row2 = $result2->fetch_assoc()) {
              $namatoko = $row2['namatoko'];
            }
          }
      ?>        
          <a class="col-12 col-md-6 col-lg-4" style="color:black; text-decoration:none; margin-bottom:10px" href="DetailProduct.php?id=<?php echo $id?>">
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
      } else {
        echo "Product Not Found";
      }
      ?>                    
    </div>
  </div>
 

</body>

</html>

<?php
require 'Footer.php';
?>