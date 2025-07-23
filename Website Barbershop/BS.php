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
  <title>Beauty & Spa untuk Pria Modern - Haircut Barbershop</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(to right, #7b1fa2, #512da8);
      color: #333;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 960px;
      margin: 40px auto;
      background: #fff;
      border-radius: 15px;
      padding: 40px 25px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
      animation: fadeIn 1s ease;
    }

    h1 {
      font-size: 32px;
      color: #512da8;
      margin-bottom: 20px;
    }

    h2 {
      font-size: 24px;
      color: #333;
      margin-top: 40px;
    }

    p, li {
      font-size: 16px;
      color: #555;
    }

    ul {
      padding-left: 20px;
    }

    li {
      margin-bottom: 12px;
    }

    .highlight {
      background-color: #f9f4ff;
      border-left: 5px solid #ba68c8;
      padding: 15px 20px;
      margin: 25px 0;
      border-radius: 10px;
      font-size: 16px;
      color: #4a148c;
    }

    .btn-back {
      display: inline-block;
      margin-top: 25px;
      padding: 10px 20px;
      background: linear-gradient(to right, #ab47bc, #7e57c2);
      color: white;
      text-decoration: none;
      font-weight: bold;
      border-radius: 30px;
      transition: 0.3s ease;
      box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }

    .btn-back:hover {
      background: linear-gradient(to right, #7e57c2, #ab47bc);
      transform: translateY(-3px) scale(1.03);
      box-shadow: 0 6px 18px rgba(0,0,0,0.2);
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @media (max-width: 768px) {
      .container {
        padding: 30px 20px;
      }

      h1 {
        font-size: 26px;
      }

      h2 {
        font-size: 20px;
      }

      .btn-back {
        padding: 10px 24px;
        font-size: 15px;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Beauty & Spa untuk Pria: Perawatan Diri Bukan Lagi Tabu</h1>
    <p>
      Di era modern, pria tidak lagi malu untuk merawat diri. Perawatan <strong>beauty & spa</strong> kini menjadi bagian dari gaya hidup sehat dan profesional. Haircut Barbershop hadir sebagai solusi lengkap bagi pria yang ingin tampil bersih, segar, dan percaya diri—tak hanya melalui potongan rambut, tapi juga melalui layanan spa dan ketampanan pria.
    </p>

    <div class="highlight">
      🧖‍♂️ <strong>Fakta menarik:</strong> Spa dan perawatan kulit terbukti dapat menurunkan tingkat stres, meningkatkan produktivitas, dan memperbaiki kualitas tidur pria aktif.
    </div>

    <h2>1. Apa Itu Layanan Beauty & Spa untuk Pria?</h2>
    <p>
      Beauty & spa untuk pria mencakup berbagai jenis perawatan tubuh, wajah, dan relaksasi yang dirancang khusus untuk kebutuhan pria. Layanan ini dirancang tidak hanya untuk kecantikan semata, tapi untuk menjaga kesehatan kulit, kebersihan tubuh, dan ketenangan pikiran di tengah aktivitas yang padat.
    </p>

    <h2>2. Jenis-Jenis Layanan Beauty & Spa di Haircut Barbershop</h2>
    <ul>
      <li><strong>Facial Treatment:</strong> Membersihkan pori-pori, menghilangkan komedo, dan mengatasi kulit kusam.</li>
      <li><strong>Steam & Aromatherapy:</strong> Menggunakan uap hangat dan aroma alami untuk relaksasi dan detoksifikasi.</li>
      <li><strong>Massage Therapy:</strong> Pijat relaksasi yang meredakan otot tegang dan stres setelah seharian bekerja.</li>
      <li><strong>Body Scrub & Mask:</strong> Mengangkat sel kulit mati dan menyegarkan kembali kulit tubuh.</li>
      <li><strong>Hand & Foot Spa:</strong> Perawatan kaki dan tangan untuk menjaga kebersihan dan kelembutan kulit.</li>
      <li><strong>Ear Candle:</strong> Membersihkan telinga dan memberikan efek rileksasi kepala.</li>
    </ul>

    <h2>3. Manfaat Beauty & Spa bagi Pria</h2>
    <ul>
      <li>Membersihkan kulit dari polusi dan minyak berlebih.</li>
      <li>Menjaga elastisitas dan kelembapan kulit.</li>
      <li>Meningkatkan sirkulasi darah dan membantu regenerasi sel kulit.</li>
      <li>Meningkatkan rasa percaya diri dan penampilan profesional.</li>
      <li>Memberikan efek relaksasi dan mengurangi stres.</li>
    </ul>

    <div class="highlight">
      ✅ <strong>Tips dari Haircut:</strong> Jangan tunggu kulitmu bermasalah. Perawatan rutin 2 minggu sekali lebih efektif daripada perawatan intensif saat sudah telanjur rusak.
    </div>

    <h2>4. Edukasi: Mengapa Pria Butuh Perawatan Kulit?</h2>
    <p>
      Pria memiliki kulit yang lebih tebal dan berminyak daripada wanita. Hal ini membuat pria lebih rentan terhadap pori-pori tersumbat, komedo, dan jerawat. Perawatan rutin membantu mengatasi masalah-masalah tersebut sebelum berkembang menjadi lebih serius.
    </p>
    <p>
      Selain itu, paparan matahari, polusi, dan stres mempercepat penuaan dini. Facial dan body spa adalah solusi untuk menjaga kulit tetap awet muda dan sehat.
    </p>

    <h2>5. Suasana Spa Eksklusif di Haircut Barbershop</h2>
    <p>
      Di Haircut Barbershop, kami memahami pentingnya kenyamanan dan privasi bagi pelanggan pria. Ruangan perawatan kami didesain khusus dengan pencahayaan lembut, musik tenang, dan terapis profesional yang berpengalaman dalam menangani kebutuhan perawatan pria.
    </p>
    <p>
      Kami hanya menggunakan produk yang aman, alami, dan bebas dari bahan kimia keras, sehingga cocok untuk semua jenis kulit, termasuk yang sensitif.
    </p>

    <h2>6. Pertanyaan Umum (FAQ)</h2>
    <ul>
      <li><strong>Apakah spa untuk pria itu normal?</strong><br />Sangat normal! Spa adalah bentuk perawatan tubuh yang direkomendasikan untuk pria aktif dan modern.</li>
      <li><strong>Berapa lama durasi perawatan?</strong><br />Durasi tergantung layanan, mulai dari 30 menit hingga 90 menit.</li>
      <li><strong>Apakah harus booking terlebih dahulu?</strong><br />Ya, untuk kenyamanan dan privasi, kami menyarankan booking melalui website.</li>
    </ul>

    <h2>Kesimpulan</h2>
    <p>
      Beauty & spa bukan lagi hal yang asing bagi pria. Merawat diri adalah bentuk kepedulian terhadap kesehatan dan kualitas hidup. Dengan layanan spa eksklusif di Haircut Barbershop, kami hadir untuk memberikan perawatan menyeluruh bagi tubuh dan pikiran Anda.
    </p>
    <p><em>Waktunya istirahat sejenak dari rutinitas. Manjakan diri Anda hari ini—karena pria juga pantas untuk merasa rileks dan tampil maksimal.</em></p>

    <a href="services.php" class="btn-back">← Kembali ke Layanan</a>
  </div>
</body>
</html>
