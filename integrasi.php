<?php
$api_url = 'https://go-tukang.herokuapp.com/tukang/list';
include('koneksi.php');
//Read Json files
$json_data = file_get_contents($api_url);
//Decode Json data into PHP array
$response_data = json_decode($json_data);
$list = $response_data->list;

foreach($list as $lis){
    echo "username: ".$lis->username;
    echo "<br/> ";
    $nama = $lis->username;
    $query = mysqli_query($koneksi,"INSERT INTO `admin` (`nama`,`email`,`pass` ) VALUES ('$nama','$nama@mail.com','tes123')");
};
?>


