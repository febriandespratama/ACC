<?php
include_once("koneksi.php");
if(isset($_POST['update_jadwal']))
{
	$id=$_POST['id'];
	$hari_edit=$_POST['hari'];
	$waktu_edit=$_POST['waktu'];
	$tempat_edit=$_POST['tempat'];
  $kegiatan_edit=$_POST['kegiatan'];

	$result = mysqli_query($koneksi, "UPDATE jadwal SET hari='$hari_edit',
	waktu='$waktu_edit',tempat='$tempat_edit', kegiatan='$kegiatan_edit' WHERE id='$id'");

	header("Location: pertemuan_admin.php");
}
?>
<?php
$id = $_GET['id'];
$result = mysqli_query($koneksi, "SELECT * FROM jadwal WHERE id='$id'");
while($user_data = mysqli_fetch_array($result))
{
	$hari_read=$user_data['hari'];
	$waktu_read=$user_data['waktu'];
	$tempat_read=$user_data['tempat'];
  $kegiatan_read=$user_data['kegiatan'];
}
?>
<html>
<head>
	<title>Edit</title>
	<link rel= " stylesheet" type="text/css" href= "style.css">
</head>
<body>
	<a href="pertemuan_admin.php">Batal</a>
	<br/><br/>
		<table border="0">
			<form name="update_jadwal" method="post" action="pertemuan_admin.php">
				<tr>
					<td>Hari</td>
					<td><input type="text" name="hari" value=<?php echo $hari_read;?>></td>
				</tr>
				<tr>
					<td>waktu</td>
					<td><input type="text" name="waktu" value=<?php echo $waktu_read;?>></td>
				</tr>
				<tr>
					<td>tempat</td>
					<td><input type="text" name="tempat" value=<?php echo $tempat_read;?>></td>
				</tr>
        <tr>
					<td>kegiatan</td>
					<td><input type="text" name="kegiatan" value=<?php echo $kegiatan_read;?>></td>
				</tr>
				<tr>
					<input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>

					<td><input type="submit" name="update_jadwal" value="update_jadwal"></td>
				</tr>
			</table>
		</form>
	</body>
</html>
