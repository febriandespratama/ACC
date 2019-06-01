<html>
<head>
	<title>ACC</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>

<div class="contaier">
	<section class="login-box">
	<h2>Login</h2>
		<form action="cek_login.php" method="post">
			<input type="text" name="username" class="form_login" placeholder="Username" required="required">
			<input type="password" name="password" class="form_login" placeholder="Password" required="required">

			<input type="submit" class="tombol_login" value="LOGIN">

			<br/>
			<br/>
			<div class="regis">
			<br>
				<a class="link" href="registrasi.php">Buat Akun</a>
			</div>
		</form>

	</div>


</body>
</html>
