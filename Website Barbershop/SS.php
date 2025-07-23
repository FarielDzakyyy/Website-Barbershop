<?php
session_start();
if (!isset($_SESSION['username'])) {
     header("Location: login.php");
     exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Stylist Shaving - Haircut Barbershop</title>
  <style>
    :root {
      --primary: #fdd835;
      --accent: #fffde7;
      --text-dark: #333;
      --highlight: #fff8e1;
      --border-accent: #fbc02d;
      --button-bg: #fbc02d;
      --button-hover: #f9a825;
    }

    body {
      margin: 0;
      padding: 0;
      background-color: var(--primary);
      font-family: 'Segoe UI', sans-serif;
      color: var(--text-dark);
    }

    .container {
      max-width: 960px;
      margin: 40px auto;
      background-color: #fff;
      padding: 40px 30px;
      border-radius: 16px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    h1, h2 {
      color: #222;
      margin-bottom: 20px;
    }

    h1 {
      font-size: 32px;
    }

    h2 {
      font-size: 22px;
      margin-top: 40px;
    }

    p, ul, ol {
      margin-bottom: 20px;
      line-height: 1.8;
    }

    ul, ol {
      padding-left: 20px;
    }

    .highlight {
      background-color: var(--highlight);
      border-left: 6px solid var(--border-accent);
      padding: 16px;
      margin: 30px 0;
      font-size: 15px;
    }

    .back-button {
      display: inline-block;
      margin-top: 25px;
      padding: 10px 20px;
      background-color: var(--button-bg);
      color: #000;
      font-weight: 600;
      text-decoration: none;
      border-radius: 30px;
      transition: background-color 0.3s ease, transform 0.2s ease;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }

    .back-button:hover {
      background-color: var(--button-hover);
      transform: scale(1.05);
    }

    @media (max-width: 600px) {
      .container {
        padding: 30px 20px;
      }

      h1 {
        font-size: 26px;
      }

      h2 {
        font-size: 20px;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Stylist Shaving: Lebih dari Sekadar Cukur</h1>
    <p>
      Stylist shaving adalah teknik mencukur modern yang dilakukan secara profesional oleh barber terlatih. Di Haircut Barbershop, shaving adalah bentuk seni yang memberikan kenyamanan, presisi, dan perawatan kulit wajah secara menyeluruh.
    </p>

    <div class="highlight">
      🪒 <strong>Fakta menarik:</strong> Teknik mencukur profesional juga berfungsi sebagai eksfoliasi kulit mati secara alami.
    </div>

    <h2>1. Apa Itu Stylist Shaving?</h2>
    <p>
      Menggabungkan teknik klasik dan modern seperti straight razor, hot towel, dan produk khusus pria. Tidak hanya merapikan kumis, tetapi juga memberikan relaksasi dan efek menyegarkan.
    </p>

    <h2>2. Proses di Haircut Barbershop</h2>
    <ol>
      <li><strong>Pre-Shave Consultation</strong></li>
      <li><strong>Hot Towel Treatment</strong></li>
      <li><strong>Pre-Shave Oil & Cream</strong></li>
      <li><strong>Straight Razor Shave</strong></li>
      <li><strong>Cold Towel & Aftershave Balm</strong></li>
    </ol>

    <h2>3. Manfaat Stylist Shaving</h2>
    <ul>
      <li>Tampilan lebih rapi dan bersih</li>
      <li>Kulit lebih halus dan segar</li>
      <li>Minim risiko iritasi</li>
      <li>Efek relaksasi menyeluruh</li>
    </ul>

    <div class="highlight">
      ✅ <strong>Tips sehat:</strong> Cukur searah tumbuh rambut & gunakan produk khusus pria.
    </div>

    <h2>4. Teknik Shaving Profesional</h2>
    <ul>
      <li><strong>With the Grain:</strong> Searah rambut</li>
      <li><strong>Against the Grain:</strong> Jika dibutuhkan, secara hati-hati</li>
      <li><strong>Blade Stretching:</strong> Menjaga permukaan kulit tetap rata</li>
    </ul>

    <h2>5. Produk yang Digunakan</h2>
    <p>
      Kami hanya memakai produk berkualitas tinggi, termasuk pre-shave oil, shaving cream, aftershave balm bebas alkohol, dan alat steril.
    </p>

    <h2>6. Edukasi Pelanggan</h2>
    <ul>
      <li>Cuci wajah sebelum dan sesudah shaving</li>
      <li>Ganti pisau secara rutin</li>
      <li>Pilih produk sesuai jenis kulit</li>
    </ul>

    <h2>7. FAQ</h2>
    <ul>
      <li><strong>Apakah cocok untuk semua pria?</strong> Ya, termasuk pemula</li>
      <li><strong>Durasi shaving?</strong> Sekitar 20–30 menit</li>
      <li><strong>Berapa sering?</strong> 1–2 minggu sekali</li>
    </ul>

    <h2>Kesimpulan</h2>
    <p>
      Stylist shaving bukan hanya mencukur, tapi perawatan total untuk wajah. Di Haircut Barbershop, ini adalah seni yang membawa kenyamanan dan hasil bersih maksimal.
    </p>

    <a href="services.php" class="back-button">← Kembali ke Layanan</a>
  </div>
</body>
</html>
