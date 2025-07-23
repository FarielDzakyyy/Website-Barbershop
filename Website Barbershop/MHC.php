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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Multi Hair Colors - Haircut Barbershop</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --primary-red: #e53935;
      --light-red: #ffebee;
      --text-dark: #212121;
      --text-light: #fff;
      --btn-hover: #d32f2f;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Montserrat', sans-serif;
      background-color: var(--primary-red);
      color: var(--text-dark);
      line-height: 1.8;
    }

    .container {
      max-width: 960px;
      margin: 40px auto;
      background-color: #fff;
      padding: 40px 30px;
      border-radius: 16px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }

    h1 {
      font-size: 32px;
      margin-bottom: 20px;
      font-weight: 700;
      border-left: 8px solid var(--primary-red);
      padding-left: 15px;
    }

    h2 {
      font-size: 22px;
      margin-top: 40px;
      margin-bottom: 15px;
      color: var(--primary-red);
    }

    p,
    li {
      font-size: 16px;
      margin-bottom: 15px;
    }

    ul {
      padding-left: 20px;
    }

    .highlight {
      background-color: var(--light-red);
      border-left: 5px solid var(--primary-red);
      padding: 16px 20px;
      margin: 30px 0;
      border-radius: 8px;
      font-size: 15.5px;
    }

    .btn-back {
      display: inline-block;
      margin-top: 25px;
      padding: 10px 20px;
      background: linear-gradient(to right, #ff0000ff, #f36565ff);
      color: white;
      text-decoration: none;
      font-weight: bold;
      border-radius: 30px;
      transition: 0.3s ease;
      box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }

    .btn-back:hover {
      background-color: #ff5100ff;
      transform: translateY(-2px);
    }

    @media (max-width: 600px) {
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
    <h1>Multi Hair Colors untuk Pria Modern: Berani Tampil Beda</h1>
    <p>
      Dalam dunia fashion dan grooming pria, pewarnaan rambut bukan lagi hal asing. Kini, <strong>multi hair colors</strong> menjadi tren baru bagi mereka yang ingin mengekspresikan diri secara unik dan artistik. Di Haircut Barbershop, kami menawarkan layanan pewarnaan rambut profesional dengan berbagai pilihan kombinasi warna yang stylish dan modern.
    </p>

    <div class="highlight">
      🎨 <strong>Tahukah kamu?</strong> Memadukan dua atau lebih warna rambut bisa menonjolkan kepribadian dan membentuk identitas visual yang kuat.
    </div>

    <h2>1. Apa Itu Multi Hair Colors?</h2>
    <p>
      Multi hair colors adalah teknik pewarnaan rambut menggunakan dua atau lebih warna berbeda, baik dalam gradasi (ombre, balayage), blok warna kontras, atau highlight kreatif.
    </p>

    <h2>2. Teknik Pewarnaan Populer</h2>
    <ul>
      <li><strong>Ombre:</strong> Gradasi warna dari gelap ke terang atau sebaliknya.</li>
      <li><strong>Balayage:</strong> Teknik sapuan warna alami untuk efek sun-kissed.</li>
      <li><strong>Two-Tone:</strong> Kombinasi kontras seperti silver-blue, red-black, dsb.</li>
      <li><strong>Highlight/Lowlight:</strong> Tambahan warna terang/gelap untuk tekstur visual.</li>
      <li><strong>Color Block:</strong> Area rambut dibagi jadi warna bold seperti biru neon.</li>
    </ul>

    <h2>3. Kenapa Cocok untuk Pria?</h2>
    <ul>
      <li><strong>Ekspresi diri:</strong> Menonjolkan karakter dan gaya hidup.</li>
      <li><strong>Tren fashion:</strong> Pas untuk gaya streetwear, casual, atau edgy formal.</li>
      <li><strong>Menarik perhatian:</strong> Penampilan lebih berani dan tidak monoton.</li>
      <li><strong>Uban stylish:</strong> Bukan ditutupi, tapi dijadikan bagian gaya baru.</li>
    </ul>

    <h2>4. Tips Memilih Warna</h2>
    <ul>
      <li>Sesuaikan dengan warna kulit dan rambut asli.</li>
      <li>Pilih warna sesuai kepribadian, tidak terlalu ekstrem jika pemula.</li>
      <li>Konsultasikan dengan stylist dan lihat preview digital dahulu.</li>
    </ul>

    <div class="highlight">
      ✅ <strong>Saran Haircut:</strong> Gunakan toner dan shampoo khusus agar warna tahan lama dan rambut tetap sehat.
    </div>

    <h2>5. Perawatan Rambut Diwarnai</h2>
    <p>
      Proses bleaching dan pewarnaan dapat menyebabkan rambut kering jika tidak dirawat. Oleh karena itu:
    </p>
    <ul>
      <li>Gunakan shampoo bebas sulfat khusus rambut diwarnai.</li>
      <li>Deep conditioning setiap minggu.</li>
      <li>Hindari sinar matahari langsung terlalu lama.</li>
      <li>Kurangi penggunaan alat panas (catokan, hair dryer).</li>
    </ul>

    <h2>6. Produk yang Kami Gunakan</h2>
    <p>
      Produk premium bebas amonia, aman, dan bersertifikat. Dikerjakan oleh barber profesional dengan teknik warna yang tepat.
    </p>

    <h2>7. FAQ</h2>
    <ul>
      <li><strong>Hanya untuk anak muda?</strong><br>Tidak. Semua umur bisa tampil stylish sesuai gayanya.</li>
      <li><strong>Berapa lama prosesnya?</strong><br>Rata-rata 1.5–3 jam, tergantung teknik dan warna.</li>
      <li><strong>Warna tahan berapa lama?</strong><br>4–8 minggu tergantung perawatan.</li>
    </ul>

    <h2>Kesimpulan</h2>
    <p>
      Multi hair colors bukan hanya tren, tapi juga cara mengekspresikan diri. Di Haircut Barbershop, kami bantu kamu tampil beda dengan hasil yang aman, stylish, dan memuaskan.
    </p>

    <p><em>Yuk konsultasikan warna favoritmu, dan jadikan rambutmu bagian dari karakter yang lebih kuat.</em></p>

    <a href="services.php" class="btn-back">← Kembali ke Services</a>
  </div>
</body>

</html>