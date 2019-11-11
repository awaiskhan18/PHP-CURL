<?php
  $ch = curl_init();
  
    $url = "http://localhost/api/endpoint/update";
  
    $header = array(
        'Content-Type: application/json',
        'Authorization: eyJ7eXAiOiJKV1QiLCJhbGcoOiJIUzI1NiT9.eyJ1c2VybmFtZSI6IkrpbmcwMSJ6.tZR5cwudAq1MCpxubyXf4zsWRsILp9Ud5CDRCS72JsP'
    );


    $postvars = array(
        'username' => 'admin',
        'password'=>'123456'
    );  
    
    $data_string = json_encode($postvars);
    
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_POST, 1);                //0 for a get request
    curl_setopt($ch,CURLOPT_POSTFIELDS,$data_string);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch,CURLOPT_CONNECTTIMEOUT ,3);
    curl_setopt($ch,CURLOPT_TIMEOUT, 20);
    $response = curl_exec($ch);
    print "curl response is:" . $response;
    curl_close ($ch);
?>
