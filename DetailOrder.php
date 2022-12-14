<?php
  require "Header.php";  
  require "UserLoginCheck.php";

  $current_email = $_SESSION['email'];  
  $order_id = $_GET['id'];

  $sql = "Select * from orderlist Where id =".$order_id;
  $result = $conn->query($sql);
  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
      $id = $row['id'];
      $xendit_id = $row['xendit_id'];
      $product_id = $row['product_id'];
      $namatoko = $row['namatoko'];      
      $judul = $row['judul'];  
      $waktu_pengerjaan = $row['waktu_pengerjaan'];
      $waktu_pemesanan = $row['waktu_pemesanan'];
      $waktu_tenggat = $row['waktu_tenggat'];
      $waktu_pengiriman =$row['waktu_pengiriman'];
      $deskripsi =$row['deskripsi'];                
      $harga = $row['harga'];
      $sample1 = $row['sample1'];     
      $email_buyer = $row['email_buyer'];     
      $email_seller = $row['email_seller'];     
      $catatan = $row['catatan'];
      $status = $row['status'];
      $invoice_url = $row['invoice_url'];                      
    }
  }

if($current_email == $email_buyer or $current_email == $email_seller){  
}else{
  echo "Ini Bukanlah Pesanan Anda!!";
  exit();
}

?>

<body>  

  <form id="chatbox" action="DetailOrder.php?id=".$order_id method="POST"></form>

  <div class="container mt-4">   

      <div class="card mx-auto" style="max-width:100%;">
        <div class="card-header">
          aldsfhasdkjfh
        </div>

        <div class="card-body p-4" style="height:512px; overflow:auto;">      
          <div id="Chat-Text"></div>                      
        </div>

        <div class="card-footer w-100 p-1">
          <div class="input-group">
            <div class="input-group-text border-0">
              <button class="btn btn-light">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-paperclip" viewBox="0 0 16 16">
                <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"/>
              </svg>
              </button>
            </div>
            <input id="chatbox" type="text" class="form-control border-0" name="chatbox" placeholder="Write a message">
          </div>          
        </div>    

    </div>
  </div>
</body>

<script>

</script>



