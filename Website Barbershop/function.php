<?php
$koneksi = mysqli_connect("localhost", "root", "", "barber");

// Cek koneksi
if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
