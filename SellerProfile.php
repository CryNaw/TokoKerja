<!DOCTYPE html>
<html lang="en">

<?php
require 'Header.php';

$email = $_SESSION['email'];

$sql = "SELECT namatoko FROM user WHERE email='".$email."' ";
$result = $conn->query($sql);

if(isset($_SESSION['email'])){

}
else{
  header('location:login.php');  
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">        
</head>

<body>
  <div class="content-page py-2">
      <div class="content">
          <div class="container-fluid">
              <div class="card">
                  <div class="card-header">
                      Profil Pengguna
                  </div>
                  <div class="card-body">
                    <form action="SellerProfile.php" method="POST">
                      <label for="namatoko" class="form-label">Nama Toko:</label>
                      <input type="text" class="form-control" id="namatoko" name="namatoko">
                      <div>                                        
                      <div class="col-12 py-2">
                        <button type="submit" class="btn bg-success bg-gradient text-white">Simpan</button>
                      </div>
                      <form>

                      <?php
                        if(isset($_POST['namatoko'])){
                          $namatoko = $_POST['namatoko'];

                          if($namatoko == ""){
                            echo 'Nama Toko tidak boleh kosong';
                          }
                          else{
                            $sql = "Update user Set namatoko = '" .$namatoko. "' where email = '" .$_SESSION['email']. "'";
                          $result = $conn->query($sql);

                          echo'Profil Diperbarui..';
                          }                                                    
                        }  
                        ?>

                  </div>
              </div>
          </div>
      </div>
  </div>    
</body>

</html>