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
$judul = $_POST['judul'];
$namatoko = $_POST['namatoko']; 
$deskripsi = $_POST['deskripsi']; 
$harga = $_POST['harga'];

$Parameter = [
  'external_id' => 'test-reference-id',
  'payer_email' => 'seseorang@gmail.com',
  'description' => 'Pembayaran tes tes',
  'amount' => $harga,     
];

$CreateInvoice = \Xendit\Invoice::create($Parameter);
print_r($CreateInvoice);

$_id = $CreateInvoice['id'];
echo $_id;




