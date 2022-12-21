<?php
require 'ConnectDatabase.php';

//Data menggunakan POST PHP dari page sebelumnya.
$email_buyer = $_POST['email_buyer'];
$email_seller = $_POST['email_seller'];
$id = $_POST['id'];
$judul = $_POST['judul'];
$namatoko = $_POST['namatoko']; 
$deskripsi = $_POST['deskripsi']; 
$harga = $_POST['harga'];
$waktu_pengerjaan = $_POST['waktu_pengerjaan'];
$sample1 = $_POST['sample1'];
$catatan = $_POST['catatan'];

//inputed user email at checkout.php
$postemail = $_POST['email'];

//Data untuk parameter DUITKU
$merchantCode = 'DS14346'; // dari duitku
$merchantKey  = 'd967e1c1b1b804b9e1ac40287c6b0c24'; // dari duitku
$timestamp = round(microtime(true) * 1000); //in milisecond
$paymentAmount = intval($harga);
$merchantOrderId = time() . ''; // dari merchant, unique
$productDetails = 'Pembayaran';
$email = $postemail;; // email pelanggan merchant    
$callbackUrl = 'https://tokokerja.com/Webhook.php'; // url untuk callback
$returnUrl = 'https://tokokerja.com/PurchaseList.php';//'http://example.com/return'; // url untuk redirect
$expiryPeriod = 10; // untuk menentukan waktu kedaluarsa dalam menit
$signature = hash('sha256', $merchantCode.$timestamp.$merchantKey);    

$customerDetail = array(
    'email' => $email,
);

$item1 = array( 
  'name' => $judul,
  'price' => intval($harga),
  'quantity' => 1  
);

$itemDetails = array(
  $item1
);


$params = array(
    'paymentAmount' => $paymentAmount,
    'merchantOrderId' => $merchantOrderId,
    'productDetails' => $productDetails,        
    'email' => $email,        
    'itemDetails' => $itemDetails,
    'customerDetail' => $customerDetail,
    'callbackUrl' => $callbackUrl,
    'returnUrl' => $returnUrl,
    'expiryPeriod' => $expiryPeriod   
    
    
);

$params_string = json_encode($params);
//echo $params_string;
$url = 'https://api-sandbox.duitku.com/api/merchant/createinvoice'; // Sandbox
// $url = 'https://api-prod.duitku.com/api/merchant/createinvoice'; // Production

//log transaksi untuk debug 
// file_put_contents('log_createInvoice.txt', "* log *\r\n", FILE_APPEND | LOCK_EX);
// file_put_contents('log_createInvoice.txt', $params_string . "\r\n\r\n", FILE_APPEND | LOCK_EX);
// file_put_contents('log_createInvoice.txt', 'x-duitku-signature:' . $signature . "\r\n\r\n", FILE_APPEND | LOCK_EX);
// file_put_contents('log_createInvoice.txt', 'x-duitku-timestamp:' . $timestamp . "\r\n\r\n", FILE_APPEND | LOCK_EX);
// file_put_contents('log_createInvoice.txt', 'x-duitku-merchantcode:' . $merchantCode . "\r\n\r\n", FILE_APPEND | LOCK_EX);
$ch = curl_init();


curl_setopt($ch, CURLOPT_URL, $url); 
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
curl_setopt($ch, CURLOPT_POSTFIELDS, $params_string);                                                                  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',                                                                                
    'Content-Length: ' . strlen($params_string),
    'x-duitku-signature:' . $signature ,
    'x-duitku-timestamp:' . $timestamp ,
    'x-duitku-merchantcode:' . $merchantCode    
    )                                                                       
);   
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

//execute post
$request = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

if($httpCode == 200)
{
  $result = json_decode($request, true);
  header('location: '. $result['paymentUrl']);  
  $status = "PENDING";
  $invoice_url = $result['paymentUrl'];

  //Membuat Tanggal menggunakan perintah PHP
  $waktu_pemesanan = date("Y-m-d H:i:s");
  $waktu_tenggat = date("Y-m-d H:i:s", strtotime("+ ".$waktu_pengerjaan."days"));

  //Insert To Database
  $sql = "INSERT INTO orderlist(merchantOrderId, product_id, namatoko, judul,waktu_pengerjaan, waktu_pemesanan, waktu_tenggat, deskripsi, harga, sample1, email_buyer, email_seller, catatan, status, invoice_url)
  values('".$merchantOrderId."','".$id."','".$namatoko."','".$judul."','".$waktu_pengerjaan."','".$waktu_pemesanan."','".$waktu_tenggat."','".$deskripsi."','".$harga."','".$sample1."','".$email_buyer."','".$email_seller."','".$catatan."','".$status."','".$invoice_url."')";
  $result = $conn->query($sql);
}
else
{
  // echo $httpCode . " " . $request ;
  echo $request ;
}





