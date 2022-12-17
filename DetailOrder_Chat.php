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
        
    if($current_email == $sender_email){
      if($Message){
        if($Files == ""){             
          echo "<div class='border rounded p-1 m-1' style='text-align:right;'>".$Message."<span style='color:green'> | </span></div>";                                          
        }
        else{                       
          echo "<div class='border rounded p-1 m-1' style='text-align:right;'>";            
          echo "<a href='$Files' style='text-decoration: none;' download><img src='img/DownloadSGV.png' style='width:32px;height:20px;'>$Files<span style='color:green'> | </span></a>";                              
          echo "<p>".$Message."<span style='color:green'> | </span></p>";  
          echo "</div>";          
        }                      
      }
    }
    else{
      if($Message){
        if($Files == ""){
          echo "<p class='border rounded p-1 m-1' style='text-align:left;'><span style='color:green'> | </span>".$Message."</p>";                      
        }
        else{      
          echo "<div class='border rounded p-1 m-1' style='text-align:left;'>";                  
          echo "<a href='$Files' style='text-decoration: none;' download><span style='color:green;'> | </span><img src='img/DownloadSGV.png' style='width:32px;height:20px;'>$Files</a>";                  
          echo "<p><span style='color:green'> | </span>".$Message."</p>";  
          echo "</div>";
        }                      
      }
    }
  }
}
?>
