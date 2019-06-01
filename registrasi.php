<!DOCTYPE html>
<html>
	<head>
		<title> ACC | Registrasi </title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel= " stylesheet" href= "cssss/style.css">
	</head>
	<body>

	<header> <a>Registrasi</a>	</header>

			<div class="kotak_daftar">
					<form action="proses_registrasi.php" method="post">
						<div class="form-group">
							<label>Nama Pengguna</label>
							<input type="text" name="username" class="form_daftar" placeholder="Nama Pengguna" requred>

							<label>Kata Sandi</label>
							<input type="password" name="password" class="form_daftar" placeholder="Kata Sandi" required>

							<label>Konfirmasi Kata Sandi</label>
							<input type="password" name="password_lagi" class="form_daftar" placeholder="Konfirmasi Kata Sandi" required>

							<label>level</label>
							<select class="form_daftar" name="level">
								<option value="anggota">Anggota</option>
							</select>

							<br>
							<input name="submit" type="submit" class="tombol_daftar" value="Daftar">
						</div>


							<br/><br/>
							<center>
									<a class="link" href="login.php">Kembali</a>
							</center>
		</form>
	</div>

</body>
</html>
