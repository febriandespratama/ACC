<?php
include_once("koneksi.php");
?>

<html>
<head>
<title>Read</title>
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

  </nav>
<table width='80%' border=1>
	<tr>
	<th>Nama</th>
	<th>jenis Kelamin</th>
	<th>No HP</th>
  <th>Email</th>
	<th>Aksi</th>
	</tr>
	<?php
	$result = mysqli_query($koneksi, "SELECT * FROM data ORDER BY id DESC");
	while ($user_data = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>".$user_data['nama']."</td>";
		echo "<td>".$user_data['jeniskelamin']."</td>";
		echo "<td>".$user_data['nohp']."</td>";
    echo "<td>".$user_data['email']."</td>";
		echo "<td><a href='update_anggota.php?id=$user_data[id]'>Edit</a>
		<a href='delete_admin.php?id=$user_data[id]'>Delete</a></td></tr>";
	}
	?>
		</table>
</body>
</html>
