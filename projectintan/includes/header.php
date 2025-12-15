<?php
// =========================================
// PHP LOGIC & DATA
// =========================================

// Contoh variabel data dinamis (placeholder)
$project_title = "Agro Lestari | Pengelolaan Lanskap Hutan Berbasis Komunitas";
$main_heading = "Rancangan Pengelolaan Lanskap Hutan untuk Stabilitas Ekosistem dan Penguatan Ekonomi Berbasis Komunitas";

// Untuk navigasi. Pastikan nama item sesuai dengan gambar terbaru (Pasar Tumpah, Peta Zonasi, Edukasi, Galeri)
$nav_items = [
    'Gambaran Umum' => 'index.php?section=umum',
    'Pasar Tumpah' => 'index.php?section=pasar',
    'Peta Zonasi' => 'index.php?section=maps',
    'Edukasi' => 'index.php?section=edukasi',
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $project_title ?></title>
    <link rel="stylesheet" href="style.css"> 
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        /* CSS Dasar & Kontainer */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* ----------------------- */
        /* NAVBAR STYLING (Disempurnakan) */
        /* ----------------------- */

        .navbar {
            background-color: #2e602e; /* Warna hijau gelap untuk Navbar */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            position: sticky; /* Sticky atau Fixed, tergantung preferensi */
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        .nav-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 60px; /* Tinggi Navbar lebih ramping */
        }

        .logo {
            font-size: 24px;
            font-weight: 700;
            color: #fff; /* Logo putih */
        }

        .main-nav ul {
            list-style: none;
            display: flex;
        }

        .main-nav ul li a {
            padding: 10px 15px;
            margin: 0 5px;
            color: #fff;
            font-weight: 500;
            transition: color 0.3s, background-color 0.3s;
            border-radius: 5px;
        }

        .main-nav ul li a:hover {
            background-color: rgba(255, 255, 255, 0.1);
            color: #a3cc69;
        }
        
        /* Tombol Mengobrol */
        .btn-mengobrol {
            background-color: #a3cc69; /* Warna hijau terang untuk CTA */
            color: #333;
            padding: 8px 15px;
            border-radius: 5px;
            font-weight: 600;
            margin-left: 20px;
            transition: background-color 0.3s;
        }

        .btn-mengobrol:hover {
            background-color: #8cbb45;
        }
        
        .menu-toggle {
             display: none;
        }

        /* ----------------------- */
        /* HERO SECTION STYLING (Sesuai Gambar) */
        /* ----------------------- */
        
        .hero-section {
            background-color: #4CAF50; /* Warna hijau dasar */
            background-color: #387838; /* Warna hijau gelap yang lebih mendekati gambar */
            min-height: 80vh; /* Tinggi minimal 80% dari viewport */
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 80px 0; /* Padding tambahan untuk ruang */
        }

        .hero-card {
            background-color: rgba(0, 0, 0, 0.3); /* Latar belakang semi-transparan (warna abu-abu gelap) */
            padding: 40px 60px;
            max-width: 900px;
            margin: 0 auto;
            text-align: center;
            border-radius: 10px;
            color: #ffffff;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .hero-card h1 {
            font-size: 40px;
            font-weight: 800;
            line-height: 1.3;
            margin-bottom: 15px;
        }

        .hero-card p {
            font-size: 18px;
            font-weight: 300;
            margin-bottom: 30px;
        }

        .btn-jelajahi {
            display: inline-block;
            background-color: #a3cc69; /* Warna tombol sesuai gambar */
            color: #333;
            padding: 12px 25px;
            border-radius: 50px;
            font-weight: 700;
            transition: background-color 0.3s;
        }

        .btn-jelajahi:hover {
            background-color: #8cbb45;
        }

    </style>
</head>
<body>

    <header class="navbar">
        <div class="container nav-content">
            <a href="index.php" class="logo">"Agro Lestari"</a>
            
            <div class="menu-toggle" id="menuToggle">
                <i class="fas fa-bars"></i>
            </div>
            
            <div style="display: flex; align-items: center;">
                <nav class="main-nav" id="mainNav">
                    <ul>
                        <?php foreach ($nav_items as $text => $url): ?>
                            <li><a href="<?= $url ?>"><?= $text ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <section class="hero-section" id="lokasi">
        <div class="container">
            <div class="hero-card">
                <h1><?= $main_heading ?></h1>
                <p>Mewujudkan keseimbangan antara pelestarian alam dan peningkatan kesejahteraan masyarakat.</p>
                <a href="#data" class="btn-jelajahi">
                    JELAJAHI →
                </a>
            </div>
        </div>
    </section>
    
    </body>
</html>