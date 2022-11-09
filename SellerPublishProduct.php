<!DOCTYPE html>
<html>

<head>
  <?php
  require "Header.php";  

  if(isset($_SESSION['email'])){
    $sql = "select namatoko from user where email = '".$_SESSION['email']."'";
    $result = $conn->query($sql);
  
    if($result->num_rows > 0 ){
      while($row = $result->fetch_assoc()){
        if($row['namatoko'] != null){
          $namatoko = $row['namatoko'];
        }
        else{          
          header('location:sellerprofile.php');
        }
      }        
    }    
  }
  else{ 
    header('location:login.php');
  }
  ?>


</head>

<style>
  .textbox {
    width: 100%;
    height: 100%;
    border-radius: 5px;

    border-width: thin;
    border-color: round;
  }

  .marginbot-10 {
    margin-bottom: 10px;
  }
</style>

<body>
  <form id="publishproduct" name="publishproduct" action="sellerpublishproductcheck.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
    <div class="container">

      <div class="row justify-content-center">
        <div class="col-8">
          <h1 class="text-center">Publish Your Service</h1>
          <hr>
        </div>

      </div>


      <div class="row justify-content-center marginbot-10">
        <div class="col-md-2">
          Judul
        </div>
        <div class="col-md-6">
          <input class="textbox" type="text" name="judul">
        </div>
      </div>

      <div class="row justify-content-center marginbot-10">
        <div class="col-md-2">
          Kategori
        </div>
        <div class="col-md-6">
          <select class="textbox text-center" name="kategori">
            <option value="desain_dan_grafis">Desain dan Grafis</option>
            <option value="penulisan_dan_penerjemahan">Penulisan dan Penerjemahan</option>
            <option value="web_dan_pemrograman">Web dan Pemrograman</option>
            <option value="visual_dan_studio">Visual dan Studio</option>
            <option value="pemasaran_dan_periklanan">Pemasaran dan Periklanan</option>
            <option value="jasa_konsultasi">Jasa Konsultasi</option>
            <option value="gaya_hidup">Gaya Hidup</option>
          </select>
        </div>
      </div>

      <div class="row justify-content-center marginbot-10 align-items-center">
        <div class="col-md-2">
          Deskripsi
        </div>
        <div class="col-md-6">
          <textarea class="textbox" rows="12" form="publishproduct" name="deskripsi" style="white-space: pre;"></textarea>
        </div>
      </div>

      <div class="row justify-content-center marginbot-10">
        <div class="col-md-1 text-left">
          Harga
        </div>
        <div class="col-md-1 text-right">
          Rp.
        </div>
        <div class="col-md-6">
          <input class="textbox" type="number" min="25000" name="harga">
        </div>
      </div>

      <div class="row justify-content-center marginbot-10">
        <div class="col-md-2">
          Waktu Pengerjaan
        </div>
        <div class="col-md-6">
          <input class="textbox" type="number" max="99" min="1" maxlength="2" name="waktu"></textarea>
        </div>
      </div>

      <div class="row justify-content-center marginbot-10">
        <div class="col-md-2 text-left">
          Images
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col">
              <label for="sampleimage">Cover</label>
              <input id="sampleimage" class="textbox" type="file" accept="image/*" name="sample1">
            </div>

            <div class="col">
              <label for="sampleimage2">Sample 2</label>
              <input id="sampleimage2" class="textbox" type="file" accept="image/*" name="sample2">
            </div>

            <div class="col">
              <label for="sampleimage3">Sample 3</label>
              <input id="sampleimage3" class="textbox" type="file" accept="image/*" name="sample3">
            </div>
          </div>
        </div>
      </div>

      <div class="row justify-content-center marginbot-10">
        <div class="d-grid gap-2 col-6 mx-auto py-2">
          <input class="textbox bg-success bg-gradient text-white btn-sm" type="submit" name="submit" value="Publish">
        </div>
      </div>
    </div>
  </form>  

<script>
  function validateForm() {
    const arr = ['judul', 'kategori', 'deskripsi', 'harga', 'waktu', 'sample1'];
    let valid = 1;  
    for (i  = 0; i < arr.length; i++){
      var x = document.forms["publishproduct"][arr[i]].value;
      if (x == "") {      
        valid = 0;
      }
    }
    if(valid == 0){
      alert("judul, kategori, deskripsi, harga, waktu, cover wajib diisi");
      return false;
  }
}
</script>
</body>

</html>