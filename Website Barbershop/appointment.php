<?php
// Konfigurasi koneksi database
$host = "localhost";         // Server database, default = localhost
$user = "root";              // Username default phpMyAdmin di XAMPP/Laragon
$password = "";              // Password default biasanya kosong
$dbname = "barber";          // Nama database yang kamu buat

// Membuat koneksi
$conn = new mysqli($host, $user, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Cek jika data dikirim lewat metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $name = $_POST['name'];
    $email = $_POST['email_address'];
    $phone = $_POST['phone'];
    $category = $_POST['category'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $message = $_POST['message'];

    // Simpan ke database

    try {
        $cekSql = "SELECT * FROM appointments WHERE date = ? AND time = ?";
        $cekStmt = $conn->prepare($cekSql);
        $cekStmt->bind_param("ss", $date, $time);
        $cekStmt->execute();
        $result = $cekStmt->get_result();

        if ($result->num_rows > 0) {
            echo "<script>alert('Maaf, waktu tersebut sudah dipesan. Silakan pilih waktu lain.'); window.location.href='appointment.html';</script>";
        } else {
            $sql = "INSERT INTO appointments (name, email_address, phone, category, date, time, message)
            VALUES (?, ?, ?, ?, ?, ?, ?)";

            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sssssss", $name, $email, $phone, $category, $date, $time, $message);

            if ($stmt->execute()) {
                echo "<script>alert('Appointment berhasil dibuat!'); window.location.href='appointment.html';</script>";
            } else {
                echo "Terjadi kesalahan: " . $stmt->error;
            }

            $stmt->close();
        }
    } catch (Exception $e) {
        echo "Terjadi kesalahan: " . $e->getMessage();
    }
}

$conn->close();
