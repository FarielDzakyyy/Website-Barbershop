<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "barbershop";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}

$chair_id = $_POST['chair_id'];
$is_active = $_POST['is_active']; // 1 = aktif, 0 = nonaktif

$stmt = $conn->prepare("UPDATE chairs SET is_active = ? WHERE id = ?");
$stmt->bind_param("ii", $is_active, $chair_id);
$stmt->execute();

if ($stmt->affected_rows > 0) {
  echo json_encode(["success" => true, "message" => "Status kursi berhasil diperbarui."]);
} else {
  echo json_encode(["success" => false, "message" => "Gagal mengubah status kursi."]);
}

$conn->close();
?>
