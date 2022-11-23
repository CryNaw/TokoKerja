<?php
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
