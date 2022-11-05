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

        header('Location:searchproduct.php');
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
