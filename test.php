<?php
for($i = 1; $i <= 10; $i++) {
  $sample = "$"."sample";
  $sample .= $i;
  echo $sample;
}
?>

$file2 = $_FILES['sample2'];
  print_r($file2);
  $id2 = uniqid();  
  $filename2 = $_FILES['sample2']['name'];
  $extension2 = pathinfo ( $filename2 , PATHINFO_EXTENSION);
  $fileTMPName2 = $_FILES['sample2']['tmp_name'];
  $newfilename2 = 'ImagesSamples/' . $id2 . $extension2;
  move_uploaded_file($fileTMPName2, $newfilename2);

  $file3 = $_FILES['sample3'];
  print_r($file3);
  $id3 = uniqid();
  $filename3 = $_FILES['sample3']['name'];
  $extension3 = pathinfo ( $filename3 , PATHINFO_EXTENSION);
  $fileTMPName3 = $_FILES['sample3']['tmp_name'];
  $newfilename3 = 'ImagesSamples/' . $id3 . $extension3;
  move_uploaded_file($fileTMPName3, $newfilename3);