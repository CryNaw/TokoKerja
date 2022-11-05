<!DOCTYPE html>
<html lang="en">

<?php
require 'HeaderSeller.php'
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Profil Kerja</title>
</head>

<body>
  <div class="content-page py-2">
      <div class="content">
          <div class="container-fluid">
              <div class="card">
                  <div class="card-header">
                      Biodata Pengguna
                  </div>
                  <div class="card-body">
                      <label for="inputNama" class="form-label">Nama Toko:</label>
                      <input type="nama" class="form-control" id="inputNama">
                      <div>
                        <label for="inputKelamin" class="form-label"> :</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Laki-laki
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Perempuan
                        </label>
                      </div>
                      <div class="col-12">
                        <label for="inputAddress" class="form-label">Alamat :</label>
                        <input type="text" class="form-control" id="inputAddress">
                      </div>
                      <div class="col-12">
                        <label for="inputTelpon" class="form-label">No Telpon :</label>
                        <input type="number" class="form-control" id="inputTelpon">
                      </div>
                      <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Password Baru :</label>
                        <input type="password" class="form-control" id="inputPassword4">
                      </div>

                      <div class="col-12 py-2">
                        <button type="submit" class="btn bg-success bg-gradient text-white">Simpan</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>