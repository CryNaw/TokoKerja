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
require "ConnectDatabase.php";  

  $order_id = $_POST['order_id'];  
  $status = $_POST['status'];        
  
  if(isset($_POST['harga']) AND (isset($_POST['email_seller']))){
    $harga = $_POST['harga'];
    $email_seller = $_POST['email_seller'];

    if($harga <= 200000){
      $saldo = (floatval($harga) - 5000);
    }
    else{
      $saldo = (floatval($harga) - floatval($harga)*(2.5/100));
    }   
    $sql = "UPDATE user SET Saldo='".$saldo."' WHERE email='".$email_seller."'";
    $result = $conn->query($sql);        
  }

  if(isset($_POST['waktu_pengerjaan'])){
    $waktu_pengerjaan = $_POST['waktu_pengerjaan'];

    $waktu_tenggat = date("Y-m-d H:i:s", strtotime("+ ".$waktu_pengerjaan."days"));
    $sql = "UPDATE orderlist SET waktu_tenggat='$waktu_tenggat' WHERE id=$order_id";
    $result = $conn->query($sql);  
  }  

  $sql = "UPDATE orderlist SET status='$status' WHERE id=$order_id";
  $result = $conn->query($sql);    
  header('location:DetailOrder.php?id='.$order_id);
