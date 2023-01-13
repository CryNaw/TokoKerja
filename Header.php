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

