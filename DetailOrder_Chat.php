<?php
require "ConnectDatabase.php";  
require "UserLoginCheck.php";

$current_email = $_SESSION['email'];  

$sql = "Select * from Chat_log Where Order_id =".$order_id. "Order by id";
$result = $conn->query($sql);
if($result->num_rows > 0){
  while($row = $result->fetch_assoc()){
    $order_id = $row['order_id'];
    $sender_email = $row['sender_Email'];
    $Message = $row['Message'];
    $Files = $row['Files'];    
    $Files_extention = pathinfo($Files, PATHINFO_EXTENSION);
    
    if($current_email == $sender_email){
      if($Message != "")
      echo "<p class='border p-1'>".$Message."</p>";  
    }
    else{
      echo "<a href='/images/myw3schoolsimage.jpg' download><img src='/images/myw3schoolsimage.jpg'></a>";
    }
    
  }
}     