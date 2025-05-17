<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "barbershop"; // Ganti dengan nama database kamu

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}

$user_id = $_POST['user_id'];
$date = $_POST['booking_date'];
$start_time = $_POST['start_time'];
$duration = 60; // Durasi default 60 menit
$end_time = date("H:i:s", strtotime($start_time) + $duration * 60);

// Cari kursi yang tersedia
$sql = "
  SELECT c.id FROM chairs c
  WHERE c.is_active = 1 AND NOT EXISTS (
    SELECT 1 FROM bookings b
    WHERE b.chair_id = c.id
      AND b.booking_date = ?
      AND b.status = 'booked'
      AND (
        (? BETWEEN b.start_time AND b.end_time) OR
        (? BETWEEN b.start_time AND b.end_time) OR
        (b.start_time BETWEEN ? AND ?) -- booking yang tumpang tindih
      )
  )
  LIMIT 1
";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssss", $date, $start_time, $end_time, $start_time, $end_time);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
  $chair = $result->fetch_assoc();
  $chair_id = $chair['id'];

  // Masukkan booking
  $insert = $conn->prepare("INSERT INTO bookings (user_id, chair_id, booking_date, start_time, end_time) VALUES (?, ?, ?, ?, ?)");
  $insert->bind_param("iisss", $user_id, $chair_id, $date, $start_time, $end_time);
  $insert->execute();

  echo json_encode(["success" => true, "message" => "Booking berhasil pada kursi $chair_id."]);
} else {
  echo json_encode(["success" => false, "message" => "Semua kursi penuh di waktu tersebut. Silakan pilih jam lain."]);
}

$conn->close();
?>
