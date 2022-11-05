<?php
ob_start();
#Connect Database    
require 'Connectdatabase.php';


session_start();

if(isset($_SESSION['email'])){
  require 'HeaderSign.php';
}
else{
  require 'HeaderNoSign.php';
}

if(isset($_SESSION['email'])){
  echo $_SESSION['email'];
}
else{
  echo 'session not set';
}

?>

<head>
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

