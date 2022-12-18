<!DOCTYPE html>
<html lang="en">

<?php
require 'Header.php';
require 'UserLoginCheck.php';

$sql = "select * FROM user where email = '" .$_SESSION['email']."'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
  $email = $row['email'];
  $password = $row['password'];
  $verified = $row['verified'];
  $Date = $row['Date'];
  $namatoko = $row['namatoko'];
  $Saldo = $row['Saldo'];
  $withdraw = $row['withdraw'];
  $namabank = $row['namabank'];
  $norekening = $row['norekening'];
  $namalengkap = $row['namalengkap'];
  $nohp = $row['nohp'];  
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
              <label for="namatoko" class="form-label">Nama Toko : <?php echo $namatoko ?></label>
              <input type="text" class="form-control" id="namatoko" name="namatoko" value="<?php echo $namatoko ?>">              
              <div class="col-12 py-2">
                <button type="submit" class="btn bg-success bg-gradient text-white w-100">Simpan</button>
              </div>
            </form>
              <?php
                if(isset($_POST['namatoko'])){
                  $namatoko = $_POST['namatoko'];

                  if($namatoko == ""){
                    echo 'Nama Toko tidak boleh kosong';
                  }
                  else{
                  $sql = "Update user Set namatoko = '" .$namatoko. "' where email = '" .$_SESSION['email']. "'";
                  $result = $conn->query($sql);
                  header("Refresh:0");                  
                  }                                                    
                }  
                ?>

            </div>
          </div>
          

          <div class="card">
            <div class="card-header">
                    Pengambilan Dana
            </div>
            <div class="card-body">
              <form action="SellerProfile.php" method="POST">                
                <label for="namabank" class="form-label">Bank : <?php echo $namabank ?></label>
                <select name="namabank" id="namabank" class="form-control">
                  <option value="<?php echo $namabank ?>" selected hidden><?php echo $namabank ?></option>
                  <option value="BCA">BCA</option>
                  <option value="BRI">BRI</option>
                  <option value="Mandiri">Mandiri</option>
                  <option value="Mega">Mega</option>
                  <option value="BNI">BNI</option>
                </select>                
                <label for="norekening" class="form-label">No.Rekening : <?php echo $norekening ?></label>
                <input type="text" class="form-control" id="norekening" name="norekening" value="<?php echo $norekening ?>">
                <label for="namalengkap" class="form-label">Nama Lengkap : <?php echo $namalengkap ?> </label>
                <input type="text" class="form-control" id="namalengkap" name="namalengkap" value="<?php echo $namalengkap ?>">             
                <label for="nohp" class="form-label">No.HP : <?php echo $nohp ?></label>
                <input type="text" class="form-control" id="nohp" name="nohp" value="<?php echo $nohp ?>">               
                <div>                                        
                  *Informasi ini digunakan untuk Penarikan Saldo Anda
                </div>                
                <div class="col-12 py-2">
                  <button type="submit" class="btn bg-success bg-gradient text-white w-100">Simpan</button>
                </div>              
              </form>
                <?php
                  if((isset($_POST['namabank'])) || (isset($_POST['norekening'])) || (isset($_POST['namalengkap'])) || (isset($_POST['nohp']))){
                    $namabank = $_POST['namabank'];
                    $norekening = $_POST['norekening'];
                    $namalengkap = $_POST['namalengkap'];          
                    $nohp = $_POST['nohp'];          
              
                    if(($namabank == "") || ($norekening == "") || ($namalengkap == "") || ($nohp == "")){
                      echo 'Setiap Informasi di Pengambilan Dana tidak boleh kosong';
                    }
                    else{
                    $sql = "Update user Set namabank='".$namabank."', norekening='".$norekening."', namalengkap='".$namalengkap."', nohp='".$nohp."' where email ='".$_SESSION['email']."'";
                    $result = $conn->query($sql);

                    header("Refresh:0");            
                    }                                                    
                  }  
                  ?>
              <div>                
                <div class="row justify-content-center m-1">
                  <div class="col-4">
                    Saldo
                    <div class="form-control">
                      Rp. <?php echo $Saldo ?>
                    </div>
                  </div>
                  <div class="col-4">
                    Penarikan sedang diproses
                    <div class="form-control">
                      Rp. <?php echo $withdraw ?>
                    </div>
                  </div>
                </div>                  
                <div class="row justify-content-center m-1">
                  <div class="col-8 py-2">
                    <form action="SellerProfile.php" method="POST">
                      <input type="text" id="saldo" name="saldo" value="<?php echo $Saldo ?>" hidden>
                      <button type="submit" class="btn bg-success bg-gradient text-white w-100">Tarik Saldo</button>
                    </form>         
                    <?php                  
                      if(isset($_POST['saldo'])){                                                                                       
                        if(($namabank == "") || ($norekening == "") || ($namalengkap == "") || ($nohp == "")){
                          echo 'Silahkan Mengisi Informasi Pengambilan Dana terlebih dahulu';
                        }elseif($Saldo < 50000){
                          echo 'Saldo anda belum cukup untuk melakukan penarikan (Min :  Rp 50.000)';
                        }
                        else{
                        $sql = "Update user Set saldo='0', withdraw='".$Saldo."' where email='".$_SESSION['email']."'";
                        $result = $conn->query($sql);     
                        header("Refresh:0");                                      
                        }       
                      }                                                                   
                    ?>  
                  </div>                                        
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>    
</body>

</html>