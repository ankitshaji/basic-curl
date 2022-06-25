<?php
//GET Request

//initiate curl
$ch = curl_init();

//api url
$url = "https://reqres.in/api/users?page=2";

//set url
curl_setopt($ch, CURLOPT_URL, $url);
//return respose instead of output
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//stores json response to variable
$resp = curl_exec($ch);

//check if error
if ($e = curl_error($ch)) {
    echo $e;
}else{
    //json to php object then set true to convert to array 
    $decode = json_decode($resp,true);
    print_r($decode);
}

//close
curl_close($ch);
