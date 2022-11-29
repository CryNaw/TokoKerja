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

Xendit::setApiKey("xnd_development_eZiafA6RVUlBMyDvy0drLLxnQAsYI9ykF7Y91BgxEr55At38KAIdHzWkQpg6BsqW");

$email_buyer = $_POST['email_buyer'];
$email_seller = $_POST['email_seller'];
$id = $_POST['id'];
$judul = $_POST['judul'];
$namatoko = $_POST['namatoko']; 
$deskripsi = $_POST['deskripsi']; 
$harga = $_POST['harga'];
$sample1 = $_POST['sample1'];
$waktu_pengiriman = $_POST['waktu_pengiriman'];

$catatan = $_POST['catatan'];

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

$CreateInvoice = \Xendit\Invoice::create($Parameter);
print_r($CreateInvoice);

$xendit_id = $CreateInvoice['id'];
$status = $CreateInvoice['status'];
$invoice_url = $CreateInvoice['invoice_url'];
$created = $CreateInvoice['created'];

//Insert To Database
$sql = "INSERT INTO orderlist(xendit_id, product_id, namatoko, judul, waktu_pengiriman, deskripsi, harga, sample1, email_buyer, email_seller, catatan, status, created, invoice_url)
values('".$xendit_id."','".$id."','".$namatoko."','".$judul."','".$waktu_pengiriman."','".$deskripsi."','".$harga."','".$sample1."','".$email_buyer."','".$email_seller."','".$catatan."','".$status."','".$created."','".$invoice_url."')";
$result = $conn->query($sql);
header('location:'.$invoice_url);




