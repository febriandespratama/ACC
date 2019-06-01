<?php
include_once("koneksi.php");
?>

<html>
<head>
<title>ACC | Jadwal Kegiatan</title>
<link rel= " stylesheet" type="text/css" href= "Rstyle.css">
</head>

<body>
  <nav>
	<ul class="menu">
		<li><a class="home" href="halaman_admin.php">HOME</a></li>
		<li><a href="#"></i>Jadwal</a>
			<ul class="sub-menu">
				<li><a href="pertemuan_admin.php">Pertemuan</a>
				</li>
			</ul>
		</li>
		<li><a href="#">Anggota</a>
			<ul class="sub-menu">
				<li><a href="anggota_admin.php">Daftar anggota</a></li>
			</ul>
		</li>
    <li><a href="logout.php">LOGOUT</a>
    </li>
    <li><a href="tambah_jadwal.php">Tambah Jadwal</a>
    </li>

  </nav>
<table width='80%' border=1>
	<tr>
	<th>Hari</th>
	<th>waktu</th>
	<th>Tempat</th>
  <th>kegiatan</th>
	<th>Aksi</th>

	</tr>

	<?php
	$result = mysqli_query($koneksi, "SELECT * FROM jadwal ORDER BY id DESC");
	while ($user_data = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>".$user_data['hari']."</td>";
		echo "<td>".$user_data['waktu']."</td>";
		echo "<td>".$user_data['tempat']."</td>";
    echo "<td>".$user_data['kegiatan']."</td>";
		echo "<td><a href='update_jadwal.php?id=$user_data[id]'>Edit</a>
		<a href='delete_jadwal.php?id=$user_data[id]'>Delete</a></td></tr>";
	}
	?>
		</table>
</body>
</html>
