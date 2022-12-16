<?php
  require "ConnectDatabase.php";  

  $order_id = $_POST['order_id'];  
  $Sender_Email = $_POST['Sender_Email'];  
  $Message = $_POST['Message'];      
  $Files = $_FILES['files'];
  
  $newfilename = "";

    if($Files['size'] > 0){      
      print_r($Files);
      $id = uniqid();
      $filename = $Files['name'];      
      $fileTMPName = $Files['tmp_name'];
      $extension = pathinfo( $filename , PATHINFO_EXTENSION);                 
  
      if($filename == "" or $filename == null){
        $newfilename = "";
      }else{
        $newfilename = "ChatFiles/$id.$extension";
        move_uploaded_file($fileTMPName, $newfilename);              
      }                    
    }                  
       
  $sql = "INSERT INTO chat_log (order_id, Sender_Email, Message, Files) VALUES ('".$order_id."','".$Sender_Email."','".$Message."','".$newfilename."')";
  $result = $conn->query($sql);    
  header('location:DetailOrder.php?id='.$order_id);

  
?>