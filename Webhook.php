<?php

// Ini akan menjadi Token Verifikasi Callback Anda yang dapat Anda peroleh dari dasbor.
// Pastikan untuk menjaga kerahasiaan token ini dan tidak mengungkapkannya kepada siapa pun.
// Token ini akan digunakan untuk melakukan verfikasi pesan callback bahwa pengirim callback tersebut adalah Xendit

use Psr\Http\Message\RequestInterface;

$xenditXCallbackToken = "AYvgkriNauGLMBGLyl2IOlTQWAr2zT7xntF9Zes1AsOMwSur";

// Bagian ini untuk mendapatkan Token callback dari permintaan header, 
// yang kemudian akan dibandingkan dengan token verifikasi callback Xendit
$reqHeaders = getallheaders();
$xIncomingCallbackTokenHeader = isset($reqHeaders['x-callback-token']) ? $reqHeaders['x-callback-token'] : "";

// Untuk memastikan permintaan datang dari Xendit
// Anda harus membandingkan token yang masuk sama dengan token verifikasi callback Anda
// Ini untuk memastikan permintaan datang dari Xendit dan bukan dari pihak ketiga lainnya.
// if($xIncomingCallbackTokenHeader === $xenditXCallbackToken){
// Permintaan masuk diverifikasi berasal dari Xendit

// Baris ini untuk mendapatkan semua input pesan dalam format JSON teks mentah
$rawRequestInput = file_get_contents("php://input");
// Baris ini melakukan format input mentah menjadi array asosiatif
$arrRequestInput = json_decode($rawRequestInput, true);
echo 'iya sudah ada bang';
print_r($arrRequestInput);

$xendit_id = $arrRequestInput['id'];
$external_id = $arrRequestInput['external_id'];
$userId = $arrRequestInput['user_id'];
$status = $arrRequestInput['status'];
$paidAmount = $arrRequestInput['paid_amount'];
$paidAt = $arrRequestInput['paid_at'];
$paymentChannel = $arrRequestInput['payment_channel'];
$paymentDestination = $arrRequestInput['payment_destination'];

require 'ConnectDatabase.php';
$sql = "update orderlist set status = ".$status." where xendit_id = ".$xendit_id."";
$conn->query($sql);

$sql = "insert into xendit_log (id, product_id, ) values ()";
$conn->query($sql);

  // Kamu bisa menggunakan array objek diatas sebagai informasi callback yang dapat digunaka untuk melakukan pengecekan atau aktivas tertentu di aplikasi atau sistem kamu.

// }else{
//   // Permintaan bukan dari Xendit, tolak dan buang pesan dengan HTTP status 403
//   http_response_code(403);
// }