<?php
//DELETE Request 

//initialize
$ch = curl_init();
$url = "https://reqres.in/api/users/2"; //Set url

//curl options
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_CUSTOMREQUEST,"DELETE"); //Setting to DELETE request

//stores json response to variable
$resp = curl_exec($ch);

//response code
$status_code = curl_getinfo($ch, CURLINFO_RESPONSE_CODE);

//close connection
curl_close($ch);

//error check
if ($status_code != 204) {
    echo "Unexpected status code: $status_code";
    exit;
}
echo "Repository Deleted Successfully";
