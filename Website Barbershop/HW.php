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
  <title>Panduan Hair Washing - Haircut Barbershop</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to right, #3f51b5, #5c6bc0);
      color: #333;
      line-height: 1.7;
      padding: 40px 20px;
    }

    .container {
      max-width: 960px;
      background-color: #fff;
      margin: auto;
      padding: 40px;
      border-radius: 16px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
      animation: fadeIn 1s ease;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(20px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    h1,
    h2 {
      color: #222;
      margin-bottom: 16px;
    }

    h1 {
      font-size: 32px;
    }

    h2 {
      font-size: 24px;
      margin-top: 40px;
    }

    p {
      margin-bottom: 20px;
    }

    ul,
    ol {
      padding-left: 20px;
      margin-bottom: 20px;
    }

    li {
      margin-bottom: 10px;
    }

    .highlight {
      background-color: #e3f2fd;
      border-left: 6px solid #2196f3;
      padding: 15px 20px;
      margin: 20px 0;
      border-radius: 8px;
      font-size: 15px;
    }

    .btn-back {
      display: inline-block;
      margin-bottom: 25px;
      padding: 10px 20px;
      background: #2196f3;
      color: #fff;
      text-decoration: none;
      border-radius: 30px;
      transition: all 0.3s ease;
      font-weight: 600;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .btn-back:hover {
      background-color: #1976d2;
      transform: translateY(-2px);
    }

    @media (max-width: 600px) {
      .container {
        padding: 25px 20px;
      }

      h1 {
        font-size: 26px;
      }

      h2 {
        font-size: 20px;
      }

      .btn-back {
        width: 100%;
        text-align: center;
      }
    }
  </style>
</head>

<body>
  <div class="container">
    <h1>Panduan Lengkap Hair Washing untuk Pria</h1>
    <p>
      Mencuci rambut (hair washing) bukan sekadar rutinitas membersihkan kepala, tetapi juga bagian penting dari perawatan rambut dan kulit kepala yang sehat. Di Haircut Barbershop, kami sering menemukan bahwa banyak pria belum memahami teknik mencuci rambut yang benar.
    </p>

    <div class="highlight">
      💡 <strong>Fakta penting:</strong> Mencuci rambut dengan cara yang salah bisa menyebabkan rambut kering, ketombe, atau bahkan kerontokan!
    </div>

    <h2>1. Kenapa Hair Washing Penting?</h2>
    <p>Aktivitas sehari-hari membuat rambut kita terkena debu, keringat, minyak alami (sebum), dan produk styling...</p>

    <h2>2. Seberapa Sering Harus Mencuci Rambut?</h2>
    <ul>
      <li><strong>Rambut berminyak:</strong> Bisa dicuci setiap hari atau 1 hari sekali.</li>
      <li><strong>Rambut normal:</strong> Cukup 2–3 kali seminggu.</li>
      <li><strong>Rambut kering atau keriting:</strong> 1–2 kali seminggu.</li>
    </ul>

    <h2>3. Langkah-Langkah Hair Washing yang Benar</h2>
    <ol>
      <li><strong>Basahi rambut dengan air hangat</strong></li>
      <li><strong>Gunakan sampo secukupnya</strong></li>
      <li><strong>Pijat dengan ujung jari</strong></li>
      <li><strong>Bilas hingga benar-benar bersih</strong></li>
      <li><strong>Gunakan kondisioner (jika perlu)</strong></li>
    </ol>

    <h2>4. Jenis Sampo yang Cocok</h2>
    <ul>
      <li><strong>Sampo anti-ketombe:</strong> Untuk gatal dan serpihan putih.</li>
      <li><strong>Sampo pelembap:</strong> Untuk rambut kering dan kusam.</li>
      <li><strong>Sampo untuk rambut rontok:</strong> Mengandung biotin atau kafein.</li>
      <li><strong>Sampo alami (sulfate-free):</strong> Untuk kulit kepala sensitif.</li>
    </ul>

    <h2>5. Edukasi dari Haircut Barbershop</h2>
    <p>Di Haircut Barbershop, kami tidak hanya menyediakan layanan hair wash, tapi juga edukasi perawatan rambut...</p>

    <div class="highlight">
      ✅ <strong>Tips tambahan:</strong> Hindari mencuci rambut dengan air panas karena bisa membuat rambut rapuh dan mudah patah.
    </div>

    <h2>FAQ (Pertanyaan Umum)</h2>
    <ul>
      <li><strong>Apakah pria perlu menggunakan kondisioner?</strong><br />Ya, agar rambut lebih lembut dan tidak mudah patah.</li>
      <li><strong>Apakah boleh mencuci rambut setiap hari?</strong><br />Boleh jika rambut berminyak, gunakan sampo ringan.</li>
      <li><strong>Bagaimana jika rambut tetap lepek?</strong><br />Pastikan bilas bersih dan gunakan produk yang tepat.</li>
      <li><strong>Pagi atau malam lebih baik?</strong><br />Keduanya bisa. Sesuaikan dengan rutinitas Anda.</li>
    </ul>

    <h2>Kesimpulan</h2>
    <p>Hair washing adalah langkah dasar dalam perawatan rambut. Gunakan teknik yang tepat dan produk yang sesuai...</p>
    <p><em>Tampil keren dimulai dari rambut yang sehat. Yuk, rawat rambutmu dengan cara yang benar!</em></p>

    <a href="services.php" class="btn-back">← Kembali ke Layanan</a>
    
  </div>
</body>

</html>