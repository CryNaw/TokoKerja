<?php
require "ConnectDatabase.php";  

  $order_id = $_POST['order_id'];  
  $status = $_POST['status'];    
    
  $sql = "UPDATE orderlist SET status='$status' WHERE id=$order_id";
  $result = $conn->query($sql);    
  header('location:DetailOrder.php?id='.$order_id);
