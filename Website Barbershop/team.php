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
  <title>Meet Our Team - Barbershop</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --yellow: #f9c700;
      --black: #111;
      --gray: #666;
      --light-bg: #fffaf2;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Montserrat', sans-serif;
      background-color: var(--light-bg);
      color: var(--black);
      line-height: 1.6;
    }

    header {
      background-color: var(--yellow);
      color: var(--black);
      padding: 50px 20px;
      text-align: center;
      animation: fadeInUp 1s ease-out;
    }

    header h1 {
      font-size: 36px;
      font-weight: 700;
    }

    header p {
      font-size: 18px;
      margin-top: 10px;
    }

    .team-section {
      max-width: 1200px;
      margin: 40px auto;
      padding: 0 20px;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 30px;
      animation: fadeInUp 1s ease-out;
    }

    .team-card {
      background-color: #fff;
      border-radius: 16px;
      padding: 20px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
      text-align: center;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .team-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
    }

    .team-card img {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 15px;
      border: 4px solid var(--yellow);
    }

    .team-card h3 {
      font-size: 20px;
      font-weight: 600;
      margin-bottom: 5px;
    }

    .team-card p {
      font-size: 14px;
      color: var(--gray);
      margin-bottom: 8px;
    }

    .team-card .position {
      font-size: 14px;
      font-weight: 700;
      text-transform: uppercase;
      color: var(--yellow);
      margin-bottom: 10px;
    }

    .team-card p.description {
      font-size: 14px;
      color: var(--gray);
      margin-bottom: 8px;
    }

    .back-btn {
      display: inline-block;
      background-color: var(--yellow);
      color: #000;
      padding: 12px 26px;
      font-size: 16px;
      font-weight: bold;
      border-radius: 30px;
      text-decoration: none;
      margin: 50px auto;
      transition: background-color 0.3s ease, transform 0.3s ease;
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
      animation: fadeInUp 1.2s ease-out;
    }

    .back-btn:hover {
      background-color: #e0b800;
      transform: translateY(-2px);
    }

    footer {
      background-color: #222;
      color: white;
      text-align: center;
      padding: 20px 10px;
      margin-top: 60px;
      font-size: 14px;
    }

    footer a {
      color: var(--yellow);
      text-decoration: none;
      font-weight: bold;
    }

    footer a:hover {
      text-decoration: underline;
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

    @media (max-width: 768px) {
      header h1 {
        font-size: 28px;
      }

      .team-card p {
        font-size: 13px;
      }

      .back-btn {
        font-size: 14px;
        padding: 10px 20px;
      }
    }
  </style>
</head>

<body>

  <header>
    <h1>Meet Our Team</h1>
    <p>Professional. Skilled. Friendly.</p>
  </header>

  <section class="team-section">
    <div class="team-card">
      <img src="assets/images/gua.jpeg" alt="Fariel Dzaky" />
      <h3>Fariel Dzaky</h3>
      <p class="position">Founder</p>
      <p class="description">Dari sebuah kursi sederhana dan niat besar, Fariel memulai perjalanan sebagai barber dengan mimpi: membangun tempat yang nyaman untuk semua pria tampil lebih baik. Kini, dengan pengalaman dan dedikasi tinggi, ia membuktikan bahwa barbershop bukan hanya tempat cukur rambut—tetapi tempat membentuk karakter dan kepercayaan diri.</p>
    </div>

    <div class="team-card">
      <img src="assets/images/atha.jpeg" alt="Ibnu Atha" />
      <h3>Ibnu Atha</h3>
      <p class="position">CEO</p>
      <p class="description">Atha selaku CEO dari Barbershop ini, memiliki visi untuk menghadirkan layanan grooming yang tak hanya berkualitas, tapi juga nyaman dan berkelas. Berbekal pengalaman di bidang manajemen dan kecintaannya terhadap dunia gaya hidup pria, ia terus memimpin tim dengan semangat inovasi, membangun brand yang mengutamakan kepuasan dan kepercayaan pelanggan.</p>
    </div>

    <div class="team-card">
      <img src="assets/images/iqbal.jpg" alt="Iqbal Maulana" />
      <h3>M Iqbal Maulana</h3>
      <p class="position">Komisaris</p>
      <p class="description">Di balik layar, Iqbal adalah sosok yang memastikan roda bisnis tetap stabil dan terarah. Ia berperan penting dalam menjaga visi dan misi barbershop tetap konsisten, sambil memberikan masukan strategis dari sisi pengembangan usaha. Dengan sudut pandang yang tajam dan pengalaman yang matang, barbershop ini melangkah lebih percaya diri ke masa depan.</p>
    </div>
  </section>

  <div style="text-align: center;">
    <a href="contact.php" class="back-btn">← Kembali ke Contact</a>
  </div>

  <footer>
    <p>&copy; 2025 <a href="#">Haircut</a>. All Rights Reserved.</p>
  </footer>

</body>

</html>