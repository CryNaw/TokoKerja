<?php
if(isset($_SESSION['email'])){
  $sql = "select namatoko from user where email = '".$_SESSION['email']."'";
  $result = $conn->query($sql);

  if($result->num_rows > 0 ){
    while($row = $result->fetch_assoc()){
      if($row['namatoko'] != null){
        $namatoko = $row['namatoko'];
      }
      else{          
        header('location:SellerProfile.php');
      }
    }        
  }    
}
else{ 
  header('location:login.php');
}
?>