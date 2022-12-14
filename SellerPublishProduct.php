<!DOCTYPE html>
<html>

<head>
  <?php

use Psr\Http\Message\RequestInterface;

  require "Header.php";  
  require "UserLoginCheck.php";
  require "UserNamaTokoCheck.php";
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
</style>

<body>
  <form id="publishproduct" action="SellerPublishProductCheck.php" method="post" enctype="multipart/form-data">
    <div class="container">

      <div class="row justify-content-center">
        <div class="col-8">
          <h1 class="text-center">Publish Your Service</h1>
          <hr>
        </div>

      </div>


      <div class="row justify-content-center marginbot-10">
        <div class="col-md-2">
          Judul
        </div>
        <div class="col-md-6">
          <input class="textbox" type="text" name="judul" required>
        </div>
      </div>

      <div class="row justify-content-center marginbot-10">
        <div class="col-md-2">
          Kategori
        </div>
        <div class="col-md-6">
          <select class="textbox text-center" name="kategori" required>
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
          <textarea class="textbox" rows="12" form="publishproduct" name="deskripsi" required></textarea>
        </div>
      </div>

      <div class="row justify-content-center marginbot-10">
        <div class="col-md-2 text-left">
          Waktu Pengerjaan
        </div>       
        <div class="col-md-1">
          <input class="textbox" style="text-align:center;" type="numeric" min="1" max="99" name="waktu_pengerjaan" placeholder="1" value="1" required>
        </div>
        <div class="col-md-5 text-left">
          Hari
        </div> 
      </div>
      
      <div class="row justify-content-center marginbot-10">
        <div class="col-md-2">
          Harga
        </div>        
        <div class="col-md-1">
          <input class="textbox" type="numeric" min="25000" name="harga" placeholder="25000" value="25000" required>
        </div>
        <div class="col-md-5">
          Rupiah
        </div>   
      </div>
      
      <div class="row justify-content-center marginbot-10">
        <div class="col-md-2 text-left">
          Images
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col">
              <label for="sampleimage">Cover</label>
              <input id="sampleimage" class="textbox" type="file" accept="image/*" name="sample1" required>
            </div>

            <div class="col">
              <label for="sampleimage2">Sample 2</label>
              <input id="sampleimage2" class="textbox" type="file" accept="image/*" name="sample2" required>
            </div>

            <div class="col">
              <label for="sampleimage3">Sample 3</label>
              <input id="sampleimage3" class="textbox" type="file" accept="image/*" name="sample3" required>
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