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
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Gaya Rambut Pria - Haircut Barbershop</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #f9d976, #f39f86);
      color: #333;
      min-height: 100vh;
    }

    .container {
      max-width: 1100px;
      margin: 40px auto;
      padding: 30px;
      background-color: #fff;
      border-radius: 16px;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
      animation: fadeInUp 1s ease forwards;
      opacity: 0;
    }

    h1 {
      font-size: 36px;
      margin-bottom: 30px;
      text-align: center;
      color: #222;
    }

    .highlight {
      background-color: #e3f2fd;
      border-left: 5px solid #2196f3;
      padding: 16px 24px;
      border-radius: 8px;
      margin-bottom: 30px;
      font-size: 15px;
    }

    .styles-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 24px;
      margin-bottom: 40px;
    }

    .card {
      background-color: #fdfdfd;
      border-radius: 12px;
      padding: 20px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
      transition: transform 0.3s, box-shadow 0.3s;
      animation: fadeIn 0.6s ease-in-out forwards;
      opacity: 0;
    }

    .card:nth-child(1) {
      animation-delay: 0.3s;
    }

    .card:nth-child(2) {
      animation-delay: 0.5s;
    }

    .card:nth-child(3) {
      animation-delay: 0.7s;
    }

    .card:nth-child(4) {
      animation-delay: 0.9s;
    }

    .card:nth-child(5) {
      animation-delay: 1.1s;
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(10px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .card:hover {
      transform: translateY(-6px);
      box-shadow: 0 8px 18px rgba(0, 0, 0, 0.15);
    }

    .card h2 {
      font-size: 20px;
      margin-bottom: 12px;
      color: #222;
    }

    .card p {
      font-size: 15px;
      margin-bottom: 8px;
    }

    .card ul {
      margin-top: 8px;
      padding-left: 18px;
    }

    ul li {
      font-size: 14px;
      margin-bottom: 6px;
    }

    .section-title {
      font-size: 24px;
      margin: 40px 0 16px;
      color: #333;
    }

    .btn-back {
      display: inline-block;
      margin-top: 25px;
      padding: 10px 20px;
      background: linear-gradient(to right, #ffa600ff, #f5e24fff);
      color: white;
      text-decoration: none;
      font-weight: 600;
      border-radius: 30px;
      box-shadow: 0 4px 14px rgba(0, 0, 0, 0.15);
      transition: all 0.3s ease;
    }

    .btn-back:hover {
      background: linear-gradient(to right, #ff9500ff, #fec85cff);
      transform: translateY(-3px) scale(1.05);
      box-shadow: 0 6px 18px rgba(0, 0, 0, 0.25);
    }

    .faq ul {
      margin-top: 16px;
      padding-left: 20px;
    }

    .faq li {
      margin-bottom: 14px;
      font-size: 15px;
    }

    .footer {
      text-align: center;
      font-size: 14px;
      color: #777;
      margin-top: 40px;
    }

    @media screen and (max-width: 600px) {
      h1 {
        font-size: 28px;
      }

      .container {
        padding: 20px;
      }
    }
  </style>
</head>

<body>
  <div class="container fade-in">
    <h1>Gaya Potongan Rambut Pria Populer</h1>

    <p style="margin-bottom: 20px;">
      Memilih gaya rambut bukan sekadar mengikuti tren, tapi juga tentang menciptakan identitas dan kenyamanan diri. Temukan gaya yang cocok untuk bentuk wajah, jenis rambut, dan aktivitasmu!
    </p>

    <div class="highlight">
      ✂️ <strong>Penting:</strong> Jangan hanya mengikuti tren, sesuaikan dengan bentuk wajah dan jenis rambutmu untuk hasil terbaik.
    </div>

    <div class="styles-grid">
      <div class="card">
        <h2>Undercut</h2>
        <p>Samping dan belakang tipis, atas panjang.</p>
        <p><strong>Cocok:</strong> Wajah oval/persegi, rambut lurus/gelombang.</p>
      </div>

      <div class="card">
        <h2>Pompadour</h2>
        <p>Volume tinggi di atas, sisi tipis, klasik dan elegan.</p>
        <p><strong>Cocok:</strong> Rambut tebal, gaya formal.</p>
      </div>

      <div class="card">
        <h2>Fade (Low, Mid, High)</h2>
        <ul>
          <li><strong>Low:</strong> Natural dan clean.</li>
          <li><strong>Mid:</strong> Seimbang dan trendi.</li>
          <li><strong>High:</strong> Bold dan modern.</li>
        </ul>
      </div>

      <div class="card">
        <h2>Buzz Cut</h2>
        <p>Potongan sangat pendek dan rata, simpel dan bersih.</p>
        <p><strong>Cocok:</strong> Semua bentuk wajah, gaya minimalis.</p>
      </div>

      <div class="card">
        <h2>French Crop</h2>
        <p>Bagian atas pendek dengan poni ke depan, sisi tipis.</p>
        <p><strong>Cocok:</strong> Rambut tebal atau bergelombang.</p>
      </div>
    </div>

    <h2 class="section-title">Tips Memilih Gaya Rambut</h2>
    <ul>
      <li><strong>Bentuk wajah:</strong> Oval fleksibel, bulat perlu kesan memanjang.</li>
      <li><strong>Jenis rambut:</strong> Lurus vs keriting butuh pendekatan berbeda.</li>
      <li><strong>Gaya hidup:</strong> Sibuk? Pilih gaya low maintenance seperti buzz cut.</li>
    </ul>

    <h2 class="section-title">Edukasi dari Tim Haircut</h2>
    <p>
      Barber kami terlatih tidak hanya memotong, tapi juga memberi saran terbaik sesuai kebutuhanmu. Gunakan produk premium dan teknik modern, hasil lebih tahan lama & stylish.
    </p>

    <div class="highlight">
      💡 <strong>Tips:</strong> Potong rambut setiap 3–4 minggu bantu jaga kesehatan kulit kepala dan tampilan tetap prima.
    </div>

    <h2 class="section-title">FAQ (Pertanyaan Umum)</h2>
    <div class="faq">
      <ul>
        <li><strong>Seberapa sering potong rambut?</strong><br> Idealnya 3–4 minggu sekali.</li>
        <li><strong>Bisa konsultasi gaya rambut?</strong><br> Tentu! Barber kami siap bantu.</li>
        <li><strong>Apakah semua gaya cocok?</strong><br> Tidak, tergantung tekstur & bentuk wajah.</li>
        <li><strong>Perawatan di rumah?</strong><br> Gunakan pomade atau minyak rambut sesuai jenis rambut.</li>
      </ul>
    </div>

    <h2 class="section-title">Kesimpulan</h2>
    <p>
      Potongan rambut yang tepat adalah investasi gaya dan kepercayaan diri. Yuk, konsultasikan dengan tim profesional Haircut Barbershop sekarang!
    </p>

    <a href="services.php" class="btn-back">← Kembali ke Layanan</a>
  </div>

  <div class="footer">
    &copy; 2025 Haircut Barbershop. All rights reserved.
  </div>
</body>

</html>