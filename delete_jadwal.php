<?php
include_once("koneksi.php");
$id =$_GET['id'];
$result = mysqli_query($koneksi, "DELETE FROM jadwal WHERE id='$id'");
header("location:pertemuan_admin.php");
?>
