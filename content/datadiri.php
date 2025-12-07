<style>
    /* Menggunakan latar belakang gradasi kuning-hijau agar konsisten dengan home.php dan product.php */
    .about-background {
        background: linear-gradient(to right, #FFFF00, #90EE90); /* Kuning Cerah ke Hijau Muda */
        padding-top: 50px; 
        padding-bottom: 50px;
        min-height: 100vh; 
    }
    
    .about-content-wrapper {
        /* Konten di dalam container diubah menjadi Creamy Yellow (#FFFDD0) */
        background-color: #FFFDD0; 
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }

    .keunggulan-list {
        list-style-type: none; /* Hilangkan bullet default */
        padding-left: 0;
    }

    .keunggulan-list li {
        margin-bottom: 10px;
        font-size: 1.1rem;
        font-weight: 500;
        color: #38761d; /* Warna hijau gelap untuk penekanan */
    }

    .keunggulan-list li::before {
        content: "\2713"; /* Tanda centang unicode */
        color: #38761d;
        font-weight: bold;
        display: inline-block; 
        width: 1em;
        margin-left: -1em;
    }
</style>

<div class="container-fluid about-background">
    <div class="container about-content-wrapper">
        <h1 class="mb-4 fw-bold text-center">TENTANG KAMI</h1>
        <hr class="mb-5">

        <div class="row">
            <div class="col-md-7">
                <h3 class="fw-bold mb-3" style="color: #4b8b3b;">Filosofi Es Teler Buk Tuty</h3>
                <p style="text-align: justify;">
                    UMKM ini lahir dari tangan sepasang suami istri, Pak Irwan dan Bu Tuty Siska, yang sejak <b>tahun 2022</b> memilih untuk menghadirkan kesegaran sederhana bagi banyak orang. Dengan semangat usaha keluarga, mereka menamai bisnis kecil ini "Es Teler Creamer Buk Tuty."
                </p>
                <p style="text-align: justify;">
                    Setiap gelas Es Teler yang kami sajikan diracik dengan penuh ketelatenan. Perpaduan agar-agar lembut, potongan nangka harum, alpukat segar, biji selasih, dan tentu saja creamer khas racikan Es Teler menjadi cita rasa utama yang membuat pelanggan selalu kembali.
                </p>
                <p class="fst-italic">
                    Bagi Pak Irwan dan Bu Tuty, Es Teler bukan sekadar minuman—melainkan wujud cinta, kerja keras, dan usaha untuk memberi kesegaran di setiap hari pelanggan mereka.
                </p>
                <hr>
                
                <h4 class="fw-bold mb-3" style="color: #4b8b3b;">Informasi Usaha</h4>
                <p><strong>Nama Pemilik:</strong> Buk Tuty & Pak Irwan</p>
                <p><strong>Alamat:</strong> Jl.A.Yani, Depan Tugu Tanjak, Bengkalis, Riau, Indonesia</p>
                <p><strong>Jam Buka:</strong> 15:00 - 22:00 WIB (Setiap Hari)</p>

            </div>

            <div class="col-md-5 text-center">
                <h4 class="fw-bold mb-3" style="color: #38761d;">KEUNGGULAN PRODUK</h4>
                <ul class="keunggulan-list text-left mx-auto" style="max-width: 250px;">
                    <li>Bahan Segar Pilihan</li>
                    <li>Racikan Creamer Khas Buk Tuty</li>
                    <li>Porsi Melimpah</li>
                    <li>Harga Terjangkau (Mulai 10K)</li>
                    <li>Dibuat Langsung Oleh Pemilik</li>
                </ul>

                <hr>

                <img src="assets/Es teler1.png" alt="Es Teler Creamy Buk Tuty" 
                     class="img-fluid rounded shadow" 
                     style="width: 250px; margin-top: 20px;">
            </div>
        </div>
    </div>
</div>