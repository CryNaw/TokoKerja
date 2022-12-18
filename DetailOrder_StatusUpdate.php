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

  $sql = "UPDATE orderlist SET status='$status' WHERE id=$order_id";
  $result = $conn->query($sql);    
  header('location:DetailOrder.php?id='.$order_id);
