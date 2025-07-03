<?php
// Cek apakah form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email_address']);
    $phone = htmlspecialchars($_POST['phone']);
    $category = htmlspecialchars($_POST['category']);
    $date = htmlspecialchars($_POST['date']);
    $message = htmlspecialchars($_POST['message']);

    // Validasi sederhana
    if (empty($name) || empty($email) || empty($phone) || empty($category) || empty($date) || empty($message)) {
        echo "Semua field wajib diisi!";
        exit;
    }

    // Simpan data ke file (opsional, bisa ganti dengan database)
    $file = fopen("appointments.txt", "a");
    fwrite($file, "Nama: $name\nEmail: $email\nPhone: $phone\nKategori: $category\nTanggal: $date\nPesan: $message\n\n");
    fclose($file);

    // Atau kirim email (jika server mendukung)
    // mail("youremail@example.com", "New Appointment", $message);

    // Redirect ke halaman sukses
    header("Location: booking.html");
    exit;
} else {
    echo "Akses tidak sah!";
    exit;
}
?>

<?php
// Konfigurasi koneksi database
$host = "localhost";
$dbname = "nama_database"; // Ganti dengan nama database kamu
$username = "root";        // Sesuaikan username database
$password = "";            // Sesuaikan password database

// Buat koneksi
$conn = new mysqli($host, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Cek jika form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dan lakukan sanitasi
    $name     = $conn->real_escape_string($_POST['name']);
    $email    = $conn->real_escape_string($_POST['email_address']);
    $phone    = $conn->real_escape_string($_POST['phone']);
    $category = $conn->real_escape_string($_POST['category']);
    $date     = $conn->real_escape_string($_POST['date']);
    $message  = $conn->real_escape_string($_POST['message']);

    // Validasi sederhana
    if (empty($name) || empty($email) || empty($phone) || empty($category) || empty($date) || empty($message)) {
        echo "Semua field wajib diisi!";
        exit;
    }

    // Query insert ke database
    $sql = "INSERT INTO appointments (name, email, phone, category, appointment_date, message)
            VALUES ('$name', '$email', '$phone', '$category', '$date', '$message')";

    if ($conn->query($sql) === TRUE) {
        // Redirect ke halaman sukses
        header("Location: booking.html");
        exit;
    } else {
        echo "Error: " . $conn->error;
    }

    // Tutup koneksi
    $conn->close();
} else {
    echo "Akses tidak sah!";
    exit;
}
?>
