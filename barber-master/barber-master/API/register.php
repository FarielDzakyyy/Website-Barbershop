<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "barbershop";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Enkripsi

// Cek apakah email sudah terdaftar
$check = $conn->prepare("SELECT id FROM users WHERE email = ?");
$check->bind_param("s", $email);
$check->execute();
$check->store_result();

if ($check->num_rows > 0) {
  echo json_encode(["success" => false, "message" => "Email sudah digunakan."]);
} else {
  $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
  $stmt->bind_param("sss", $name, $email, $password);
  $stmt->execute();

  echo json_encode(["success" => true, "message" => "Registrasi berhasil!"]);
}

$conn->close();
?>
