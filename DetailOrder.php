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

      $currenttime = strtotime(Date('Y-m-d H:i:s'));
      $waktu_tenggat = strtotime($waktu_tenggat);       
      $difference =  $waktu_tenggat - $currenttime;  
      $sisawaktu  = abs(round($difference / 86400));   
    }
  }

if($current_email == $email_buyer or $current_email == $email_seller){  
}else{
  echo "Ini Bukanlah Pesanan Anda!!";
  exit();
}

?>

<style>
  .resize-image{
  height: 64px;  
  width: 100%;
  object-fit: contain;
  object-position: center center;
}

.text-ellipsis--6 {
  text-overflow: ellipsis;
  overflow: hidden;
  display: -webkit-box !important;
  -webkit-line-clamp: 6;
  -webkit-box-orient: vertical;
  white-space: normal;
}
</style>

<head>


<script> 
$("#statusbutton").click(function(e) {  
  e.preventDefault();
  $.ajax({
    url: "DetailOrder_StatusUpdate.php",
    type: "POST",
    data: {
      order_id: <?php echo $order_id ?>,
      
    },            
    success: function(data){
        $("#results").html(data);        
    }    
  });
});
</script>
</head>

<body>  
<div id="results"></div>

  <div class="container mt-4">   
      <div class="card mx-auto" style="max-width:100%;">
      <div class="card-header">
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width:100%">
              Detail Pesanan
            </button>
            <ul class="dropdown-menu w-100" style="background-color: rgba(220,220,220,0.9);">
              <li><a class="dropdown-item disabled text-black">
                <div class="container">
                  <div class="row">                    
                                                        
                    <div class="col-sm-12 align-self-center text-center">  
                    <img src=<?php echo $sample1?> class="resize-image">        
                      <p class="text-ellipsis--6"><b><?php echo $judul?></b><br><?php echo $deskripsi ?><br>Rp. <?php echo $harga ?></p>                                                                            
                    </div>                                 
                  </div>

                  <div class="row">
                    <div class="col-12 col-xl-4">
                      <p><b>Nama Toko : </b><?php echo $namatoko ?></p>     
                    </div>
                    <div class="col-12 col-xl-4">  
                      <p><b>Sisa Waktu : </b><?php if($status == 'PENDING' or $status == 'VERIFYING' or $status == 'PAID'){echo 'Menunggu Tanggapan Penjual';}else{ echo $sisawaktu.' Hari'; }?> </p>
                    </div>
                    <div class="col-12 col-xl-4">  
                      <p class="text-truncate text-ellipsis--2"><b>Catatan : </b><?php echo $catatan?></p>                                                                                                       
                    </div>                                      
                    <div class="col-12 col-xl-4">  
                      <p><b>Buyer : </b><?php echo $email_buyer ?></p> 
                    </div> 
                    <div class="col-12 col-xl-4">
                      <p><b>Seller : </b><?php echo $email_seller ?></p>                                                                   
                    </div>                      
                    <div class="col-12 col-xl-4">
                      <p><b>Status : </b><?php echo $status ?></p>                                                                                                                                                      
                    </div>
                  </div>
                                                    
                </div>
              </a></li>   
              <li>
                <form id="statusform" method="POST" action="DetailOrder_StatusUpdate.php"></form>
                <input form="statusform" type="text" name="order_id" value="<?php echo $order_id ?>" hidden>
                <?php 
                  $status_PENDING = "PENDING";
                  $status_VERIFYING = "VERIFYING";
                  $status_PAID = "PAID";                  
                  $status_DALAMPROSES = "DALAM PROSES";
                  $status_DIKIRIM = "DIKIRIM";                  
                  $status_SELESAI = "SELESAI";
                  $status_DIBATALKAN = "DIBATALKAN";

                if($current_email == $email_seller){
                  if($status == $status_PENDING){         
                    echo "<div class='row justify-content-center'><button style='width:80%; color:green;'>Menunggu Pembayaran</button></div>";
                  }elseif($status == $status_VERIFYING){
                      echo "<div class='row justify-content-center'><button style='width:80%; color:green;'>Menunggu Verifikasi Pembayaran</button></div>";
                  }elseif($status == $status_PAID){                 
                    echo "<input form='statusform' type='text' name='waktu_pengerjaan' value='$waktu_pengerjaan' hidden>";
                    echo "<div class='row justify-content-center'><button form='statusform' type='submit' name='status' value='$status_DALAMPROSES' style='width:80%; color:green;'>TERIMA PESANAN</button></div>";
                  }elseif($status == $status_DALAMPROSES){
                    echo "<div class='row justify-content-center'><button form='statusform' type='submit' name='status' value='$status_DIKIRIM' style='width:80%; color:green;'>PESANAN DIKIRIM</button></div>";
                  }elseif($status == $status_DIKIRIM){
                    echo "<div class='row justify-content-center'><button style='width:80%; color:black;'>Menunggu Tanggapan Pembeli</button></div>";               
                  }elseif($status == $status_SELESAI){         
                    echo "<div class='row justify-content-center'><button style='width:80%; color:black;'>PESANAN SELESAI</button></div>";
                  }elseif($status == $status_DIBATALKAN){         
                    echo "<div class='row justify-content-center'><button style='width:80%; color:black;'>PESANAN DIBATALKAN</button></div>";                    
                  }
                }elseif($current_email == $email_buyer){
                  if($status == $status_PENDING){         
                    echo "<a class='row justify-content-center' href='Payment.php?id=$id' style='text-decoration:none;'><button style='width:80%; color:green;'>Klik Disini Untuk Melakukan Pembayaran</button></a>";
                  }elseif($status == $status_VERIFYING){
                    echo "<div class='row justify-content-center'><button style='width:80%; color:black;'>Menunggu Verifikasi Pembayaran</button></div>";
                  }elseif($status == $status_PAID){
                    echo "<div class='row justify-content-center'><button style='width:80%; color:black;'>Menunggu Tanggapan Penjual</button></div>";
                  }elseif($status == $status_DALAMPROSES){
                    echo "<div class='row justify-content-center'><button style='width:80%; color:black;'>Dalam Proses Pengerjaan</button></div>";
                  }elseif($status == $status_DIKIRIM){
                    echo "<input form='statusform' type='text' name='harga' value='$harga' hidden>";
                    echo "<input form='statusform' type='text' name='email_seller' value='$email_seller' hidden>";
                    echo "<div class='row justify-content-center'><button form='statusform' type='submit' name='status' value='$status_SELESAI' style='width:80%; color:green;'>PESANAN DITERIMA</button></div>";                                     
                  }elseif($status == $status_SELESAI){         
                    echo "<div class='row justify-content-center'><button style='width:80%; color:black;'>PESANAN SELESAI</button></div>";
                  }elseif($status == $status_DIBATALKAN){         
                    echo "<div class='row justify-content-center'><button style='width:80%; color:black;'>PESANAN DIBATALKAN</button></div>";                    
                  }
                }                                  
                ?>
              </li>                                            
            </ul>
          </div>
        </div>      

        <div class="card-body p-4" style="height:512px; overflow:auto;">      
          <div id="ChatText">            
            <?php
              $sql = "Select * from chat_log Where order_id =".$order_id;
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
                      if($Files == ""){             
                        echo "<p class='border rounded p-1 m-1' style='text-align:right;'>".$Message."<span style='color:green'> | </span></p>";
                      }
                      else{
                        echo "<div class='border rounded p-1 m-1' style='text-align:right;'>";
                        echo "<a href='$Files' style='text-decoration: none;' download><img src='img/DownloadSGV.png' style='width:32px;height:20px;'>$Files<span style='color:green'> | </span></a>";
                        echo "<p>".$Message."<span style='color:green'> | </span></p>";
                        echo "</div>";
                      }    
                    }
                  }
                  else{
                    if($Message){
                      if($Files == ""){
                        echo "<p class='border rounded p-1 m-1' style='text-align:left;'><span style='color:green'> | </span>".$Message."</p>";                     
                      }
                      else{      
                        echo "<div class='border rounded p-1 m-1' style='text-align:left;'>";              
                        echo "<a href='$Files' style='text-decoration: none;' download><span style='color:green;'> | </span><img src='img/DownloadSGV.png' style='width:32px;height:20px;'>$Files</a>";
                        echo "<p><span style='color:green'> | </span>".$Message."</p>"; 
                        echo "</div>";
                      }                      
                    }
                  }
                }
              }
            ?>
          </div>  
        </div>
        <form id="ChatForm" method="post" action="DetailOrder_Chat_Insert.php" enctype="multipart/form-data"></form>  
        <div class="card-footer w-100 p-1">
          <div class="input-group">  
            <div class="input-group-text border-0">
              <label for="chatfile" class="btn btn-light">                
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-paperclip" viewBox="0 0 16 16">
                    <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"/>
                  </svg>                
                  <div id="chatfilename"></div>
              </label>              
                <input form="ChatForm" id="chatfile" type="file" class="form-control border-0" name="files" onclick="initialize()" hidden>
            </div>                      
            <input form="ChatForm" type="text" name="order_id" value="<?php echo $order_id ?>" hidden>
            <input form="ChatForm" type="text" name="Sender_Email" value="<?php echo $current_email ?>" hidden>
            <input form="ChatForm" id="ChatText" type="text" class="form-control border-0" name="Message" placeholder="Write a message" required>            
            <button form="ChatForm" id="SendButton" type="submit" class="input-group-text border-0">Send</button>
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
  
  function ScrollCardBodytoBotttom(){
  const element = document.getElementById("ChatText");
  element.scrollIntoView({behavior: "smooth", block: "end", inline:"nearest"});
  }
  
  ScrollCardBodytoBotttom()    
  setInterval(LoadChat, 1000);  

  var theFile = document.getElementById('chatfile');
$("#chatfile").change(function(){    
  if (theFile.value.length == 0) {    
      $("#chatfilename").text("");  
    }
    else{
      $("#chatfilename").text(this.files[0].name);
    }    
});           
</script>

<?php
require 'Footer.php';
?>





