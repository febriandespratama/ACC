<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "acc";
$koneksi = mysqli_connect($host,$user,$password,$database);
if(!$koneksi){
    die("Database Connection Failed");
}
$select_db = mysqli_select_db($koneksi,$database);
if(!$select_db){
    die("Database selection failed !".mysqli_error($koneksi));
}
?>
