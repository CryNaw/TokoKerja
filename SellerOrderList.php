<?php
require 'Header.php';
require 'UserLoginCheck.php';
require 'UserNamaTokoCheck.php';
?>

<style>
.button{
    display: block;
    width: 100%;
    height: 25%;
    background: transparent;
    color: black;
    font-weight: bold;
    line-height: 25px;
    padding: 10px;
    text-align: center;

    border-style:solid;  
    border-width:1px;  
    border-radius: 5px;    
    text-decoration: none;
}

.button:hover{ 
  color:green;
  border-width: 3px;
}

.box{
  display: block;
    width: 100%;
    height: 100%;
    background: transparent;
    color: black;
    font-weight: bold;
    line-height: 25px;
    padding: 10px;
    text-align: left;

    margin:10px;

    border-color: gray;
    border-style:solid;  
    border-width:1px;  
    border-radius: 5px;    
    text-decoration: none;
}

.box:hover{
  color:green;
  border-color: green;
  border-width: 3px;
}

.text-ellipsis--1 {
  text-overflow: ellipsis;
  overflow: hidden;
  display: -webkit-box !important;
  -webkit-line-clamp: 1;
  -webkit-box-orient: vertical;
  white-space: normal;
}

.text-ellipsis--2 {
  text-overflow: ellipsis;
  overflow: hidden;
  display: -webkit-box !important;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  white-space: normal;
}

.resize-image{
  height: 64px;  
  width: 100%;
  object-fit: contain;
  object-position: center center;
}
</style>

<div class="container">

  <div class="row">
    <div class="col-6 col-md-10 align-self-center">
      <h1 style="margin:10px">
        Pesanan Anda
      </h1>    
    </div>      
  </div>

  <?php
      $sql="Select * from orderlist where email_seller='".$_SESSION['email']."'";
      $result=$conn->query($sql);
      
      if($result->num_rows > 0 ){
        while($row = $result->fetch_assoc()){
          $id = $row['id'];
          $judul = $row['judul'];  
          $email_buyer = $row['email_buyer'];               
          $harga = $row['harga'];
          $waktu_pemesanan = $row['waktu_pemesanan'];
          $waktu_tenggat = $row['waktu_tenggat'];
          $waktu_pengiriman =$row['waktu_pengiriman'];
          $status = $row['status'];
          $sample1 = $row['sample1'];           

          $currenttime = strtotime(Date('Y-m-d H:i:s'));
          $waktu_tenggat = strtotime($waktu_tenggat);       
          $difference =  $waktu_tenggat - $currenttime;  
          $sisawaktu  = abs(round($difference / 86400));   
      ?>
  <a class="box" href="DetailOrder.php?id=<?php echo $id?>">
    <div class="row">
    <div class="col-6 col-md-2">
        <img src=<?php echo $sample1?> class="resize-image">
      </div>  
      <div class="col-6 col-md-3">
        <p class="text-ellipsis--2"><?php echo $judul?></p>
        Harga : Rp. <?php echo $harga ?>          
      </div>              
      <div class="col-6  col-md-3">
        <p class="text-ellipsis--2"><?php echo $email_buyer?></p>        
      </div>
      <div class="col-6 col-md-2">
        Sisa Waktu : <?php echo $sisawaktu ?>  
      </div>
      <div class="col-6 col-md-2">
        Status : <?php echo $status ?>  
      </div>
    </div>
  </a>
<?php 
   }
  }
  ?>
</div>

