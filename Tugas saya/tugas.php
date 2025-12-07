<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact - Es Teler Buk Tuty</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <style>
        /* ======================================= */
        /* 1. Latar Belakang Gradasi */
        /* ======================================= */
        body {
            /* Menggunakan gradasi Kuning ke Hijau */
            background: linear-gradient(to right, #FFFF00, #90EE90); /* Kuning Cerah ke Hijau Muda */
            font-family: Arial, Helvetica, sans-serif;
            min-height: 100vh;
        }

        /* ======================================= */
        /* NAVIGASI (Dibuat sederhana agar sesuai screenshot) */
        /* ======================================= */
        .navbar-custom {
            background-color: transparent !important; /* Agar navigasi transparan */
            padding: 10px 0;
        }

        .navbar-brand-custom {
            font-size: 1.2rem;
            font-weight: 900;
            color: #000 !important;
            padding: 5px 10px;
            background-color: #FFFF00; /* Latar belakang kuning untuk brand */
            border-radius: 5px;
        }

        .btn-contact-custom {
            background-color: #FFD700; /* Warna kuning untuk tombol Contact */
            color: #000 !important;
            font-weight: 600;
            border: none;
        }
        
        /* ======================================= */
        /* 2. Style untuk Konten Utama (Hijau Solid dengan Drip) */
        /* ======================================= */
        .contact-section {
            /* PERUBAHAN: Ganti background-color menjadi background gradasi hijau */
            background: linear-gradient(to bottom, #e3ff45ff, #77ff00ff); /* Gradasi Hijau Muda ke Hijau Sedang */
            color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            position: relative;
            overflow: hidden; 
            max-width: 1000px;
            margin: 0 auto;
            /* **PERUBAHAN DISINI** */
            margin-top: 10px; /* Kurangi margin agar lebih ke atas */
            /* Tambahkan padding-bottom di sini untuk menjaga ruang di bawah konten */
            padding-bottom: 40px; 
        }

        /* Efek Drip di Bagian Atas (Simulasi dari desain) */
        .drip-effect-top {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 60px;
            background-color: #FFFF00; /* Kuning */
            border-bottom-left-radius: 50% 20px;
            border-bottom-right-radius: 50% 20px;
            z-index: 1;
        }
        
        /* ======================================= */
        /* 3. Style untuk Konten Text & Kontak */
        /* ======================================= */
        .content-wrapper {
            padding-top: 60px; 
            position: relative;
            z-index: 2; 
        }
        
        .brand-text {
            font-size: 5rem;
            font-weight: 900;
            color: #000;
            line-height: 1;
            margin-bottom: 10px;
        }
        .brand-subtitle {
            font-size: 1.5rem;
            font-weight: 500;
            color: #000;
        }
        .intro-text {
            font-size: 1.2rem;
            font-weight: 600;
            margin-top: 20px;
            color: #000;
            margin-bottom: 25px; /* Tambah jarak ke contact box */
        }
        
        /* Kotak Kontak */
        .contact-box {
            background-color: #FFD700; /* Kuning cerah */
            /* PERBAIKAN: Tambah padding agar kotak lebih besar */
            padding: 25px 30px; 
            border-radius: 10px;
            /* PERBAIKAN: Perbesar lebar kotak */
            width: 350px; 
            margin-left: auto;
            margin-right: 0;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }
        .contact-item {
            display: flex;
            align-items: center;
            /* PERBAIKAN: Tambah jarak antar item */
            margin-bottom: 20px; 
            /* PERBAIKAN: Perbesar ukuran font */
            font-size: 1.3rem; 
            font-weight: 700;
            color: #000;
            text-decoration: none;
            transition: transform 0.2s; /* Tambah efek transisi */
        }
        .contact-item:hover {
            transform: translateX(5px); /* Geser sedikit saat di-hover */
            color: #0056b3; /* Warna berbeda saat di-hover */
        }
        .contact-item:last-child {
            margin-bottom: 0;
        }
        .contact-icon {
            /* PERBAIKAN: Perbesar ukuran ikon */
            width: 35px;
            height: 35px;
            margin-right: 20px;
            color: #fff; 
            font-size: 1.4rem; 
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        /* Icon Colors */
        .icon-wa { background-color: #25D366; border-radius: 50%; }
        /* PERBAIKAN: Ubah warna dan bentuk IG agar sesuai ikon */
        .icon-ig { background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%); border-radius: 8px; color: #fff; } 
        .icon-fb { background-color: #1877F2; border-radius: 50%; }
        .icon-tiktok { background-color: #000; border-radius: 50%; }
        
        /* Gambar Es Teler */
        .es-teler-img {
            max-width: 100%;
            height: auto;
            margin-top: 20px;
            margin-right: auto;
            position: relative;
            z-index: 5;
            width: 400px; 
            /* Tambah efek bayangan untuk memberi kesan pop-out */
            filter: drop-shadow(5px 5px 15px rgba(0, 0, 0, 0.4));
        }
        
        /* Wrapper untuk Intro Text dan Contact Box di kolom kanan */
        .contact-group-right {
            display: flex;
            flex-direction: column;
            align-items: flex-end; 
            width: 100%;
        }

        /* ======================================= */
        /* 4. Media Query untuk Mobile */
        /* ======================================= */
        @media (max-width: 768px) {
            .contact-section {
                margin-top: 20px; /* Kurangi margin atas di mobile */
            }
            .brand-text {
                font-size: 3rem;
            }
            .brand-subtitle {
                font-size: 1.2rem;
            }
            .intro-text {
                font-size: 1rem;
            }
            .contact-group-right {
                align-items: center;
                margin-top: 20px;
            }
            .contact-box {
                width: 100%;
                padding: 15px 20px;
            }
            .contact-item {
                font-size: 1.1rem;
                margin-bottom: 15px;
            }
            .contact-icon {
                width: 30px;
                height: 30px;
                font-size: 1.2rem;
            }
            .es-teler-img {
                width: 100%; /* Lebar penuh di mobile */
            }
        }
    </style>
</head>
<body>

<div class="container">
    <div class="contact-section">
        
        <div class="drip-effect-top"></div>
        
        <div class="row content-wrapper">
            <div class="col-md-6">
                <h1 class="brand-text">Es <span class="brand-subtitle">Buk Tuty</span></h1>
                <h1 class="brand-text">Teler</h1>
                
                <img src="./assets/Es Teler.jpg" alt="Es Teler Creamy Buk Tuty" class="es-teler-img">
            </div>
            
            <div class="col-md-6 d-flex align-items-start justify-content-end">
                <div class="contact-group-right">
                    
                    <p class="intro-text">
                        Segera pesan Es Teler kami dan rasakan sendiri bedanya. Segar, nikmat, dan dijamin bikin nagih!
                    </p>

                    <div class="contact-box">
                        <a href="https://wa.me/6281364505644" target="_blank" class="contact-item">
                            <span class="contact-icon icon-wa"><i class="bi bi-whatsapp"></i></span>
                            0813-6450-5644
                        </a>
                        <a href="https://instagram.com/esteler_buktuty" target="_blank" class="contact-item">
                            <span class="contact-icon icon-ig"><i class="bi bi-instagram"></i></span>
                            esteler_buktuty
                        </a>
                        <a href="https://facebook.com/TutiSiskaYanti" target="_blank" class="contact-item">
                            <span class="contact-icon icon-fb"><i class="bi bi-facebook"></i></span>
                            Tuti Siska Yanti
                        </a>
                        <a href="https://tiktok.com/@estelerbuktuty" target="_blank" class="contact-item">
                            <span class="contact-icon icon-tiktok"><i class="bi bi-tiktok"></i></span>
                            Esteler buktuty
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>