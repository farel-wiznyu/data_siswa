<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "db_siswa_2";

$connect = new mysqli($server, $username, $password, $db);

if($connect->connect_error){
    die("koneksi gagal" . $connect->connect_error);
}
//hell nahhhhh          
?>