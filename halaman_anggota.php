<!DOCTYPE html>
<html>
<head>
	<title>Halaman anggota</title>
  <link rel= " stylesheet" href= "style.css">
</head>
<body>
	<?php
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:login.php?pesan=gagal");
	}

	?>
  <nav>
	<ul class="menu">
		<li><a class="home" href="halaman_anggota.php">HOME</a></li>
		<li><a href="#"></i>Jadwal</a>
			<ul class="sub-menu">
				<li><a href="pertemuan.php">Pertemuan</a>
				</li>
			</ul>
		</li>
		<li><a href="#">Anggota</a>
			<ul class="sub-menu">
				<li><a href="anggota.php">Daftar anggota</a></li>
			</ul>
		</li>
    <li><a href="logout.php">LOGOUT</a>
    </li>

  </nav>

<center>
	<marquee width="700"><img height="300" src="logo.PNG"></marquee><br>
	<marquee width="700"><img height="100" align="header" src="Warner-Bros-Company-Logo1.jpg"></marquee><br>
	<br/>
	<br/>

</body>
</html>
