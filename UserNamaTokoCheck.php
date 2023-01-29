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
  header('location:Login.php');
}