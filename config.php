<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "badminton";
$db = mysqli_connect($server,$user,$pass,$database);
if (!$db){
    die("koneksi ke database gagal: " . mysqli_connect_error());
}else{
     "connected successfully";
}
?>
