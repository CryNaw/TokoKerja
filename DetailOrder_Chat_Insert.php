<?php
  require "ConnectDatabase.php";  

  $order_id = $_POST['order_id'];  
  $Sender_Email = $_POST['Sender_Email'];  
  $Message = $_POST['Message'];    
    
  $sql = "INSERT INTO chat_log (order_id, Sender_Email, Message) VALUES ('".$order_id."','".$Sender_Email."','".$Message."')";
  $result = $conn->query($sql);
  
?>