<!DOCTYPE html>
<html>
<head>
    <title>ACC | Registrasi</title>
    <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel= " stylesheet" href= "cssss/style.css">
</head>


<body>
  <header> <a>Lengkapi Data</a>	</header>

      <form action="proses_tambah.php" method="post">
        <div class="form-group">
          <label>Nama Lengkap</label>
          <input type="text" name="nama" class="form_daftar" placeholder="Nama " requred>

          <label for="jeniskelamin">Jenis Kelamin</label>
    			<input type="radio" id="jeniskelamin" name="jeniskelamin" > Laki-Laki
    			<input type="radio" id="jeniskelamin" name="jeniskelamin" > Perempuan

          <label>No HP</label>
          <input type="text" name="nohp" class="form_daftar" placeholder="No Hp" required>

          <label>Email</label>
          <input type="text" name="email" class="form_daftar" placeholder="email" required>

          <br>
          <input type="submit" class="btn btn-success btn-block" name="tambah_data" value="Daftar" />

        </div>

        <center>
            <a class="link" href="login.php">Kembali</a>
        </center>
    </form>
</body>
</html>
