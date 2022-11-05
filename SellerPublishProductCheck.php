<?php

require 'Header.php';
$email = $_SESSION['email'];

$sql = "select namatoko from user where email = '".$email."'";
    $result = $conn->query($sql);
  
    if($result->num_rows > 0 ){
      while($row = $result->fetch_assoc()){
        $namatoko = $row['namatoko'];
      }        
    }
    else{
      header('location:sellerprofile.php');
    }

if(isset($_POST['submit'])){

  $judul  = $_POST['judul'];
  $kategori = $_POST['kategori'];
  $deskripsi = $_POST['deskripsi'];
  $harga = $_POST['harga'];  

  $file1 = $_FILES['sample1'];
  print_r($file1);
  $filename1 = $_FILES['sample1']['name'];
  $fileTMPName1 = $_FILES['sample1']['tmp_name'];
  $newfilename1 = 'ImagesSamples/' . $filename1;
  move_uploaded_file($fileTMPName1, $newfilename1);

  $file2 = $_FILES['sample2'];
  print_r($file2);
  $filename2 = $_FILES['sample2']['name'];
  $fileTMPName2 = $_FILES['sample2']['tmp_name'];
  $newfilename2 = 'ImagesSamples/' . $filename2;
  move_uploaded_file($fileTMPName2, $newfilename2);

  $file3 = $_FILES['sample3'];
  print_r($file3);
  $filename3 = $_FILES['sample3']['name'];
  $fileTMPName3 = $_FILES['sample3']['tmp_name'];
  $newfilename3 = 'ImagesSamples/' . $filename3;
  move_uploaded_file($fileTMPName3, $newfilename3);

  $sql = "Insert into productlist (email, judul, kategori, deskripsi, harga, sample1, sample2, sample3) values ('".$email."','".$judul."','".$kategori."','".$deskripsi."','".$harga."','".$newfilename1."','".$newfilename2."','".$newfilename3."')";
  $result = $conn-> query($sql);
  echo"Successfully Added";

  header('location:SellerProductList.php');
}

?>