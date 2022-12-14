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
        Produk Anda
      </h1>    
    </div>    
    <div class="col-6 col-md-2 align-self-center">
      <div class="row justify-content-center">
        <a class="button" href="SellerPublishProduct.php" style="margin:10px">Tambahkan Produk</a>
      </div>
    </div>
  </div>

  <?php
      $sql="Select * from productlist where email='".$_SESSION['email']."'";
      $result=$conn->query($sql);
      
      if($result->num_rows > 0 ){
        while($row = $result->fetch_assoc()){
          $id = $row['id'];
          $judul = $row['judul'];
          $kategori = $row['kategori'];          
          $harga = $row['harga'];
          $waktu_pengerjaan = $row['waktu_pengerjaan'];
          $sample1 = $row['sample1'];           
      ?>
  <a class="box" href="DetailProduct.php?id=<?php echo $id ?>">
    <div class="row">
    <div class="col-6 col-md-3">
        <img src=<?php echo $sample1?> class="resize-image">
      </div>  
      <div class="col-6 col-md-3">
        <p class="text-ellipsis--2"><?php echo $judul?></p>
      </div>        
      <div class="col-6 col-md-2">
        <?php echo $kategori ?>  
      </div>
      <div class="col-6  col-md-2">
        Rp. <?php echo $harga ?>  
      </div>
      <div class="col-6 col-md-2">
        Waktu Pengerjaan : <?php echo $waktu_pengerjaan ?>  
      </div>
    </div>
  </a>
<?php 
   }
  }
  ?>
</div>

