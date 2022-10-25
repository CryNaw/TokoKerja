<!DOCTYPE html>
<html>

<head>
  <?php
  require "Header-index.php";

  if (($_GET != null)) {
    $searchtext = $_GET['search'];
  }

  ?>
</head>

<style>
  .textbox {
    width: 100%;
    height: 100%;
    border-radius: 5px;

    border-width: thin;
    border-color: round;
  }

  .marginbot-10 {
    margin-bottom: 10px;
  }

  .margin-10 {
    margin: 10px;
  }

  .text-ellipsis--2 {
    text-overflow: ellipsis;
    overflow: hidden;
    display: -webkit-box !important;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    white-space: normal;
  }

  p:hover {
    color: green;
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
          <a class="col-sm-3 col-md-2 border margin-10" style="color:black; text-decoration:none" href="">
            <div class="row">
              <img src=<?php echo $row['sample1'] ?> alt="Sample1" height="80%" width="100%">
            </div>
            <div class="row text-truncate text-ellipsis--2">
              <p class=""><?php echo $row['judul'] ?></p>
            </div>
            <div class="row border-top">
              Rp. <?php echo $row['harga'] ?>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>