<head>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-57C6ZZ233V"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-57C6ZZ233V');
</script>
</head>
<?php
    $merchantCode = 'DS14346'; // dari duitku
    $merchantKey  = 'd967e1c1b1b804b9e1ac40287c6b0c24'; // dari duitku
    $timestamp = round(microtime(true) * 1000); //in milisecond
    $paymentAmount = 40000;
    $merchantOrderId = time() . ''; // dari merchant, unique
    $productDetails = 'Test Pay with duitku';
    $email = 'test@test.com'; // email pelanggan merchant    
    $callbackUrl = 'http://example.com/api-pop/backend/callback.php'; // url untuk callback
    $returnUrl = 'http://example.com/api-pop/backend/redirect.php';//'http://example.com/return'; // url untuk redirect
    $expiryPeriod = 10; // untuk menentukan waktu kedaluarsa dalam menit
    $signature = hash('sha256', $merchantCode.$timestamp.$merchantKey);    

    $customerDetail = array(
        'email' => $email,
    );

    $params = array(
        'paymentAmount' => $paymentAmount,
        'merchantOrderId' => $merchantOrderId,
        'productDetails' => $productDetails,        
        'email' => $email,        
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
        //header('location: '. $result['paymentUrl']);
        print_r($result, false);
        // echo "paymentUrl :". $result['paymentUrl'] . "<br />";
        // echo "reference :". $result['reference'] . "<br />";
        // echo "statusCode :". $result['statusCode'] . "<br />";
        // echo "statusMessage :". $result['statusMessage'] . "<br />";
    }
    else
    {
        // echo $httpCode . " " . $request ;
        echo $request ;
    }
?>