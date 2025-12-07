<div class="container-fluid product-container">
    <style>
        /* ======================================= */
        /* 1. Latar Belakang Gradasi (SESUAI PERMINTAAN) */
        /* ======================================= */
        .product-container {
            /* Menggunakan gradasi Kuning ke Hijau yang asli dari file awal */
            background: linear-gradient(to right, #FFFF00, #90EE90); /* Kuning Cerah ke Hijau Muda */
            padding-top: 50px;
            padding-bottom: 50px;
            min-height: 100vh;
            position: relative; 
            overflow: hidden; /* Penting untuk menampung elemen yang rotasi/geser */
        }

        .product-content {
            position: relative;
            max-width: 900px; /* Ukuran kontainer tengah */
            margin: 0 auto;
            text-align: center;
        }

        /* ======================================= */
        /* 2. Gambar Utama & Splash */
        /* ======================================= */
        .main-product-img {
            /* Gambar utama adalah Es Teler + Splash */
            width: 500px; /* Ukuran yang cukup besar */
            height: auto;
            z-index: 15; 
            position: relative;
            margin: 0 0 30px; 
            border-radius: 0; /* Pastikan tidak ada border-radius yang mengganggu splash */
        }

        /* 3. Judul dan Keterangan */
        .product-title {
            font-size: 3rem;
            font-weight: 900; 
            color: #38761d; /* Warna teks hijau gelap */
            margin-top: -30px; /* Menaikkan judul agar dekat dengan gelas */
            position: relative;
            z-index: 20;
            text-shadow: 2px 2px 4px rgba(255, 255, 255, 0.5); /* Shadow agar lebih terbaca */
        }

        /* 4. Badge Promo (10K) - Meniru elemen di Figma */
        .promo-badge {
            position: absolute;
            bottom: 14%; /* Sesuaikan agar berada di sebelah kanan bawah gelas */
            right: 30%; 
            background-color: #FFD700; /* Kuning emas */
            color: #FF4500; /* Merah oranye */
            padding: 15px 20px; /* Padding lebih besar untuk bentuk bulat */
            border-radius: 50%; /* Bentuk bulat */
            font-size: 1.2rem;
            line-height: 1.1;
            font-weight: 900;
            transform: rotate(-15deg);
            border: 4px solid #FF4500;
            z-index: 25;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            width: 150px; /* Menentukan lebar/tinggi agar bulat sempurna */
            height: 150px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .promo-badge .price {
            font-size: 2rem;
        }


        /* ======================================= */
        /* 5. Style untuk Bahan-bahan */
        /* ======================================= */
        .ingredient-item {
            position: absolute;
            text-align: center;
            width: 120px; /* Ukuran container bahan */
            z-index: 5;
            /* Tambahkan sedikit rotasi agar terlihat dinamis seperti panah di Figma */
            transform-origin: center center;
        }

        .ingredient-img {
            width: 80px; 
            height: 80px;
            object-fit: cover; 
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            border: 2px solid white; /* Menambahkan bingkai putih tipis */
        }

        .ingredient-caption {
            font-weight: bold;
            font-size: 14px;
            margin-top: 5px;
            color: #38761d; 
            text-shadow: 1px 1px 2px rgba(255, 255, 255, 0.7);
        }
        
        /* 6. Penempatan Bahan-bahan (Disinkronkan dengan Figma) */
        
        /* Kiri Atas: Creamer */
        .ing-1 { top: 100px; left: 15%; transform: rotate(-10deg); } 
        /* Tengah Kiri Atas: Nangka Manis */
        .ing-2 { top: 250px; left: 5%; transform: rotate(5deg); } 
        /* Kiri Bawah: Alpukat Mentega */
        .ing-3 { bottom: 70px; left: 15%; transform: rotate(-15deg); } 
        
        /* Kanan Atas: Biji Selasih */
        .ing-6 { top: 120px; right: 15%; transform: rotate(10deg); } 
        /* Tengah Kanan Bawah: Agar agar Hijau */
        .ing-5 { top: 250px; right: 5%; transform: rotate(-5deg); } 
        /* Kanan Bawah: Es Batu */
        .ing-4 { bottom: 70px; right: 15%; transform: rotate(15deg); } 
        
        /* Paling Bawah Tengah: Agar agar Merah */
        .ing-7 { bottom: -40px; left: 50%; transform: translateX(-50%); } 

        /* ======================================= */
        /* 7. Media Query untuk Mobile */
        /* ======================================= */
        @media (max-width: 768px) {
            .product-container {
                padding-top: 20px;
                min-height: 80vh;
            }
            .main-product-img {
                width: 300px; 
            }
            .product-title {
                font-size: 1.5rem;
                margin-top: 10px;
            }
            .promo-badge {
                right: 10%;
                bottom: 25%;
                font-size: 1rem;
                padding: 10px;
                width: 100px;
                height: 100px;
            }
            .promo-badge .price {
                font-size: 1.5rem;
            }
            .ingredient-item {
                display: none; 
            }
        }
    </style>

    <div class="product-content">
        <div class="promo-badge">
            <span>ES TELER</span>
            <span>CREAMY</span>
            <span class="price">10K</span>
        </div>
        
        <h1 class="fw-bolder product-title">ES TELER CREAMY BUK TUTY</h1>
        <img src="assets/Es teler1.png" alt="Es Teler Creamy Buk Tuty" class="main-product-img">
        

        <div class="ingredient-item ing-1">
            <img src="assets/cremer.png" alt="Kremes Bubuk/Susu Bubuk" class="ingredient-img">
            <div class="ingredient-caption">Creamer</div>
        </div>

        <div class="ingredient-item ing-2">
            <img src="assets/nangka.webp" alt="Potongan Nangka Manis" class="ingredient-img">
            <div class="ingredient-caption">Nangka Manis</div>
        </div>

        <div class="ingredient-item ing-3">
            <img src="assets/alpukat.webp" alt="Alpukat Mentega Segar" class="ingredient-img">
            <div class="ingredient-caption">Alpukat Mentega</div>
        </div>

        <div class="ingredient-item ing-7">
            <img src="assets/agar.jpg" alt="Potongan Agar-agar Merah" class="ingredient-img">
            <div class="ingredient-caption">Agar agar Merah</div>
        </div>

        <div class="ingredient-item ing-4">
            <img src="assets/batu.jpg" alt="Es Batu Kristal" class="ingredient-img">
            <div class="ingredient-caption">Es Batu </div>
        </div>

        <div class="ingredient-item ing-5">
            <img src="assets/agarh.jpeg" alt="Potongan Agar-agar Hijau" class="ingredient-img">
            <div class="ingredient-caption">Agar agar Hijau</div>
        </div>

        <div class="ingredient-item ing-6">
            <img src="assets/selasih.jpg" alt="Biji Selasih" class="ingredient-img">
            <div class="ingredient-caption">Biji Selasih</div>
        </div>
        
    </div>
</div>