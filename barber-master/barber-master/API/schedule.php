<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "barbershop";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}

$date = $_GET['date'];

$sql = "SELECT b.id, u.name AS user, c.name AS chair, b.start_time, b.end_time, b.status
        FROM bookings b
        JOIN users u ON b.user_id = u.id
        JOIN chairs c ON b.chair_id = c.id
        WHERE b.booking_date = ?
        ORDER BY b.start_time";

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $date);
$stmt->execute();
$result = $stmt->get_result();

$data = [];
while ($row = $result->fetch_assoc()) {
  $data[] = $row;
}

echo json_encode($data);
$conn->close();
?>
