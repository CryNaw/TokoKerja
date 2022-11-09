<?php
require "Header.php";
require "UserLoginCheck.php";

//$id_product = $_POST['id_pembelian'];
$namatoko = $_POST['namatoko']; 
$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi']; 
$harga = $_POST['harga'];
?>

<style>
.row{
  margin:10px;
}

.pay-button{
  height:40px;
  border-radius: 5px;

  color:white;
  font-weight: bold;
  background-color: green;
  
  border-width: thin;
  border:none;
}
.catatan-text{
  height:100%;
  width:100%;
  border-radius: 5px;
  white-space: pre;
    
  background-color: transparent;
  
  border-width: 1px;  
}

</style>

<form id="pembayaran" action="" method="POST"></form>

<div class="container">
  <div class="row">
    <div class="col-12 col-md-8">
      <h1><img style="width:50px; height:50px; border-radius:50%;" src="img/brainstorming.png"><?php echo $namatoko ?></h1>
      <h3><?php echo $judul ?></h3>
      <h5><?php echo nl2br($deskripsi)?></h5>
      <hr>
      <h3>Catatan</h3>
      <div>        
          <textarea class="catatan-text" rows="12" form="pembayaran" name="deskripsi"></textarea>
      </div>


    </div>

    <div class="col-12 col-md-4">
      <div class="row border">
        <h1>Rp. <?php echo $harga?></h1>

        <div class="text-center">        
            <input form="" type="hidden" name="" value=""></input>
            <input form="" type="hidden" name="" value=""></input>
            <input form="" type="hidden" name="" value=""></input>
            <input form="pembayaran" class="pay-button" style="width: 80%; margin:10px;" type="submit" name="Bayar" value="Bayar"></input>        
        </div>
      </div>

    </div>
  </div>  
</div>

