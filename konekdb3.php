<?php 
$servername = "localhost";
$user = "sabardi";
$password = "sabardi";
$database = "latihandb";

$koneksi = mysqli_connect ($servername, $user, $password);
if($koneksi){
    $akses_database = mysqli_select_db($koneksi, $database);
    echo "database berhasil terhbung";
    if(!$akses_database){
        echo "database tidak terhubung";

    }
}else{
    echo "mysql tidak bisa di akses";
}
//jjdkksks
?>