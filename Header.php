<?php
ob_start();
#Connect Database    
require 'ConnectDatabase.php';
session_start();

if(isset($_SESSION['email'])){
  require 'HeaderSign.php';
}
else{
  require 'HeaderNoSign.php';
}

?>

<title>
  TokoKerja
</title>

