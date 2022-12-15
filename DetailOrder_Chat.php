<?php
require "ConnectDatabase.php";  

session_start();
$current_email = $_SESSION['email'];  
$order_id = $_POST['order_id'];

$sql = "Select * from Chat_log Where Order_id =".$order_id;
$result = $conn->query($sql);
if($result->num_rows > 0){
  while($row = $result->fetch_assoc()){
    $order_id = $row['order_id'];
    $sender_email = $row['Sender_Email'];
    $Message = $row['Message'];
    $Files = $row['Files'];
    $Files_extention = pathinfo($Files, PATHINFO_EXTENSION);
    
    if($current_email == $sender_email){
      if($Message){
        echo "<p class='border p-1' style='text-align:right;'>".$Message."</p>";
      }
    }
    else{
      if($Message){
        echo "<p class='border p-1' style='text-align:left;'>".$Message."</p>";
      }
    }
  }
}
?>
