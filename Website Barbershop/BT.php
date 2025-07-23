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
  <title>Perawatan Tubuh untuk Pria Modern - Haircut Barbershop</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      line-height: 1.7;
      background: linear-gradient(to right, #22cf98ff, #83f905ff);
      color: #333;
      padding: 40px 20px;
    }

    .container {
      max-width: 960px;
      margin: auto;
      background-color: #fff;
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
      background-color: #e8f5e9;
      border-left: 6px solid #4caf50;
      padding: 15px 20px;
      margin: 20px 0;
      border-radius: 8px;
      font-size: 15px;
    }

    .btn-back {
      display: inline-block;
      margin-bottom: 25px;
      padding: 10px 22px;
      background: #4caf50;
      color: #fff;
      text-decoration: none;
      border-radius: 30px;
      transition: all 0.3s ease;
      font-weight: 600;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .btn-back:hover {
      background-color: #388e3c;
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
    <h1>Body Treatments untuk Pria Modern: Lebih dari Sekadar Gaya</h1>
    <p>
      Perawatan tubuh atau <em>body treatments</em> kini bukan hanya menjadi kebutuhan wanita saja. Pria modern mulai menyadari bahwa merawat tubuh secara menyeluruh adalah bagian dari gaya hidup sehat dan profesional. Di Haircut Barbershop, kami menyediakan berbagai layanan perawatan tubuh yang dirancang khusus untuk pria aktif dan peduli penampilan.
    </p>

    <div class="highlight">
      💡 <strong>Tahukah kamu?</strong> Perawatan tubuh bukan hanya soal estetika, tapi juga kesehatan kulit, relaksasi otot, dan kebersihan pribadi.
    </div>

    <h2>1. Apa Itu Body Treatment?</h2>
    <p>
      Body treatment adalah rangkaian perawatan yang bertujuan untuk menjaga kesehatan dan kebersihan kulit tubuh secara menyeluruh. Mulai dari scrubbing (mengangkat sel kulit mati), massage (memijat untuk relaksasi otot), hingga body mask dan aroma therapy.
    </p>

    <h2>2. Jenis-Jenis Body Treatment di Barbershop</h2>
    <ul>
      <li><strong>Body Scrub:</strong> Mengangkat sel kulit mati agar kulit terasa lebih halus, bersih, dan cerah.</li>
      <li><strong>Body Massage:</strong> Memijat area tubuh untuk menghilangkan ketegangan otot dan stres akibat aktivitas harian.</li>
      <li><strong>Back Treatment:</strong> Perawatan khusus untuk punggung yang rentan terhadap jerawat atau kulit kasar.</li>
      <li><strong>Foot Spa:</strong> Merawat kaki yang lelah dengan rendaman air hangat, scrub, dan pijatan relaksasi.</li>
      <li><strong>Hot Towel Treatment:</strong> Menggunakan uap hangat untuk membuka pori-pori, membersihkan kulit, dan memberikan efek menenangkan.</li>
    </ul>

    <h2>3. Manfaat Body Treatment untuk Pria</h2>
    <p>Berikut beberapa alasan mengapa pria juga sebaiknya rutin melakukan perawatan tubuh:</p>
    <ul>
      <li><strong>Menjaga kebersihan dan kesehatan kulit.</strong></li>
      <li><strong>Mengurangi stres dan ketegangan otot akibat kerja berat atau olahraga.</strong></li>
      <li><strong>Meningkatkan kepercayaan diri dengan kulit yang bersih dan segar.</strong></li>
      <li><strong>Memberi waktu untuk relaksasi dan “me time”.</strong></li>
    </ul>

    <div class="highlight">
      ✅ <strong>Tips:</strong> Lakukan perawatan tubuh minimal 1–2 kali dalam sebulan untuk hasil yang optimal dan menjaga kebersihan kulit secara konsisten.
    </div>

    <h2>4. Edukasi dari Haircut Barbershop</h2>
    <p>
      Di Haircut Barbershop, kami memahami bahwa pria butuh pendekatan berbeda dalam perawatan tubuh. Oleh karena itu, seluruh layanan body treatment kami dirancang khusus dengan produk yang sesuai untuk kulit pria, teknik yang nyaman, serta suasana ruangan yang mendukung relaksasi total.
    </p>
    <p>
      Terapis kami juga berpengalaman dan terlatih secara profesional, memastikan setiap pelanggan mendapatkan pengalaman yang aman, bersih, dan menyegarkan.
    </p>

    <h2>5. Pertanyaan yang Sering Diajukan (FAQ)</h2>
    <ul>
      <li><strong>Apakah body treatment hanya untuk pria tertentu?</strong><br />Tidak. Siapa saja bisa melakukan perawatan tubuh, baik pekerja kantoran, atlet, maupun mahasiswa.</li>
      <li><strong>Apakah ada batasan usia?</strong><br />Umumnya, perawatan ini bisa dilakukan oleh pria di atas usia 16 tahun.</li>
      <li><strong>Berapa lama durasi body treatment?</strong><br />Tergantung layanan, mulai dari 30 hingga 90 menit.</li>
    </ul>

    <h2>Kesimpulan</h2>
    <p>
      Body treatment bukan sekadar tren, tapi kebutuhan untuk menjaga kesehatan dan kenyamanan tubuh di tengah rutinitas yang padat. Di Haircut Barbershop, kami menghadirkan layanan body care yang dirancang khusus untuk memenuhi kebutuhan pria modern.
    </p>

    <p><em>Jangan tunggu tubuhmu lelah. Saatnya manjakan diri dan tampil lebih segar bersama Haircut Barbershop!</em></p>

    <a href="services.php" class="btn-back">← Kembali ke Layanan</a>

  </div>
</body>

</html>