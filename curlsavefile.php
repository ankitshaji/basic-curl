<?php
//GET Request- OUTPUT into file

//initiate curl
$ch = curl_init();

//api url
$url = "https://reqres.in/api/users?page=2";

//initiate filehandle -create
$fh = fopen("file.txt","w");

//set url
curl_setopt($ch, CURLOPT_URL, $url);
//output to filehandle -save
curl_setopt($ch, CURLOPT_FILE, $fh);

//stores json response to variable
$resp = curl_exec($ch);

//check if error
if ($e = curl_error($ch)) {
    echo $e;
}

//close filehandle
fclose($fh);
//close
curl_close($ch);
