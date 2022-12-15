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

<head>


<!-- <script> 
$("#SendButton").submit(function(e) {
  e.preventDefault();
  $.ajax({
    url: "DetailOrder_Chat_Insert.php",
    type: "POST",
    data: {
      order_id: <?php echo $order_id ?>,
      Sender_Email: "<?php echo $current_email ?>",
      Message: "coba be",
    },            
    success: function(data){
        $("#results").html(data);        
    }    
  });
});
</script> -->
</head>

<body>  
<div id="results"></div>

  <div class="container mt-4">   
      <div class="card mx-auto" style="max-width:100%;">
        <div class="card-header">
          <?php echo $namatoko ?>
          <?php echo $judul ?>
          <?php echo $deskripsi ?>
          <?php echo $harga ?>
        </div>

        <div class="card-body p-4" style="height:512px; overflow:auto;">      
          <div id="ChatText">
            <?php
              $sql = "Select * from Chat_log Where Order_id =".$order_id;
              $result = $conn->query($sql);
              if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                  $order_id = $row['order_id'];
                  $sender_email = $row['Sender_Email'];
                  $Message = $row['Message'];
                  $Files = $row['Files'];
                  $Files_extention = pathinfo($Files, PATHINFO_EXTENSION);
                  
                  if($current_email == $sender_email){
                    if($Message){
                      echo "<p class='border p-1' style='text-align:right;'>".$Message."</p>";
                    }
                  }
                  else{
                    if($Message){
                      echo "<p class='border p-1' style='text-align:left;'>".$Message."</p>";
                    }
                  }
                }
              }
            ?>
          </div>  
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
            <input id="chattext" type="text" class="form-control border-0" name="ChatText" placeholder="Write a message" required>
            <button id="SendButton" type="submit" class="input-group-text border-0" onclick="kirimpesan()">Send</button>
          </div>          
        </div>    

    </div>
  </div>
</body>


<script>
  function LoadChat(){
    $("#ChatText").load("DetailOrder_Chat.php",{
      order_id: <?php echo $order_id ?>
    })    
  };
  setInterval(LoadChat, 1000);

  
  var pesan = document.getElementById('chattext');
  function kirimpesan(){    
    $("#results").load("DetailOrder_Chat_Insert.php",{
      order_id: <?php echo $order_id ?>,
      Sender_Email: "<?php echo $current_email ?>",
      Message: pesan.value,
    })    
    pesan.value ="";
  };
</script>






