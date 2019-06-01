<?php
include("Koneksi.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['submit'])){
    // ambil data dari formulir

        $username = $_POST['username'];
        $password = $_POST['password'];
        $password_lagi = $_POST['password_lagi'];
        $level=$_POST['level'];

        // buat query
        if($password===$password_lagi){
            $sql = "INSERT INTO user (username, password,level) VALUE ('$username','$password','$level')";
            $query = mysqli_query($koneksi, $sql);

            // apakah query simpan berhasil?
            if( $query ) {
                // kalau berhasil alihkan ke halaman registrasi selanjutnya dengan status=sukses
                echo (" <script language='JavaScript'>window.alert('Registrasi Berhasil Sukses!');
                        window.location.href='tambah_data.php?status=sukses';
                        </script>");
            } else {
                // kalau gagal alihkan ke halaman Registrasi.php dengan status=gagal
                echo (" <script language='JavaScript'>window.alert('registrasi Gagal!');
                        window.location.href='registrasi.php';
                        </script>");
            }
        }
        if($password!=$password_lagi){
            echo (" <script language='JavaScript'>alert('Password tidak sesuai!');
                        window.location.href='registrasi.php';
                        </script>");
        }
} else {
    die("Akses dilarang...");
}

?>
