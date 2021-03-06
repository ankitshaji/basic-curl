<?php
//PUT Request -update full resource

//initialize
$ch = curl_init();
//Set url
$url = "https://reqres.in/api/users/2";

//data to send - array format
$data_array = array(
    'name' => 'Updated Test Name',
    'job' => 'Updated Test Job'
);
//array to url format
$data = http_build_query($data_array);

//if header required - header to send - array format
$header = array(
    "Authorization: infohere"
);

//curl options
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT"); //Set PUT request  
curl_setopt($ch, CURLOPT_POSTFIELDS, $data); //Set data to send
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //return respose instead of outputting
//if header is required
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
//stores json response to variable
$resp = curl_exec($ch);

//error check
if ($e = curl_error($ch)) {
    echo $e;
} else {
    //json to php object ,not array false
    $decode = json_decode($resp);
    //iterate object with foreach
    foreach ($decode as $key => $val) {
        echo $key . ":" . $val . '<br>'; //. is +
    }
}
//close connection
curl_close($ch);
