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

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE email='" . $email . "' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    if ($password == $row["password"]) {
      if ($row["verified"] == 1) {

        //Mengisi email di Session
        $_SESSION['email'] = $row['email'];

        header('Location:SearchProduct.php');
      } else {
        header('location:LoginCheckNotVerified.php');
      }
    } else {
      echo "Wrong Password";
    }
  }
} else {
  echo "account not registered";
}
