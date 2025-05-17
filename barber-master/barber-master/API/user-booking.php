<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "barbershop";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}

$user_id = $_GET['user_id'];

$sql = "SELECT b.id, c.name AS chair, b.booking_date, b.start_time, b.end_time, b.status
        FROM bookings b
        JOIN chairs c ON b.chair_id = c.id
        WHERE b.user_id = ?
        ORDER BY b.booking_date DESC, b.start_time DESC";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

$data = [];
while ($row = $result->fetch_assoc()) {
  $data[] = $row;
}

echo json_encode($data);
$conn->close();
?>
