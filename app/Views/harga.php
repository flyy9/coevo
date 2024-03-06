<?php
include(APPPATH . 'Views/templates/header.php');
?>

<div class="banner">
    <div class="banner-content">
        <div class="banner-text-content">
            <h1>Daftar Harga Paket Layanan Coevo</h1>
                <p>Temukan paket yang paling sesuai untuk kebutuhan bisnis Anda dengan berbagai pilihan harga yang kompetitif dan fitur lengkap yang mendukung pertumbuhan usaha Anda secara efisien.</p>
                <a href=""><button class="btn-black btn-black-normal">Uji Coba Gratis</button></a>
        </div>
        <div class="banner-image-content">
            <img src="<?= base_url('image/decoration-banner.png'); ?>" alt="">
        </div>
    </div>
</div>

<div class="price-layout">
    <div class="price-layout-container">
        <div class="price-layout-heading">
            <p>Pilih Paket yang sesuai Bisnis Anda</p>
        </div>
        <div class="toggle-price">
            <p id="monthlyLabel">Harga Perbulan</p>
            <label class="switch">
                <input type="checkbox" id="toggleSwitch">
                <span class="slider"></span>
            </label>
            <p id="yearlyLabel">Harga Pertahun</p>
        </div>
    </div>
    <div class="price-layout-box-layout">
        <div class="price-layout-box">
            <div class="price-layout-box-heading">
                <h3 class="bronze">Bronze</h3>
                <p>Cocok untuk usaha kecil dengan kebutuhan penting.</p>
            </div>
            <div class="price-layout-main">
                <p id="status1">Rp. 50.000 /Bulan</p>
            </div>
            <a href="#"><button>Hubungi Sekarang</button></a>
            <ul>
                <li><img src="<?= base_url('image/check.svg'); ?>" alt=""/> 1 Toko / Marketplace</li>
                <li><img src="<?= base_url('image/not.svg'); ?>" alt=""/> Tidak dapat kelola pesanan</li>
                <li><img src="<?= base_url('image/check.svg'); ?>" alt=""/> 100 Master SKU</li>
                <li><img src="<?= base_url('image/not.svg'); ?>" alt=""/> Tidak Dapat Kelola Admin</li>
                <li><img src="<?= base_url('image/not.svg'); ?>" alt=""/> Tidak Ada Integrasi Chat</li>
                <li><img src="<?= base_url('image/check.svg'); ?>" alt=""/> Publish Masal 10 Produk / Marketplace</li>
            </ul>
        </div>
        <div class="price-layout-box">
            <div class="price-layout-box-heading">
                <h3 class="silver">Silver</h3>
                <p>Ideal untuk bisnis berkembang yang mencari fitur tambahan.</p>
            </div>
            <div class="price-layout-main">
                <p id="status2">Rp. 150.000 /Bulan</p>
            </div>
            <a href="#"><button>Hubungi Sekarang</button></a>
            <ul>
                <li><img src="<?= base_url('image/check.svg'); ?>" alt=""/> 10 Toko / Marketplace</li>
                <li><img src="<?= base_url('image/check.svg'); ?>" alt=""/> Kelola hingga 1.000 pesanan</li>
                <li><img src="<?= base_url('image/check.svg'); ?>" alt=""/> 500 Master SKU</li>
                <li><img src="<?= base_url('image/not.svg'); ?>" alt=""/> Tidak Dapat Kelola Admin</li>
                <li><img src="<?= base_url('image/check.svg'); ?>" alt=""/> Integrasi Chat 3 Toko</li>
                <li><img src="<?= base_url('image/check.svg'); ?>" alt=""/> Publish Masal 50 Produk / Marketplace</li>
            </ul>
        </div>
        <div class="price-layout-box">
            <div class="price-layout-box-heading">
                <h3 class="gold">Gold</h3>
                <p>Sempurna untuk bisnis mapan dengan persyaratan tingkat lanjut.</p>
            </div>
            <div class="price-layout-main">
                <p id="status3">Rp. 250.000 /Bulan</p>
            </div>
            <a href="#"><button>Hubungi Sekarang</button></a>
            <ul>
                <li><img src="<?= base_url('image/check.svg'); ?>" alt=""/> 50 Toko / Marketplace</li>
                <li><img src="<?= base_url('image/check.svg'); ?>" alt=""/> Kelola hingga 3.000 pesanan</li>
                <li><img src="<?= base_url('image/check.svg'); ?>" alt=""/> 400 Master SKU</li>
                <li><img src="<?= base_url('image/check.svg'); ?>" alt=""/> 5 Akun Kelola Admin</li>
                <li><img src="<?= base_url('image/check.svg'); ?>" alt=""/> Integrasi Chat 15 Toko</li>
                <li><img src="<?= base_url('image/check.svg'); ?>" alt=""/> Publish Masal 80 Produk / Marketplace</li>
            </ul>
        </div>
        <div class="price-layout-box">
            <div class="price-layout-box-heading">
                <h3 class="platinum">Platinum</h3>
                <p>Dirancang untuk perusahaan yang menuntut fungsionalitas tingkat atas.</p>
            </div>
            <div class="price-layout-main">
                <p id="status4">Rp. 450.000 /Bulan</p>
            </div>
            <a href="#"><button>Hubungi Sekarang</button></a>
            <ul>
                <li><img src="<?= base_url('image/check.svg'); ?>" alt=""/> 100 Toko / Marketplace</li>
                <li><img src="<?= base_url('image/check.svg'); ?>" alt=""/> Kelola hingga 7.000 pesanan</li>
                <li><img src="<?= base_url('image/check.svg'); ?>" alt=""/> 1000 Master SKU</li>
                <li><img src="<?= base_url('image/check.svg'); ?>" alt=""/> 15 Akun Kelola Admin</li>
                <li><img src="<?= base_url('image/check.svg'); ?>" alt=""/> Integrasi Chat 100 Toko</li>
                <li><img src="<?= base_url('image/check.svg'); ?>" alt=""/> Publish Masal 100 Produk / Marketplace</li>
            </ul>
        </div>
    </div>
</div>

<div class="keunggulan-coevo">
    <div class="heading-keunggulan-coevo">
        <h3>Keunggulan Fitur Coevo</h3>
        <p>Maksimalkan Potensi Bisnismu</p>
    </div>
    <div class="layout-keunggulan-coevo">
        <div class="box-keunggulan-coevo">
            <div class="box-icon-keunggulan-coevo">
                <img src="<?= base_url('image/katalog.png'); ?>" alt=""> 
                <span>Katalog</span>
            </div>
            <ul class="content-keunggulan-coevo">
                <li>Upload Cepat: Unggah produk Anda sekali saja untuk muncul di berbagai channel penjualan.</li>
                <li>Manajemen Mudah: Kelola seluruh katalog produk dari satu dashboard yang intuitif.</li>
                <li>Informasi Produk Terpadu: Masukkan informasi produk sekali untuk digunakan di semua saluran penjualan.</li>
            </ul>
        </div>
        <div class="box-keunggulan-coevo">
            <div class="box-icon-keunggulan-coevo">
                <img src="<?= base_url('image/pengelolaan-produk.png'); ?>" alt="">
                <span>Pengelolaan Produk</span>
            </div>
            <ul class="content-keunggulan-coevo">
                <li>Pembaruan Produk Otomatis: Perubahan produk (harga, stok, deskripsi) diperbarui secara real-time di semua channel.</li>
                <li>Analisis Performa Produk: Dapatkan insight mendalam tentang kinerja produk di berbagai platform.</li>
                <li>Optimasi Listing: Alat untuk meningkatkan visibilitas dan penjualan produk di semua marketplace.</li>
            </ul>
        </div>
        <div class="box-keunggulan-coevo">
            <div class="box-icon-keunggulan-coevo">
                <img src="<?= base_url('image/inventory.png'); ?>" alt="">
                <span>Inventory</span>
            </div>
            <ul class="content-keunggulan-coevo">
                <li>Pemantauan Stok Real-Time: Pantau ketersediaan stok produk secara akurat dan real-time.</li>
                <li>Prediksi Kebutuhan Stok: Sistem prediksi untuk mengoptimalkan jumlah stok berdasarkan tren penjualan.</li>
                <li>Manajemen Gudang Terintegrasi: Kelola beberapa gudang dan lokasi stok dalam satu sistem.</li>
            </ul>
        </div>
        <div class="box-keunggulan-coevo">
            <div class="box-icon-keunggulan-coevo">
                <img src="<?= base_url('image/pengaturan-pesanan.png'); ?>" alt="">
                <span>Pengaturan pesanan</span>
            </div>
            <ul class="content-keunggulan-coevo">
                <li>Otomatisasi Proses Pesanan: Otomatisasi alur kerja pengaturan pesanan untuk efisiensi waktu.</li>
                <li>Pengelolaan Retur dan Pengembalian Dana: Proses pengembalian barang dan dana yang mudah dan terpusat.</li>
                <li>Pelacakan Pesanan Terintegrasi: Tawarkan pelacakan pesanan real-time kepada pelanggan Anda.</li>
            </ul>
        </div>
        <div class="box-keunggulan-coevo">
            <div class="box-icon-keunggulan-coevo">
                <img src="<?= base_url('image/pembukuan.png'); ?>" alt="">
                <span>Pembukuan</span>
            </div>
            <ul class="content-keunggulan-coevo">
                <li>Integrasi Keuangan: Sinkronisasi transaksi penjualan dengan perangkat lunak akuntansi.</li>
                <li>Pemantauan Arus Kas: Lihat arus kas bisnis Anda secara real-time untuk pengambilan keputusan yang lebih baik.</li>
                <li>Laporan Keuangan Otomatis: Buat laporan keuangan secara otomatis, termasuk laba rugi dan neraca.</li>
            </ul>
        </div>
        <div class="box-keunggulan-coevo">
            <div class="box-icon-keunggulan-coevo">
                <img src="<?= base_url('image/laporan-bisnis.png'); ?>" alt="">
                <span>Laporan Bisnis</span>
            </div>
            <ul class="content-keunggulan-coevo">
                <li>Analisis Penjualan Mendalam: Dapatkan insight lengkap tentang penjualan, tren pasar, dan performa produk.</li>
                <li>Laporan Kinerja Omnichannel: Lihat bagaimana setiap saluran penjualan berkontribusi terhadap pendapatan Anda.</li>
                <li>Customisasi Laporan: Sesuaikan laporan untuk fokus pada metrik yang paling penting bagi bisnis Anda.</li>
            </ul>
        </div>
    </div>
</div>

<div class="section-4-tab">
    <div class="testimonial">
        <h1>Ulasan Pengguna Coevo</h1>
        <p>Ulasan dari para pengguna adalah sumber inspirasi bagi kami untuk terus berinovasi dan memberikan layanan yang lebih baik.</p>
        <div class="testimonial-layout">
            <div class="testimonial-box">
                <div class="testimonial-content">
                    <p>"Dengan tambahan dukungan pelanggan yang ramah, saya merasa sangat percaya diri dalam menjalankan bisnis saya"</p>
                </div>
                <div class="testimonial-content-footer">
                    <div class="testimonial-author">
                        <h5>Olih Solihudin</h5>
                        <span>Client</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-box">
                <div class="testimonial-content">
                    <p>"Coevo benar-benar membantu bisnis saya tumbuh dan berkembang. Saya sangat merekomendasikan Coevo kepada pemilik bisnis lain yang mencari solusi untuk bisnisnya "</p>
                </div>
                <div class="testimonial-content-footer">
                    <div class="testimonial-author">
                        <h5>Tedy Syach</h5>
                        <span>Client</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-box">
                <div class="testimonial-content">
                    <p>"Saya telah menggunakan Coevo selama beberapa tahun dan saya sangat terkesan. Kemampuan untuk mengelola stok produk dengan mudah dan cepat adalah fitur yang saya sukai"</p>
                </div>
                <div class="testimonial-content-footer">
                    <div class="testimonial-author">
                        <h5>Siti Aisyah</h5>
                        <span>Client</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include(APPPATH . 'Views/templates/footer.php');
?>