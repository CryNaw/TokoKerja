<?php
 require "ConnectDatabase.php";  

 $order_id = 123;  
 $Sender_Email = "adfa";  
 $Message = "dummies txt";    
   
 $sql = "INSERT INTO chat_log (order_id, Sender_Email, Message) VALUES ('".$order_id."','".$Sender_Email."','".$Message."')";
 $result = $conn->query($sql);
?>