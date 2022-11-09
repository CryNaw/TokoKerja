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
    $sample = array($row['sample1'],$row['sample2'],$row['sample3']);        
  }
 
}
?>

<style>  
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
</style>


<body>
<div class="container">

  <div class="row">
    <h1><?php echo $judul ?></h1>
  </div>

  <div class="row">

    <div class="col-6" >              
    <?php    
      foreach($sample as $value){
      if($value != "ImagesSamples/"){              
    ?>              
        <img src="<?php echo $value ?>" class="mySlides resize-image" style="background-color:gray;">                     
    <?php
      }      
    }
    ?>    

    <div style="text-align:center;">
    <br>             
    <?php    
      for($i = 0; $i < count($sample);$i++){
        if($sample[$i] != ""){     
    ?>
        <img class="dot" onclick="currentSlide($i)" src="<?php echo $sample[$i] ?>">
    <?php
        }                  
      }
    ?>  
    </div>
    
    </div>    

    <div class="col-6">
      ads,jfjalsdjfldkajflakdsj
    </div>

  </div>
  
  <div class="row">        
    <div class="col-12 col-md-8">      
      <h2>Deskripsi Produk</h2>
      <p><?php echo nl2br($deskripsi)?></p>     
      <hr>
      <h2>Seller</h2>
      <p><?php echo $namatoko?></p>      
      <br>
      <h2>Reviews</h2>
      <div class="row border">
        <h4>namaorang</h4>
        <p>wah sellernya bagus sekali</p>
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