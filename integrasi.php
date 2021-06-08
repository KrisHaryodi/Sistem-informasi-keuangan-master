<?php
$api_url = 'https://go-tukang.herokuapp.com/tukang/list';

//Read Json files
$json_data = file_get_contents($api_url);
//Decode Json data into PHP array
$response_data = json_decode($json_data);
$list = $response_data->list;

foreach($list as $lis){
    echo "username: ".$lis->username;
    echo "<br/> ";
    echo "price: ".$lis->price;
    echo "<br/> ";
};
?>


