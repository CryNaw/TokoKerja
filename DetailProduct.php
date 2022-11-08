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
    $waktu = $row ['waktu'];
    $sample = array($row['sample1'],$row['sample2'],$row['sample3']);        
  }
}
?>

<style>  
.continue-button{
  border-radius: 5px;
  background-color: green;
  border-width: thin;
  border:none;

}

.contact-button{
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
  height:380px;  
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
        <img src="<?php echo $value ?>" class="mySlides resize-image" style="background-color:gray;">                      
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
      <h1 class="text-truncate text-ellipsis--2"><?php echo $judul;?></h1>
        <p class="text-truncate text-ellipsis--4"><?php echo  $deskripsi; ?></p>
        <p>Rp. <?php echo $harga; ?></p>
        <p>Waktu Pengerjaan : <?php echo $waktu?> hari</p>    
        
        <div class="col-12 text-center">
          <button class="continue-button" style="width:80%; margin:10px;" >Continue</button>                            
        </div>
      </div>
      
      <div class="row" style="margin-top:10px">
        <div class="col-12 text-center">
          <button class="contant-button" style="width:80%; margin:10px;">Contant Seller  </button>
        </div>
      </div>

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