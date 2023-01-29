<head>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-57C6ZZ233V"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-57C6ZZ233V');
</script>
</head><?php 
require 'Header.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT email FROM user WHERE email='".$email."' ";
$result = $conn->query($sql);

if ($result->num_rows > 0){
    echo "Your username is already registered";
}
else{
    $sql = "INSERT INTO user(email,password,verified) values('".$email."','".$password."','1')";
    $conn->query($sql);
    //Mengisi email di Session
    $_SESSION['email'] = $email;
    header('Location:index.php');
}

?>




