<!DOCTYPE html>
<html>

<head>
  <?php
  require "headersign.php"
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

  <form id="publishproduct" action="publishproductcheck.php" method="post" enctype="multipart/form-data">
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
            <option value="illustration">Illustration</option>
            <option value="logo">Logo</option>
            <option value="website">Website</option>
            <option value="voice_actor">Voice Actor</option>
            <option value="application">Application</option>
          </select>
        </div>
      </div>

      <div class="row justify-content-center marginbot-10 align-items-center">
        <div class="col-md-2">
          Deskripsi
        </div>
        <div class="col-md-6">
          <textarea class="textbox" rows="12" form="publishproduct" name="deskripsi"></textarea>
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
        <div class="col-md-2 text-left">
          Images
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col">
              <input class="textbox" type="file" accept="image/*" name="sample1">
            </div>

            <div class="col">
              <input class="textbox" type="file" accept="image/*" name="sample2">
            </div>

            <div class="col">
              <input class="textbox" type="file" accept="image/*" name="sample3">
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>