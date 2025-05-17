<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "barbershop";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}

$booking_id = $_POST['booking_id'];

// Update status menjadi canceled
$stmt = $conn->prepare("UPDATE bookings SET status = 'canceled' WHERE id = ?");
$stmt->bind_param("i", $booking_id);
$stmt->execute();

if ($stmt->affected_rows > 0) {
  echo json_encode(["success" => true, "message" => "Booking berhasil dibatalkan."]);
} else {
  echo json_encode(["success" => false, "message" => "Gagal membatalkan booking (mungkin ID tidak ditemukan)."]);
}

$conn->close();
?>
