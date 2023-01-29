<head>
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-57C6ZZ233V"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-57C6ZZ233V');
</script>
</head>
<?php
require "ConnectDatabase.php";  

  $orderid = $_POST['id'];
  $Files = $_FILES['proof'];            

  if($Files['size'] > 0){      
    print_r($Files);
    $id = uniqid();
    $filename = $Files['name'];      
    $fileTMPName = $Files['tmp_name'];
    $extension = pathinfo( $filename , PATHINFO_EXTENSION);                 

    if($filename == "" or $filename == null){
      $newfilename = "";
    }else{
      $newfilename = "ProofImages/$id.$extension";
      move_uploaded_file($fileTMPName, $newfilename);             
    }                    
  }                  

  $waktupembayaran = date("Y-m-d H:i:s");

  $sql = "UPDATE orderlist SET status='VERIFYING', proof_payment='".$newfilename."', waktu_pembayaran='".$waktupembayaran."' WHERE id='".$orderid."'";
  $result = $conn->query($sql);
  header('location:DetailOrder.php?id='.$orderid);

  ?>