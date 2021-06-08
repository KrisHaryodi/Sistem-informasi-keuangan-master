<?php
$api_url = 'https://go-tukang.herokuapp.com/tukang/list';

//Read Json files
$json_data = file_get_contents($api_url);
//Decode Json data into PHP array
$response_data = json_decode($json_data);
$list = $response_data->list;

foreach($list as $lis){
    echo "price: ".$lis->price;
    echo "<br/> ";
};
//include('dbconnected.php');
include('koneksi.php');

$tgl_pemasukan = $_GET['tgl_pemasukan'];
$jumlah = $_GET['jumlah'];
$sumber = 'Go-helper';

//query update
$query = mysqli_query($koneksi,"INSERT INTO `pemasukan` (`tgl_pemasukan`, `jumlah`, `id_sumber`) VALUES ('$tgl_pemasukan', '$jumlah', '$sumber')");

if ($query) {
 # credirect ke page index
 header("location:pendapatan.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}

//mysql_close($host);

?>


