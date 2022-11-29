<?php

require 'Header.php';
$email = $_SESSION['email'];

if(isset($_POST['submit'])){

  $statement = $conn->prepare("Insert into productlist (email, judul, kategori, deskripsi, waktu_pengiriman, harga, sample1, sample2, sample3) values (?,?,?,?,?,?,?,?,?)");  
  $statement->bind_param("ssssiisss", $email, $judul, $kategori, $deskripsi,$waktu_pengiriman , $harga, $newfilename0, $newfilename1 ,$newfilename2);

  $judul  = $_POST['judul'];
  $kategori = $_POST['kategori'];
  $deskripsi = $_POST['deskripsi'];
  $waktu_pengiriman = $_POST['waktu_pengiriman'];
  $harga = $_POST['harga'];  
  $sample = array($_FILES['sample1'],$_FILES['sample2'],$_FILES['sample3']);

  $file = array();
  $id = array();
  $filename = array();
  $extension = array();
  $fileTMPName = array();
  $newfilename = array();

  for($i = 0; $i < count($sample);$i++){    
      $file[$i] = $_FILES['sample'.$i+1];
      print_r($file[$i]);
      $id[$i] = uniqid();
      $filename[$i] = $_FILES['sample'.$i+1]['name'];      
      $fileTMPName[$i] = $_FILES['sample'.$i+1]['tmp_name'];
      $extension[$i] = pathinfo( $filename[$i] , PATHINFO_EXTENSION);

      if($filename[$i] == "" or $filename[$i] == null){
        $newfilename[$i] = "";
      }else{
        $newfilename[$i] = "ImagesSamples/$id[$i].$extension[$i]";
        move_uploaded_file($fileTMPName[$i], $newfilename[$i]);         
      }            
  } 

  $newfilename0 = $newfilename[0];  
  $newfilename1 = $newfilename[1];  
  $newfilename2 = $newfilename[2];  
  $statement->execute();      
  echo"Successfully Added";  
  header('location:SellerProductList.php');
}

?>