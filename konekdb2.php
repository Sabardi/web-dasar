<?php 
$servername = "localhost";
$user = "sabardi";
$password = "sabardi";
$database = "latihandb";

$koneksi =mysqli_connect ($servername, $user, $password);
if($koneksi){
    $akses_databse = mysqli_select_db($koneksi, $database);
    echo "databse berhasil di buka";
    if(!$akses_databse){
        echo "database gagal terhubung";
    }
}
?>