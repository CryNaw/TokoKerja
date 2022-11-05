<?php
require 'Header.php';

$sql = "Select * from productlist where id='" .$_GET['id']. "'";
$result = $conn->query($sql);

if($result->num_rows > 0){
  while($row = $result->fetch_assoc()){
    $id = $row['id'];
    $email = $row['email'];
    $judul = $row['judul'];
    $kategori = $row['kategori'];
    $deskripsi = $row['deskripsi'];
    $harga = $row['harga'];
    $sample1 =$row['sample1'];
    $sample2 =$row['sample2'];
    $sample3 =$row['sample3'];
  }
 
}
?>

<style>
.carousel-img {    
    height: 450px;
    object-fit: fill;
}
</style>


<body>
<div class="container">

  <div class="row">
    <h1><?php echo $judul ?></h1>
  </div>

  <div class="row">

    <div class="col-6">

      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100 carousel-img" src="<?php echo $sample1 ?>" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 carousel-img" src="<?php echo $sample2 ?>" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 carousel-img" src="<?php echo $sample3 ?>" alt="Third slide">
          </div>
        </div>

        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>

    <div class="col-6">
      ads,jfjalsdjfldkajflakdsj
    </div>

  </div>
  
</div>  


</body>