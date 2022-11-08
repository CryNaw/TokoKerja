<!DOCTYPE html>
<html>

<head>
  <?php
  require "Header.php";

  if (($_GET != null)) {
    $searchtext = $_GET['search'];
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
      if (isset($_GET['search']) and ($searchtext != null)) {
        $sql = "select * FROM productlist WHERE judul LIKE '%$searchtext%'";
        $result = $conn->query($sql);
      } else {
        $sql = "select * from productlist";
        $result = $conn->query($sql);
      }
      ?>

      <?php

      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
      ?>
          <a class="col-4 col-md-4 col-lg-2" style="color:black; text-decoration:none; margin-bottom:10px" href="detailproduct.php?id=<?php echo $row['id']?>">
            <div class="card h-70">
              <img class="card-img-top resize-image" src=<?php echo $row['sample1'] ?> alt="Sample1">
            
              <div class="card-body">
                <p class="child card-title text-truncate" style="font-weight:bold" >                  

                  <?php 
                    $sql2 = "select namatoko FROM user WHERE email='".$row['email']."'";
                    $result2 = $conn->query($sql2);
                    if ($result2->num_rows > 0) {
                      while ($row2 = $result2->fetch_assoc()) {
                        echo $row2['namatoko'];
                      }
                    }
                  ?>

                </p>
                <p class="child card-title text-truncate text-ellipsis--2"><?php echo $row['judul'] ?></p>
              </div>
              <div class="card-footer">
                <p class="child">Rp. <?php echo $row['harga']?></p>
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