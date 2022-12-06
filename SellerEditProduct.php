<!DOCTYPE html>
<html>

<head>
  <?php

use Psr\Http\Message\RequestInterface;

  require "Header.php";  
  require "UserLoginCheck.php";
  require "UserNamaTokoCheck.php";

  $sql="Select * from productlist where id='".$_POST['id']."'";
  $result=$conn->query($sql);
  
  if($result->num_rows > 0 ){
    while($row = $result->fetch_assoc()){   
      $id = $row['id'];   
      $email = $row['email']; 
      $judul = $row['judul'];                      
      $kategori = $row['kategori'];
      $deskripsi = $row['deskripsi'];
      $waktu_pengiriman = $row['waktu_pengiriman'];      
      $harga = $row['harga'];
      $sample1 = $row['sample1'];  
      $sample2 = $row['sample2'];  
      $sample3 = $row['sample3'];  
    }
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

  .resize-image{
  height: 64px;  
  width: 100%;
  object-fit: contain; 
  object-position: center center;
}
</style>

<body>
  <form id="editproduct" action="SellerEditProductCheck.php" method="post" enctype="multipart/form-data">
    <div class="container">

      <div class="row justify-content-center">
        <div class="col-8">
          <h1 class="text-center">Ubah Informasi Produk Anda</h1>
          <hr>
        </div>
      </div>  

      <input form="editproduct" type="hidden" name="id" value="<?php echo $id?>"></input>

      <div class="row justify-content-center marginbot-10">
        <div class="col-md-2">
          Judul
        </div>
        <div class="col-md-6">
          <input class="textbox" type="text" name="judul" value="<?php echo $judul?>">
        </div>
      </div>

      <div class="row justify-content-center marginbot-10">
        <div class="col-md-2">
          Kategori
        </div>
        <div class="col-md-6">
          <select class="textbox text-center" name="kategori" selected="<?php echo $kategori?>">
            <option value="desain_dan_grafis">Desain dan Grafis</option>
            <option value="penulisan_dan_penerjemahan">Penulisan dan Penerjemahan</option>
            <option value="web_dan_pemrograman">Web dan Pemrograman</option>
            <option value="visual_dan_studio">Visual dan Studio</option>
            <option value="pemasaran_dan_periklanan">Pemasaran dan Periklanan</option>
            <option value="jasa_konsultasi">Jasa Konsultasi</option>
            <option value="gaya_hidup">Gaya Hidup</option>
          </select>
        </div>
      </div>

      <div class="row justify-content-center marginbot-10 align-items-center">
        <div class="col-md-2">
          Deskripsi
        </div>
        <div class="col-md-6">
          <textarea class="textbox" rows="12" form="editproduct" name="deskripsi"><?php echo $deskripsi ?></textarea>
        </div>
      </div>

      <div class="row justify-content-center marginbot-10">
        <div class="col-md-2 text-left">
          Waktu Pengiriman
        </div>       
        <div class="col-md-1">
          <input class="textbox" style="text-align:center;" type="numeric" min="1" max="99" name="waktu_pengiriman" value="<?php echo $waktu_pengiriman ?>">
        </div>
        <div class="col-md-5 text-left">
          Hari
        </div> 
      </div>
      
      <div class="row justify-content-center marginbot-10">
        <div class="col-md-1 text-left">
          Harga
        </div>
        <div class="col-md-1 text-right">
          Rp.
        </div>
        <div class="col-md-6">
          <input class="textbox" type="numeric" min="25000" name="harga" placeholder="25000" value="<?php echo $harga ?>">
        </div>
      </div>
      
      <div class="row justify-content-center marginbot-10">
        <div class="col-md-2 text-left">
          Images
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col">
            <?php 
              if($sample1 != null){
                echo "<img class='resize-image' src='$sample1'>";                
              }                      
              ?>
              <label for="sampleimage">Cover </label>              
              <input id="sampleimage" class="textbox" type="file" accept="image/*" name="sample1">
              
            </div>

            <div class="col">
            <?php 
              if($sample2 != null){
                echo "<img class='resize-image' src='$sample2'>";                
              }                      
              ?>
              <label for="sampleimage2">Sample 2</label>
              <input id="sampleimage2" class="textbox" type="file" accept="image/*" name="sample2">
              
            </div>

            <div class="col">
              <?php 
              if($sample3 != null){
                echo "<img class='resize-image' src='$sample3'>";                
              }                      
              ?>
              <label for="sampleimage3">Sample 3</label>
              <input id="sampleimage3" class="textbox" type="file" accept="image/*" name="sample3">
              
            </div>
          </div>
        </div>
      </div>

      <div class="row justify-content-center marginbot-10">
        <div class="d-grid gap-2 col-6 mx-auto py-2">
          <input class="textbox bg-success bg-gradient text-white btn-sm" type="submit" name="submit" value="Publish">
        </div>
      </div>
    </div>
  </form>  

</body>

</html>