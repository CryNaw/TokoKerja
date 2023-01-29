<head>
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-57C6ZZ233V"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-57C6ZZ233V');
</script>
</head>
<?php
require "Header.php";
require "UserLoginCheck.php";

$email_buyer = $_POST['email_buyer'];
$email_seller = $_POST['email_seller'];
$id = $_POST['id'];
$judul = $_POST['judul'];
$namatoko = $_POST['namatoko']; 
$deskripsi = $_POST['deskripsi']; 
$harga = $_POST['harga'];
$sample1 = $_POST['sample1'];
$waktu_pengerjaan = $_POST['waktu_pengerjaan'];
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

<form id="pembayaran" action="CheckoutCheck.php" method="POST"></form>

<div class="container">
  <div class="row">
    <div class="col-12 col-md-8">
      <h1><img style="width:50px; height:50px; border-radius:50%;" src="img/brainstorming.png"><?php echo $namatoko ?></h1>
      <h3><?php echo $judul ?></h3>
      <h5><?php echo nl2br($deskripsi)?></h5>
      <br>
      <h5>Waktu Pengerjaan : <?php echo $waktu_pengerjaan ?> Hari</h5>
      <hr>
      <h3>Catatan</h3>
      <div>        
          <textarea class="catatan-text" rows="12" form="pembayaran" name="catatan"></textarea>
      </div>


    </div>

    <div class="col-12 col-md-4">
      <div class="row border rounded">                        
        <h1>Rp.<?php echo $harga?></h1>
        <hr>
        <h3>Metode Pembayaran</h3>
        <div> 
        <input form="pembayaran" type="radio" id="bank" name="metodepembayaran" value="Bank" required></input>
        <label for="bank">Bank Transfer</label>
        <input form="pembayaran" type="radio" id="ovo" name="metodepembayaran" value="OVO"></input>
        <label for="ovo">OVO</label>       
        </div>   
        <div class="text-center">        
          <input form="pembayaran" type="hidden" name="email_buyer" value="<?php echo $email_buyer?>"></input>
          <input form="pembayaran" type="hidden" name="email_seller" value="<?php echo $email_seller?>"></input>
          <input form="pembayaran" type="hidden" name="id" value="<?php echo $id?>"></input>
          <input form="pembayaran" type="hidden" name="judul" value="<?php echo $judul?>"></input>
          <input form="pembayaran" type="hidden" name="namatoko" value ="<?php echo $namatoko?>"></input>
          <input form="pembayaran" type="hidden" name="deskripsi" value="<?php echo $deskripsi?>"></input>
          <input form="pembayaran" type="hidden" name="harga" value="<?php echo $harga?>"></input>        
          <input form="pembayaran" type="hidden" name="sample1" value="<?php echo $sample1?>"></input>
          <input form="pembayaran" type="hidden" name="waktu_pengerjaan" value="<?php echo $waktu_pengerjaan?>"></input>          
          <button form="pembayaran" class="pay-button" style="width: 80%; margin:10px;" type="submit" name="Bayar" value="Bayar">Bayar</button>
        </div>
      </div>

    </div>
  </div>  
</div>

<?php
require 'Footer.php';
?>
