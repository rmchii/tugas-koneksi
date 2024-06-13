<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "uts_312310004";
$koneksi = mysqli_connect($host, $user, $pass, $db);
if ($koneksi == false)
{
    echo "Koneksi ke server gagal.";
    die();
} else {
    echo "Koneksi Berhasil";
}
?>