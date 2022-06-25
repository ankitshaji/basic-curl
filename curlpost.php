<?php 
//POST Request

//initialize
$ch = curl_init();
//Set url
$url = "https://reqres.in/api/users";
//data to send - array format
$data_array= array(
    'name'=>'Test Name',
    'job'=> 'Test Job'
);
//array to url format
$data = http_build_query($data_array);

//set options
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_POST,true); //Set to Post request 
curl_setopt($ch,CURLOPT_POSTFIELDS,$data); //Set data to send
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);//return respose instead of outputting
//stores json response to variable
$resp = curl_exec($ch);

//error check
if($e = curl_error($ch)){
    echo $e;
}else{
    //json to php object ,not array false
    $decode = json_decode($resp);
    //iterate object with foreach
    foreach($decode as $key => $val){
        echo $key.":".$val.'<br>'; //. is +
    }
}
//close connection
curl_close($ch);


