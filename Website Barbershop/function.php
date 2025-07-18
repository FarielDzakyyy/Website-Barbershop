<?php
$koneksi = mysqli_connect("localhost", "root", "", "webif");

// Cek koneksi
if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
