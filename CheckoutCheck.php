<?php

/**
 * InvoiceExample.php
 * php version 7.2.0
 *
 * @category Example
 * @package  Xendit/Examples
 * @author   Hendry <hendry@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */

use Xendit\Xendit;

require "ConnectDatabase.php";
require "vendor/autoload.php";

//INI NANTI KAU DAPAT DARI WEBSITE NYA XENDIT, biar dia tau bahwa ini semua nanti informasinya ke akun xenditmu
Xendit::setApiKey("xnd_development_eZiafA6RVUlBMyDvy0drLLxnQAsYI9ykF7Y91BgxEr55At38KAIdHzWkQpg6BsqW");

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

//PARAMETER dalam Bentuk JSON untuk Xendit
$Parameter = [    
  'external_id' => $id,
  'amount' => $harga+$harga*3/100,     
  'description' => $judul,
  'payer_email' => $email_buyer,
  'success_redirect_url' => 'https=>//www.tokokerja.com/CheckoutCheckSuccess.php',
  'failure_redirect_url' => 'https=>//www.tokokerja.com/CheckoutCheckFailed.php',
  'currency' => 'IDR',
  'fees' => [
    [
        'type' => 'ADMIN',
        'value' => $harga*3/100,        
    ]
  ]
];

//Membuat Invoice dengan Xendit
$CreateInvoice = \Xendit\Invoice::create($Parameter);
print_r($CreateInvoice);

//Data Dari Invoice yang dibuat
$xendit_id = $CreateInvoice['id'];
$status = $CreateInvoice['status'];
$invoice_url = $CreateInvoice['invoice_url'];

//Membuat Tanggal menggunakan perintah PHP
$waktu_pemesanan = date("Y-m-d H:i:s");
$waktu_tenggat = date("Y-m-d H:i:s", strtotime("+ ".$waktu_pengerjaan."days"));

//Insert To Database
$sql = "INSERT INTO orderlist(xendit_id, product_id, namatoko, judul,waktu_pengerjaan, waktu_pemesanan, waktu_tenggat, deskripsi, harga, sample1, email_buyer, email_seller, catatan, status, invoice_url)
values('".$xendit_id."','".$id."','".$namatoko."','".$judul."','".$waktu_pengerjaan."','".$waktu_pemesanan."','".$waktu_tenggat."','".$deskripsi."','".$harga."','".$sample1."','".$email_buyer."','".$email_seller."','".$catatan."','".$status."','".$invoice_url."')";
$result = $conn->query($sql);

//Pergi membuka link Pembayaran yang disediakan XENDIT
header('location:'.$invoice_url);




