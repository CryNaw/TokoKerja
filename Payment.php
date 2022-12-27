<?php 
require 'Header.php';

$orderid = $_GET['id'];

$sql = "Select * from orderlist where id = '".$orderid."'";
$result = $conn->query($sql);
if($result->num_rows > 0){
  while($row = $result->fetch_assoc()){
    $id = $row['id'];
    $namatoko = $row['namatoko'];
    $judul = $row['judul'];
    $harga = $row['harga'];  
    
    
    $status = $row['status'];
    $email_buyer = $row['email_buyer'];    
    $paymentmethod = $row['paymentmethod'];     
  }
}

if($_SESSION['email'] != $email_buyer){
  echo 'Ini bukanlah pembayaran anda!';
  exit();
}

if($status != 'PENDING'){
  echo 'Anda sudah melakukan pembayaran, Silahkan menunggu konfirmasi seller.';
  exit();
}
?>
<style>
.confirm-button{
  height:40px;
  border-radius: 5px;

  color:white;
  font-weight: bold;
  background-color: green;
  
  border-width: thin;
  border:none;
}
</style>

<div class="container">
  <div class="row">
    <div class="col-12 text-center">
      <h1>PAYMENT</h1>
    </div>    
  </div>

  <div class="row justify-content-center">
    <div class="col-12 col-lg-6 border">
      <h1><?php echo $judul; ?></h1>
      <h5>Seller : <?php echo $namatoko; ?></h5>
      <br>
      <h4>Harga : <?php echo $harga; ?></h4>
      <h4>Kode Unik : <?php echo $id; ?></h4>
      <hr>
      <h1>Total Harga: <?php echo strval($harga) + strval($id) ?></h4>
    </div>    

    <?php if($paymentmethod == "OVO"){ ?>

    <div class="col-12 col-lg-6">
      <h1 class="text-center">OVO</h1>
      <p>Silahkan mengirim dana sebesar <b>Rp.<?php echo strval($harga) + strval($id) ?></b> melalui OVO ke nomor <b>0853-4225-9100</b></p>      
      <p>*Pastikan Nominal yang diberikan sesuai dengan <b>Total Harga</b> untuk memudahkan verifikasi</p>
      
      <form action="Payment_Check.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="id" value="<?php echo $id ?>" hidden>
        <input type="file" accept="*/img" name="proof" required>
        <button class="w-100 confirm-button">Konfirmasi Pembayaran</button>
      </form>
    </div>   

      <?php }elseif ($paymentmethod == "Bank"){?>

      <div class="col-12 col-lg-6">
        <h1 class="text-center">BANK</h1>
        <p>Silahkan mengirim dana sebesar <b>Rp.<?php echo strval($harga) + strval($id) ?></b> melalui Transfer Bank ke nomor rekening <b>7970308711</b> atas nama <b>Erwin Lowandy</b></p>      
        <p>*Pastikan Nominal yang diberikan sesuai dengan <b>Total Harga</b> untuk memudahkan verifikasi</p>
        
        <form action="Payment_Check.php" method="POST" enctype="multipart/form-data">
          <input type="text" name="id" value="<?php echo $id ?>" hidden>
          <input type="file" accept="*/img" name="proof" required>
          <button class="w-100 confirm-button">Konfirmasi Pembayaran</button>
        </form>
      </div>   
    <?php } ?>
  </div>  
</div>