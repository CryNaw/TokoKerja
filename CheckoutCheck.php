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

require "vendor/autoload.php";

Xendit::setApiKey("xnd_development_eZiafA6RVUlBMyDvy0drLLxnQAsYI9ykF7Y91BgxEr55At38KAIdHzWkQpg6BsqW");

$email_buyer = $_POST['email_buyer'];
$email_seller = $_POST['email_seller'];
$id = $_POST['id'];
$judul = $_POST['judul'];
$namatoko = $_POST['namatoko']; 
$deskripsi = $_POST['deskripsi']; 
$harga = $_POST['harga'];
$waktu_pengiriman = $_POST['waktu_pengiriman'];

$harga_total = $harga + $harga * 3/100;

$Parameter = [
  'external_id' => $id,
  'amount' => $harga_total,     
  'description' => $judul,
  'payer_email' => $email_buyer,
  'success_redirect_url' => 'https=>//www.tokokerja.com/CheckoutSuccess.php',
  'failure_redirect_url' => 'https=>//www.tokokerja.com/CheckoutFailed.php',
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
$external_id = $CreateInvoice['external_id'];
$user_id = $CreateInvoice['user_id'];
$status = $CreateInvoice['status'];
$amount = $CreateInvoice['amount'];
$payer_email = $CreateInvoice['payer_email'];
$description = $CreateInvoice['description'];
$invoice_url = $CreateInvoice['invoice_url'];

//Insert To Database
$sql = "INSERT INTO orderlist(xendit_id,external_id,user_id,status,amount,payer_email,description,invoice_url ) values('".$email."','".$password."')"; ;
$result = $conn->query($sql);





