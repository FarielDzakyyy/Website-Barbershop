<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "barbershop";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT id, name, password, role FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
  $user = $result->fetch_assoc();

  if (password_verify($password, $user['password'])) {
    echo json_encode([
      "success" => true,
      "message" => "Login berhasil.",
      "user" => [
        "id" => $user['id'],
        "name" => $user['name'],
        "email" => $email,
        "role" => $user['role']
      ]
    ]);
  } else {
    echo json_encode(["success" => false, "message" => "Password salah."]);
  }
} else {
  echo json_encode(["success" => false, "message" => "Email tidak ditemukan."]);
}

$conn->close();
?>
