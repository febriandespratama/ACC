<html>
<head>
    <title>ACC | Tambah Jadwal</title>
</head>

<body>

    <form action="tambah_jadwal.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr>
                <td>Hari</td>
                <td><input type="text" name="hari"></td>
            </tr>
            <tr>
                <td>Waktu</td>
                <td><input type="text" name="waktu"></td>
            </tr>
            <tr>
                <td>Tempat</td>
                <td><input type="text" name="tempat"></td>
            </tr>
            <tr>
                <td>Kegiatan</td>
                <td><input type="text" name="kegiatan"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="tambah"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $hari = $_POST['hari'];
        $waktu = $_POST['waktu'];
        $tempat = $_POST['tempat'];
        $kegiatan = $_POST['kegiatan'];

        // include database connection file
        include_once("koneksi.php");

        // Insert user data into table
        $result = mysqli_query($koneksi, "INSERT INTO jadwal(hari,waktu,tempat,kegiatan) VALUES('$hari','$waktu','$tempat','$kegiatan')");

        // Show message when user added
        echo "Berhasil Di tambahkan. <a href='pertemuan_admin.php'>View Users</a>";
    }
    ?>
</body>
</html>
