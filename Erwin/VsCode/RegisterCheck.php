<?php 
require 'connectdatabase.php';

$email = $_POST['email'];
$password = $_POST['password'];

$statement = $conn->prepare("insert into user(email,password) value(?,?)");
$statement->bind_param("ss",$email,$password);
$statement->execute();

?>