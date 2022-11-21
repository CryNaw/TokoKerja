<?php 
require 'Header.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT email FROM user WHERE email='".$email."' ";
$result = $conn->query($sql);

if ($result->num_rows > 0){
    echo "Your email is already registered";
}
else{
    $sql = "INSERT INTO user(email,password) values('".$email."','".$password."')";
    $conn->query($sql);
    header('Location:Login.php');
}

?>




