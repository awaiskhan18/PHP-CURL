<?php

$cURLConnection = curl_init();

curl_setopt($cURLConnection, CURLOPT_URL, 'http://localhost/api/endpoint/');

$header = array(
    'Content-Type: application/x-www-form-urlencoded',
    'Authorization: eyJ0eEAiOiJKF1QiLCJhbGciOiJIUzI1NiT9.eyJ1c9VybmFrZSI6IktpbmcwMSJ8.tFG5cwudAh1MRpxuiyXf4zsWReILp9Ud5CDRCS72JsL'
);


curl_setopt($cURLConnection, CURLOPT_HTTPHEADER, $header);

curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
curl_setopt($cURLConnection, CURLOPT_SSL_VERIFYPEER, false);

echo $response = curl_exec($cURLConnection);
 echo $result = json_decode($response);
 $error = curl_error($cURLConnection);
echo "<br>Error = ".$error;
curl_close($cURLConnection);

print_r($result->status);
