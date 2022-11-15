<?php
require 'Header.php';

$sql = "Select * from productlist where id='" .$_GET['id']. "'";
$result = $conn->query($sql);

if(isset($_SESSION['email'])){
  $current_email = $_SESSION['email'];
}else{
  $current_email = "";
}



if($result->num_rows > 0){
  while($row = $result->fetch_assoc()){
    $id = $row['id'];
    $email = $row['email'];
    $judul = $row['judul'];
    $kategori = $row['kategori'];
    $deskripsi = $row['deskripsi'];
    $deskripsi_pendek = $row['deskripsi_pendek'];
    $harga = $row['harga'];
    $waktu = $row['waktu_pengiriman'];
    $sample = array($row['sample1'],$row['sample2'],$row['sample3']);        
  }
}

$sql = "Select namatoko from user where email='" .$email. "'";
$result = $conn->query($sql);

if($result->num_rows > 0){
  while($row = $result->fetch_assoc()){
    $namatoko = $row['namatoko'];
  }
}
?>

<style>  
.row{
  margin:10px
}
.continue-button{
  height:40px;
  border-radius: 5px;

  color:white;
  font-weight: bold;
  background-color: green;
  
  border-width: thin;
  border:none;
}

.contact-button{
  color:black;
  background-color:lightgray;
  
  height:40px;
  border-radius: 5px;

  border-width: thin;
  border: none;
}
.dot {
  cursor: pointer;
  height: 80px;
  width: 15%;
  margin: 0 2px;
  border: 5px;
  object-fit: cover;
  transition: border-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

.resize-image{
  height: 568px;  
  width: 100%;
  object-fit: contain;
  object-position: center center;
}
.mySlides{
  display:none;
}

.text-ellipsis--2 {
    text-overflow: ellipsis;
    overflow: hidden;
    display: -webkit-box !important;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    white-space: normal;
  }

  .text-ellipsis--6 {
    text-overflow: ellipsis;
    overflow: hidden;
    display: -webkit-box !important;
    -webkit-line-clamp: 6;
    -webkit-box-orient: vertical;
    white-space: normal;
  }
</style>


<body>
<div class="container">  
  <div class="row">  
    <h1 class="text-truncate text-ellipsis--2"><?php echo $judul;?></h1>

    <div class="col-12 col-md-8" >              
      <?php    
        foreach($sample as $value){
        if($value != ""){              
      ?>              
          <img src="<?php echo $value ?>" class="mySlides resize-image" style="background-color:rgb(248, 248, 248)">                      
      <?php
        }
      }
      ?>

      <div style="text-align:center;">
      <br>
      <?php
          if($sample[0] != ""){     
      ?>
          <img class="dot" onclick="currentSlide(1)" src="<?php echo $sample[0] ?>">
      <?php
          }                        
      ?>  

      <?php         
          if($sample[1] != ""){     
      ?>
          <img class="dot" onclick="currentSlide(2)" src="<?php echo $sample[1] ?>">
      <?php
          }                        
      ?>  

      <?php         
          if($sample[2] != ""){
      ?>
          <img class="dot" onclick="currentSlide(3)" src="<?php echo $sample[2] ?>">
      <?php
          }                        
      ?>  
      </div>
    </div>    

    <div class="col-12 col-md-4">
      <div class="row border">
        <h1 class="text-truncate text-ellipsis--2"><?php echo $judul?></h1>
        <p class="text-truncate text-ellipsis--6"><?php echo  $deskripsi_pendek; ?></p>
        <p>Waktu Pengerjaan : <?php echo $waktu?> hari</p>
        <br>
        <p style="font-weight:bold; font-size:30px; color:green;">Rp. <?php echo $harga; ?></p>
        
        
        <div class="text-center">
          <?php if($current_email != $email){ ?>
            <form action="checkout.php" method="post">
            <input type="hidden" name="email_buyer" value="<?php echo $current_email?>"></input>
            <input type="hidden" name="email_seller" value="<?php echo $email?>"></input>
            <input type="hidden" name="judul" value="<?php echo $judul?>"></input>
            <input type="hidden" name="namatoko" value ="<?php echo $namatoko?>"></input>
            <input type="hidden" name="deskripsi" value="<?php echo $deskripsi?>"></input>
            <input type="hidden" name="harga" value="<?php echo $harga?>"></input>            
            <input type="submit" class="continue-button" style="width:80%; margin:10px;" value="Continue"></input>       
            </form>        
          <?php } else{ ?>
            <a href="editproduct.php?id=<?php echo $id?>"><button class="continue-button" style="width:80%; margin:10px;">Edit</button></a>
          <?php } ?>                 
        </div>
      </div>          
    </div>

  </div>
  
  <div class="row">        
    <div class="col-12 col-md-8">      
      <h2>Deskripsi Produk</h2>
      <p><?php echo nl2br($deskripsi)?></p>     
      <hr>
      <h2>Seller</h2>
      <p><?php echo $namatoko?></p>      
    </div>
  </div>

</div>  

<script>
let slideIndex = 1;
showSlides(slideIndex);

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>


</body>