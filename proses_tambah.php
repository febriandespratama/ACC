<?php
// include database connection file
include("koneksi.php");
// Check If form submitted, insert form data into users table.
if(isset($_POST['Submit'])) {
    $nama = $_POST['nama'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $nohp = $_POST['nohp'];
    $email = $_POST['email'];

    // Insert user data into table
    $result = mysqli_query($koneksi,"INSERT INTO data (nama,jeniskelamin,nohp,email) VALUES ('$nama','$jeniskelamin','$nohp','$email')");

    // Show message when user added
    if( $result ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        echo (" <script language='JavaScript'>window.alert('Pendaftaran Sukses!');
                window.location.href='profil.php?status=sukses';
                </script>");
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        echo (" <script language='JavaScript'>window.alert('Pendaftaran Gagal!');
                window.location.href='daftar.php';
                </script>");
    }
}
?>
