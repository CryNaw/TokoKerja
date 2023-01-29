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

require 'Header.php';
$email = $_SESSION['email'];
if(isset($_POST['submit'])){
  $statement = $conn->prepare("UPDATE productlist SET judul=?, kategori=?, deskripsi=?, waktu_pengerjaan=?, harga=? WHERE id=?");  
  $statement->bind_param("sssiii", $judul, $kategori, $deskripsi, $waktu_pengerjaan , $harga, $id_product);

  $id_product = $_POST['id'];
  $judul  = $_POST['judul'];
  $kategori = $_POST['kategori'];
  $deskripsi = $_POST['deskripsi'];
  $waktu_pengerjaan = $_POST['waktu_pengerjaan'];
  $harga = $_POST['harga'];    

  $statement->execute();      
}

if(isset($_POST['submit'])){
  $sample1 =$_FILES['sample1'];  
  $sample2 =$_FILES['sample2'];     
  $sample3 =$_FILES['sample3'];       
  $sample = array($sample1,$sample2,$sample3);

  $file = array();
  $id = array();
  $filename = array();
  $extension = array();
  $fileTMPName = array();
  $newfilename = array();
  $imagesSamples = array();

  $n=0;

  for($i = 0; $i < count($sample);$i++){    
    if($sample[$i]['size'] > 0){      
      print_r($sample[$i]);
      $id[$i] = uniqid();
      $filename[$i] = $sample[$i]['name'];      
      $fileTMPName[$i] = $sample[$i]['tmp_name'];
      $extension[$i] = pathinfo( $filename[$i] , PATHINFO_EXTENSION);                 

      if($filename[$i] == "" or $filename[$i] == null){
        $newfilename[$i] = "";
      }else{
        $newfilename[$i] = "ImagesSamples/$id[$i].$extension[$i]";
        move_uploaded_file($fileTMPName[$i], $newfilename[$i]);              
      }            
      $imagesSamples = $i + 1; 
      $statement = $conn->prepare("UPDATE productlist SET Sample".$imagesSamples."=? WHERE id=?");  
      $statement->bind_param("si", $newfilename[$i], $id_product);
      $statement->execute(); 
    }                   
  }   
}
echo"Successfully Added";
header('location:SellerProductList.php'); 
?>