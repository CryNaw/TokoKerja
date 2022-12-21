<?php
    $apiKey = 'd967e1c1b1b804b9e1ac40287c6b0c24'; // API key anda
    $merchantCode = isset($_POST['merchantCode']) ? $_POST['merchantCode'] : null; 
    $amount = isset($_POST['amount']) ? $_POST['amount'] : null; 
    $merchantOrderId = isset($_POST['merchantOrderId']) ? $_POST['merchantOrderId'] : null; 
    $productDetail = isset($_POST['productDetail']) ? $_POST['productDetail'] : null; 
    $additionalParam = isset($_POST['additionalParam']) ? $_POST['additionalParam'] : null; 
    $paymentCode = isset($_POST['paymentCode']) ? $_POST['paymentCode'] : null; 
    $resultCode = isset($_POST['resultCode']) ? $_POST['resultCode'] : null; 
    $merchantUserId = isset($_POST['merchantUserId']) ? $_POST['merchantUserId'] : null; 
    $reference = isset($_POST['reference']) ? $_POST['reference'] : null; 
    $signature = isset($_POST['signature']) ? $_POST['signature'] : null; 

    //log callback untuk debug 
    // file_put_contents('callback.txt', "* Callback *\r\n", FILE_APPEND | LOCK_EX);

    if(!empty($merchantCode) && !empty($amount) && !empty($merchantOrderId) && !empty($signature))
    {
        $params = $merchantCode . $amount . $merchantOrderId . $apiKey;
        $calcSignature = md5($params);

        if($signature == $calcSignature)
        {
          //Callback tervalidasi
          //isi di database datanya
          //Silahkan rubah status transaksi anda disini
            if($resultCode == '00'){
              $status ='PAID';
            }
            else{
              $status = 'FAILED';
            }

            require 'ConnectDatabase.php';
            $sql = "update orderlist set status = ".$status." where xendit_id = ".$xendit_id;
            $conn->query($sql);

            $sql = "insert into xendit_log (id) values ()";
            $conn->query($sql);                        
            // file_put_contents('callback.txt', "* Berhasil *\r\n\r\n", FILE_APPEND | LOCK_EX);

        }
        else
        {
            // file_put_contents('callback.txt', "* Bad Signature *\r\n\r\n", FILE_APPEND | LOCK_EX);
            throw new Exception('Bad Signature');
        }
    }
    else
    {
        // file_put_contents('callback.txt', "* Bad Parameter *\r\n\r\n", FILE_APPEND | LOCK_EX);
        throw new Exception('Bad Parameter');
    }
?>