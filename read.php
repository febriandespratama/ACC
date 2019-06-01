<?php
include_once("koneksi.php");
?>

<html>
<head>
<title>Read</title>
<link rel= " stylesheet" type="text/css" href= "Rstyle.css">
</head>

<body>
<table width='80%' border=1>
	<tr>
	<th>Nama</th>
	<th>no Hp</th>
	<th>jenis kelamin</th>
	<th>username</th>
  <th>email</th>
  <th>password</th>
	</tr>
	<?php
	$result = mysqli_query($koneksi, "SELECT * FROM data ORDER BY id DESC");
	while ($user_data = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>".$user_data['nama']."</td>";
		echo "<td>".$user_data['no_hp']."</td>";
		echo "<td>".$user_data['jenis_kelamin']."</td>";
    echo "<td>".$user_data['username']."</td>";
    echo "<td>".$user_data['email']."</td>";
    echo "<td>".$user_data['password']."</td>";
	}
	?>
		</table>
</body>
</html>
