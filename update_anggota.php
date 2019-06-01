<?php
include_once("koneksi.php");
if(isset($_POST['update']))
{
	$id=$_POST['id'];
	$nama_edit=$_POST['nama'];
	$jeniskelamin_edit=$_POST['jeniskelamin'];
	$nohp_edit=$_POST['nohp'];
  $email_edit=$_POST['email'];

	$result = mysqli_query($koneksi, "UPDATE data SET nama='$nama_edit',
	jeniskelamin='$jeniskelamin_edit',nohp='$nohp_edit', email='$email_edit' WHERE id='$id'");

	header("Location: anggota_admin.php");
}
?>
<?php
$id = $_GET['id'];
$result = mysqli_query($koneksi, "SELECT * FROM data WHERE id='$id'");
while($user_data = mysqli_fetch_array($result))
{
	$nama_read=$user_data['nama'];
	$jeniskelamin_read=$user_data['jeniskelamin'];
	$nohp_read=$user_data['nohp'];
  $email_read=$user_data['email'];
}
?>
<html>
<head>
	<title>Edit</title>
	<link rel= " stylesheet" type="text/css" href= "style.css">
</head>
<body>
	<a href="anggota_admin.php">Batal</a>
	<br/><br/>
		<table border="0">
			<form name="update_user" method="post" action="anggota_admin.php">
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama" value=<?php echo $nama_read;?>></td>
				</tr>
				<tr>
					<td>jenis kelamin</td>
					<td><input type="text" name="jeniskelamin" value=<?php echo $jeniskelamin_read;?>></td>
				</tr>
				<tr>
					<td>nohp</td>
					<td><input type="number" name="nohp" value=<?php echo $nohp_read;?>></td>
				</tr>
        <tr>
					<td>email</td>
					<td><input type="text" name="email" value=<?php echo $email_read;?>></td>
				</tr>
				<tr>
					<input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>

					<td><input type="submit" name="update" value="Update"></td>
				</tr>
			</table>
		</form>
	</body>
</html>
