<?php
include_once("koneksi.php");
$id =$_GET['id'];
$result = mysqli_query($koneksi, "DELETE FROM data WHERE id='$id'");
header("location:anggota_admin.php");
?>
