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
require 'ConnectDatabase.php';

//Data menggunakan POST PHP dari page sebelumnya.
$email_buyer = $_POST['email_buyer'];
$email_seller = $_POST['email_seller'];
$product_id = $_POST['id'];
$judul = $_POST['judul'];
$namatoko = $_POST['namatoko']; 
$deskripsi = $_POST['deskripsi']; 
$harga = $_POST['harga'];
$waktu_pengerjaan = $_POST['waktu_pengerjaan'];
$sample1 = $_POST['sample1'];
$catatan = $_POST['catatan'];
$metodepembayaran = $_POST['metodepembayaran'];

//Membuat Tanggal menggunakan perintah PHP
$waktu_pemesanan = date("Y-m-d H:i:s");
//Insert To Database
$status = "PENDING";
$sql = "INSERT INTO orderlist(product_id, namatoko, judul, waktu_pengerjaan, waktu_pemesanan, deskripsi, harga, sample1, email_buyer, email_seller, catatan, status, paymentmethod)
values('".$product_id."','".$namatoko."','".$judul."','".$waktu_pengerjaan."','".$waktu_pemesanan."','".$deskripsi."','".$harga."','".$sample1."','".$email_buyer."','".$email_seller."','".$catatan."','".$status."','".$metodepembayaran."')";
$result = $conn->query($sql);

$sql = "Select * from orderlist where waktu_pemesanan = '".$waktu_pemesanan."'";
$result = $conn->query($sql);
if($result->num_rows > 0){
  while($row = $result->fetch_assoc()){
    $id = $row['id'];        
  }
}
echo $id;

header('location:Payment.php?id='.$id);





