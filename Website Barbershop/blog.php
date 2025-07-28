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
  <title>Panduan Lengkap Perawatan Rambut Pria - Haircut Barbershop</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #fffdf5;
      color: #333;
    }

    header {
      background-color: #111;
      color: white;
      padding: 30px 20px;
      text-align: center;
      font-size: 20px;
      font-weight: 600;
      letter-spacing: 1px;
    }

    .container {
      max-width: 900px;
      margin: 40px auto;
      padding: 25px;
      background-color: #ffffff;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
      border-radius: 16px;
    }

    .article-image {
      width: 100%;
      max-width: 400px;
      display: block;
      margin: 0 auto 20px auto;
      border-radius: 10px;
    }

    .article-meta {
      text-align: center;
      font-size: 14px;
      color: #999;
      margin-top: -10px;
      margin-bottom: 30px;
    }

    @keyframes fadeInUp {
      0% {
        opacity: 0;
        transform: translateY(40px);
      }

      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .fade-in {
      animation: fadeInUp 0.8s ease-out;
    }

    h1 {
      font-size: 32px;
      color: #222;
      margin-bottom: 10px;
      text-align: center;
    }

    h2 {
      font-size: 22px;
      color: #111;
      margin-top: 40px;
      border-left: 5px solid #ffcc00;
      padding-left: 12px;
    }

    p {
      font-size: 16px;
      line-height: 1.8;
      margin-bottom: 18px;
    }

    blockquote {
      margin: 30px 0;
      padding: 20px;
      background-color: #fff4cc;
      border-left: 5px solid #ffcc00;
      font-style: italic;
      color: #444;
      border-radius: 8px;
    }

    .btn {
      background-color: #ffcc00;
      color: #000;
      padding: 12px 28px;
      font-weight: 600;
      font-size: 16px;
      border: none;
      border-radius: 25px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
      transition: background-color 0.3s ease, transform 0.2s;
      text-decoration: none;
      display: inline-block;
      margin-top: 40px;
      text-align: center;
    }

    .btn:hover {
      background-color: #ffb700;
      transform: translateY(-2px);
    }

    footer {
      background-color: #111;
      color: white;
      text-align: center;
      padding: 20px;
      margin-top: 60px;
      font-size: 14px;
    }

    @media screen and (max-width: 600px) {
      .container {
        margin: 20px 10px;
        padding: 20px;
      }

      h1 {
        font-size: 26px;
      }

      h2 {
        font-size: 20px;
      }

      .btn {
        width: 100%;
        padding: 12px;
      }
    }
  </style>
</head>

<body>

  <header>
    Artikel & Edukasi Seputar Rambut Pria
  </header>

  <div class="container fade-in">
    <img src="assets/images/sigma.jpeg" alt="Perawatan Rambut Pria" class="article-image">
    <p class="article-meta">Dipublikasikan pada 23 Juli 2025 oleh Haircut Team</p>

    <h1>Panduan Lengkap Perawatan Rambut Pria</h1>

    <p>Rambut adalah mahkota, bukan hanya bagi wanita, tetapi juga bagi pria. Memiliki rambut yang sehat, bersih, dan tertata rapi dapat meningkatkan rasa percaya diri dan menunjang penampilan. Namun, masih banyak pria yang mengabaikan perawatan rambutnya karena dianggap merepotkan atau tidak tahu caranya.</p>

    <h2>1. Kenali Jenis Rambutmu</h2>
    <p>Sebelum mulai merawat, penting untuk mengetahui jenis rambutmu: lurus, bergelombang, keriting, atau ikal. Setiap jenis rambut memiliki kebutuhan dan perawatan yang berbeda. Misalnya, rambut berminyak membutuhkan shampoo yang berbeda dengan rambut kering atau rusak.</p>

    <h2>2. Rutin Mencuci dan Menjaga Kebersihan</h2>
    <p>Gunakan shampoo 2–3 kali seminggu, tergantung aktivitas harianmu. Hindari mencuci rambut setiap hari karena bisa menghilangkan minyak alami yang melindungi kulit kepala. Gunakan air dingin atau suam-suam kuku agar pori-pori tidak terbuka lebar.</p>

    <blockquote>
      “Rambut yang sehat berasal dari kulit kepala yang sehat. Jaga kebersihannya, dan kamu akan lihat hasilnya.”
      — Master Barber Haircur
    </blockquote>

    <h2>3. Gunakan Produk Styling dengan Bijak</h2>
    <p>Pomade, gel, clay, atau wax — pilih sesuai kebutuhan dan tekstur rambutmu. Jangan gunakan terlalu banyak produk styling karena dapat menyebabkan penumpukan dan ketombe. Pastikan kamu membilas rambut dengan bersih sebelum tidur.</p>

    <h2>4. Lakukan Potong Rutin</h2>
    <p>Pangkas rambut setiap 3–4 minggu agar tetap rapi dan sehat. Di Haircur, kamu bisa konsultasi langsung dengan barber kami untuk menentukan model rambut yang cocok dengan bentuk wajah dan gaya hidupmu.</p>

    <h2>5. Hindari Stres dan Konsumsi Makanan Sehat</h2>
    <p>Faktor internal seperti stres, kurang tidur, dan pola makan juga memengaruhi kesehatan rambut. Konsumsilah makanan kaya protein, zat besi, dan vitamin B agar pertumbuhan rambut optimal.</p>

    <p>Dengan menerapkan tips di atas, kamu akan memiliki rambut yang lebih sehat dan penampilan yang lebih percaya diri. Jangan ragu datang ke Haircur Barbershop untuk mendapatkan perawatan terbaik dari tim profesional kami.</p>

    <a href="contact.php" class="btn fade-in">← Kembali ke Blog</a>
  </div>

  <footer>
    &copy; 2025 Haircur Barbershop. All rights reserved.
  </footer>

</body>

</html>