<?php
include(APPPATH . 'Views/templates/header.php');
?>
<div class="floating-whatsapp">
    <a href="#"><img src="<?= base_url('image/whatsapp.png'); ?>" alt=""></a>
</div>
<div class="banner">
    <div class="banner-content">
        <div class="banner-text-content">
            <h1>Kontrol penuh pesanan, hanya di tangan anda</h1>
                <p>Kelola sekaligus ratusan hingga ribuan pesanan dari berbagai channel jualanmu lewat satu dashboard.</p>
                <a href=""><button class="btn-black btn-black-normal">Uji Coba Gratis</button></a>
        </div>
        <div class="banner-image-content">
            <img src="<?= base_url('image/decoration-banner.png'); ?>" alt="">
        </div>
        <div class="border-overlay"></div>
    </div>
</div>
<div class="tab">
    <div class="tab-layout">
        <button class="tablinks"><a href="<?= base_url('produk/katalog'); ?>"><img src="<?= base_url('image/katalog.png'); ?>" alt=""> <span>Katalog</span></a></button>
        <button class="tablinks"><a href="<?= base_url('produk/pengelolaan-produk'); ?>"><img src="<?= base_url('image/pengelolaan-produk.png'); ?>" alt=""><span>Pengelolaan <br/>Produk</span></a></button>
        <button class="tablinks"><a href="<?= base_url('produk/inventory'); ?>"><img src="<?= base_url('image/inventory.png'); ?>" alt=""> <span>Inventory</span></a></button>
        <button class="tablinks tablinks-active"><a href="<?= base_url('produk/pengaturan-pesanan'); ?>"><img src="<?= base_url('image/pengaturan-pesanan.png'); ?>" alt=""> <span>Pengaturan <br/>pesanan</span></a></button>
        <button class="tablinks"><a href="<?= base_url('produk/pembukuan'); ?>"><img src="<?= base_url('image/pembukuan.png'); ?>" alt=""> <span>Pembukuan</span></a></button>
        <button class="tablinks"><a href="<?= base_url('produk/laporan-bisnis'); ?>"><img src="<?= base_url('image/laporan-bisnis.png'); ?>" alt=""> <span>Laporan Bisnis</span></a></button>
    </div>
</div>
<!-- <div id="katalog" class="tabcontent">
    <div class="section-1-tab section-1-tab-left">
        <div class="border-overlay border-overlay-left"></div>
        <div></div>
        <div class="tab-content-1 tab-content-left">
            <h2>Katalog</h2>
            <h4>Lihat bagaimana kami mudahkan pengelolaan katalog produk</h4>
            <ul>
                <li>Sekali upload produk buat banyak channel jualan sekaligus.</li>
                <li>Cukup satu karyawan untuk kelola seluruh katalog di satu dashboard.</li>
                <li>Cukup sekali masukkan informasi produk untuk semua channel penjualan.</li>
                <li>Atur stok bundling lebih gampang dan otomatis lewat sistem terpusat.</li>
            </ul>
        </div>
    </div>
    <div class="section-2-tab section-2-tab-second">
        <h1>Fitur Unggulan Katalog</h1>
        <p>Dengan integrasi lengkap, fitur-fitur canggih dan dukungan yang handal. Coevo memberikan atasan kuar untuk menjadi pilihan utama</p>
        <div class="section-2-tab-layout-katalog">
            <div class="section-2-tab-box-katalog">
                <div class="box-fitur-unggulan">
                    <div class="heading-fitur-unggulan">
                        <span>Daftar Produk</span>
                    </div>
                    <p>Sekali upload untuk semua channel penjualan.</p>
                </div>
                <div class="box-fitur-unggulan">
                    <div class="heading-fitur-unggulan green-young">
                        <span>Salin Produk</span>
                    </div>
                    <p>Masukan produk ke berbagai chanel penjualan sekaligus.</p>
                </div>
                <div class="box-fitur-unggulan">
                    <div class="heading-fitur-unggulan green-old">
                        <span>Import Produk Masal</span>
                    </div>
                    <p>Masukan produk sekaligus dari file excel</p>
                </div>
            </div>
            <div class="section-2-tab-box-katalog">
                <div class="icon-box-katalog">
                    <img src="image/catalog-icon-1.png" alt="" class="icon-katalog-1">
                    <img src="image/catalog-icon-2.png" alt="" class="icon-katalog-2">
                </div>
            </div>
            <div class="section-2-tab-box-katalog section-2-tab-box-katalog-right">
                <div class="box-fitur-unggulan">
                    <div class="heading-fitur-unggulan">
                        <span>Daftar Harga</span>
                    </div>
                    <p>Buat Chanel terpusat di semua chanel penjualan.</p>
                </div>
                <div class="box-fitur-unggulan">
                    <div class="heading-fitur-unggulan green-young">
                        <span>Daftar Produk</span>
                    </div>
                    <p>Sekali upload untuk semua channel penjualan.</p>
                </div>
                <div class="box-fitur-unggulan">
                    <div class="heading-fitur-unggulan green-old">
                        <span>Daftar Produk</span>
                    </div>
                    <p>Sekali upload untuk semua channel penjualan.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="pengelolaanProduk" class="tabcontent">
    <div class="section-1-tab section-1-tab-left">
        <div class="border-overlay border-overlay-left"></div>
        <div></div>
        <div class="tab-content-1 tab-content-left">
            <h2>Pengelolaan Produk</h2>
            <h4>Lihat bagaimana Coevo memudahkan pengelolaan gudangmu</h4>
            <ul>
                <li>Sekali upload produk buat banyak channel jualan sekaligus.</li>
                <li>Cukup satu karyawan untuk kelola seluruh katalog di satu dashboard.</li>
                <li>Cukup sekali masukkan informasi produk untuk semua channel penjualan.</li>
                <li>Atur stok bundling lebih gampang dan otomatis lewat sistem terpusat.</li>
            </ul>
        </div>
    </div>
    <div class="section-2-tab section-2-tab-second">
        <h1>Fitur Unggulan Katalog</h1>
        <p>Dengan integrasi lengkap, fitur-fitur canggih dan dukungan yang handal. Coevo memberikan atasan kuar untuk menjadi pilihan utama</p>
        <div class="section-2-tab-layout-katalog">
            <div class="section-2-tab-box-katalog">
                <div class="box-fitur-unggulan">
                    <div class="heading-fitur-unggulan">
                        <span>Daftar Produk</span>
                    </div>
                    <p>Sekali upload untuk semua channel penjualan.</p>
                </div>
                <div class="box-fitur-unggulan">
                    <div class="heading-fitur-unggulan green-young">
                        <span>Salin Produk</span>
                    </div>
                    <p>Masukan produk ke berbagai chanel penjualan sekaligus.</p>
                </div>
                <div class="box-fitur-unggulan">
                    <div class="heading-fitur-unggulan green-older">
                        <span>Import Produk Masal</span>
                    </div>
                    <p>Masukan produk sekaligus dari file excel</p>
                </div>
            </div>
            <div class="section-2-tab-box-katalog">
                <div class="icon-box-katalog">
                    <img src="image/catalog-icon-1.png" alt="" class="icon-katalog-1">
                    <img src="image/catalog-icon-2.png" alt="" class="icon-katalog-2">
                </div>
            </div>
            <div class="section-2-tab-box-katalog section-2-tab-box-katalog-right">
                <div class="box-fitur-unggulan">
                    <div class="heading-fitur-unggulan green-young">
                        <span>Daftar Harga</span>
                    </div>
                    <p>Buat Chanel terpusat di semua chanel penjualan.</p>
                </div>
                <div class="box-fitur-unggulan">
                    <div class="heading-fitur-unggulan green-old">
                        <span>Daftar Produk</span>
                    </div>
                    <p>Sekali upload untuk semua channel penjualan.</p>
                </div>
                <div class="box-fitur-unggulan">
                    <div class="heading-fitur-unggulan" style="background: #B6B6B6;">
                        <span>Daftar Produk</span>
                    </div>
                    <p>Sekali upload untuk semua channel penjualan.</p>
                </div>
            </div>
        </div>
    </div>
</div> -->

<div id="inventory" class="tabcontent">
    <div class="section-1-tab section-1-tab-left">
        <div class="border-overlay border-overlay-left"></div>
        <div></div>
        <div class="tab-content-1 tab-content-left">
            <h2>Pengelolaan Pesanan</h2>
            <h4>Temukan Kemudahan Pemenuhan Pesanan untuk Bisnis Anda.</h4>
            <ul>
                <li>Pengelolaan pemenuhan pesanan dari berbagai saluran penjualan terintegrasi secara terpusat.</li>
                <li>Proses pemenuhan pesanan dipercepat dengan sistem pengurutan otomatis berdasarkan waktu pemesanan.</li>
                <li>Akurasi pemenuhan pesanan meningkat melalui sistem kategorisasi kurir dan pilihan jenis pengiriman.</li>
                <li>Manajemen retur dan klaim untuk barang yang tidak terkirim dipermudah dengan proses yang efisien.</li>
            </ul>
        </div>
    </div>
    <div class="section-2-tab section-2-tab-second">
        <h1>Fitur Pengaturan Pesanan</h1>
        <p>Menjadi solusi unggulan untuk meningkatkan keberhasilan bisnis Anda dengan fitur pengaturan pesanan yang efisien dan pemantauan stok produk yang teroptimalkan.</p>
        <div class="section-2-tab-layout-katalog">
            <div class="section-2-tab-box-katalog">
                <div class="box-fitur-unggulan">
                    <div class="heading-fitur-unggulan">
                        <span>Pengelolaan Terpusat</span>
                    </div>
                    <p>Kelola dari berbagai saluran penjualan,<br/> memudahkan navigasi dan analisis.</p>
                </div>
                <div class="box-fitur-unggulan">
                    <div class="heading-fitur-unggulan green-young">
                        <span>Resi Secara Otomatis</span>
                    </div>
                    <p>Sistem secara otomatis menghasilkan nomor resi setelah pesanan diproses dan siap dikirim.</p>
                </div>
                <div class="box-fitur-unggulan">
                    <div class="heading-fitur-unggulan green-old">
                        <span>Integrasi Metode Pengiriman</span>
                    </div>
                    <p>Menyediakan pilihan integrasi dengan berbagai metode pengiriman dan kurir.</p>
                </div>
            </div>
            <div class="section-2-tab-box-katalog">
                <div class="icon-box-katalog">
                    <img src="<?= base_url('image/pengelolaan-produk-1.png'); ?>" alt="" class="icon-katalog-1">
                    <img src="<?= base_url('image/pengelolaan-produk-2.png');?>" alt="" class="icon-katalog-2 icon-katalog-3">
                </div>
            </div>
            <div class="section-2-tab-box-katalog section-2-tab-box-katalog-right">
                <div class="box-fitur-unggulan">
                    <div class="heading-fitur-unggulan">
                        <span>Pelacakan Status Pesanan</span>
                    </div>
                    <p>Lacak status pesanan secara real-time, memberikan informasi yang akurat.</p>
                </div>
                <div class="box-fitur-unggulan">
                    <div class="heading-fitur-unggulan green-young">
                        <span>Riwayat Pemesanan</span>
                    </div>
                    <p>Menyimpan riwayat setiap pesanan, mempermudah pelacakan dan analisis.</p>
                </div>
                <div class="box-fitur-unggulan">
                    <div class="heading-fitur-unggulan green-old">
                        <span>Fasilitas Cetak Massal</span>
                    </div>
                    <p>Memungkinkan pengguna untuk mencetak label pengiriman secara massal.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="section-3-tab">
        <div class="section-3-tab-box">
            <h3>Solusi Mudah Dalam Penjualan</h3>
            <p>Dengan Coevo, jualan anda dapat dilakukan dengan baik secara online maupun offline, sambil mengelola gudang dan pengiriman, semua dalam satu sistem yang terintegrasi</p>
            <a href=""><button class="btn-black btn-green btn-green-left">COBA SEKARANG</button></a>
        </div>
        <div class="section-3-tab-box section-3-tab-box-right">
            <h3>Mitra Integrasi <br/>Coevo</h3>
            <p>Kami membangun kemitraan yang kuat dengan bisnis-bisnis hebat untuk mencapai tujuan bersama</p>
            <div class="integrasi-layout">
                <img src="<?= base_url('image/integrasi-image.png'); ?>" alt="">
            </div>
        </div>
    </div>
</div>

<!-- <div id="pengaturanPesanan" class="tabcontent">
    <div class="section-1-tab section-1-tab-left">
        <div class="border-overlay border-overlay-left"></div>
        <div></div>
        <div class="tab-content-1 tab-content-left">
            <h2>Pengelolaan Pesanan</h2>
            <h4>Lihat bagaimana Jubelio memudahkan pemenuhan pesanan dalam bisnismu</h4>
            <ul>
                <li>Pemenuhan pesanan dari setiap saluran penjualan secara terpusat di Jubelio.</li>
                <li>Pemenuhan pesanan lebih cepat, dengan urutan pesanan otomatis berdasarkan tanggal masuknya.</li>
                <li>Pemenuhan pesanan lebih akurat dengan kategorisasi kurir dan jenis pengirimannya.</li>
                <li>Rekonsiliasi barang retur dan proses klaim barang tidak sampai lebih mudah di Jubelio.</li>
            </ul>
        </div>
    </div>
    
</div>

<div id="pembukuan" class="tabcontent">
    <div class="section-1-tab section-1-tab-left">
        <div class="border-overlay border-overlay-left"></div>
        <div></div>
        <div class="tab-content-1 tab-content-left">
            <h2>Katalog</h2>
            <h4>Lihat bagaimana kami mudahkan pengelolaan katalog produk</h4>
            <ul>
                <li>Sekali upload produk buat banyak channel jualan sekaligus.</li>
                <li>Cukup satu karyawan untuk kelola seluruh katalog di satu dashboard.</li>
                <li>Cukup sekali masukkan informasi produk untuk semua channel penjualan.</li>
                <li>Atur stok bundling lebih gampang dan otomatis lewat sistem terpusat.</li>
            </ul>
        </div>
    </div>
    <div class="section-2-tab section-2-tab-second">
        <h1>Fitur Unggulan Katalog</h1>
        <p>Dengan integrasi lengkap, fitur-fitur canggih dan dukungan yang handal. Coevo memberikan atasan kuar untuk menjadi pilihan utama</p>
        <div class="section-2-tab-layout-katalog">
            <div class="section-2-tab-box-katalog">
                <div class="box-fitur-unggulan">
                    <div class="heading-fitur-unggulan">
                        <span>Pengelolaan Stok</span>
                    </div>
                    <p>Kelola Stok lebih mudah untuk berbagai chanel penjualan.</p>
                </div>
                <div class="box-fitur-unggulan">
                    <div class="heading-fitur-unggulan green-young">
                        <span>Stock Opname</span>
                    </div>
                    <p>Validasi Stok Fisik dan Stok di dalam sistem jauh lebih mudah.</p>
                </div>
                <div class="box-fitur-unggulan">
                    <div class="heading-fitur-unggulan green-older">
                        <span>Revaluasi Stok</span>
                    </div>
                    <p>Hitung ulang dan sesuaikan nilai stok dengan mudah.</p>
                </div>
            </div>
            <div class="section-2-tab-box-katalog">
                <div class="icon-box-katalog">
                    <img src="image/catalog-icon-1.png" alt="" class="icon-katalog-1">
                    <img src="image/catalog-icon-2.png" alt="" class="icon-katalog-2">
                </div>
            </div>
            <div class="section-2-tab-box-katalog section-2-tab-box-katalog-right">
                <div class="box-fitur-unggulan">
                    <div class="heading-fitur-unggulan green-young">
                        <span>Persentasi Stok</span>
                    </div>
                    <p>Tampilkan jumlah stok berdasarkan persentase kesediaan barang.</p>
                </div>
                <div class="box-fitur-unggulan">
                    <div class="heading-fitur-unggulan green-old">
                        <span>Stok Cadangan</span>
                    </div>
                    <p>Amankan stok saat langka atau saat ada event promosi.</p>
                </div>
                <div class="box-fitur-unggulan">
                    <div class="heading-fitur-unggulan" style="background: #B6B6B6;">
                        <span>Proyeksi Barang Habis </span>
                    </div>
                    <p>Persiapkan stok ketersediaan barang sebelum habis di gudang.</p>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- <div id="laporanBisnis" class="tabcontent">
    <div class="section-1-tab section-1-tab-left">
        <div class="border-overlay border-overlay-left"></div>
        <div></div>
        <div class="tab-content-1 tab-content-left">
            <h2>Katalog</h2>
            <h4>Lihat bagaimana kami mudahkan pengelolaan katalog produk</h4>
            <ul>
                <li>Sekali upload produk buat banyak channel jualan sekaligus.</li>
                <li>Cukup satu karyawan untuk kelola seluruh katalog di satu dashboard.</li>
                <li>Cukup sekali masukkan informasi produk untuk semua channel penjualan.</li>
                <li>Atur stok bundling lebih gampang dan otomatis lewat sistem terpusat.</li>
            </ul>
        </div>
    </div>
    <div class="section-2-tab section-2-tab-second">
        <h1>Fitur Unggulan Katalog</h1>
        <p>Dengan integrasi lengkap, fitur-fitur canggih dan dukungan yang handal. Coevo memberikan atasan kuar untuk menjadi pilihan utama</p>
        <div class="section-2-tab-layout-katalog">
            <div class="section-2-tab-box-katalog">
                <div class="box-fitur-unggulan">
                    <div class="heading-fitur-unggulan">
                        <span>Pengelolaan Stok</span>
                    </div>
                    <p>Kelola Stok lebih mudah untuk berbagai chanel penjualan.</p>
                </div>
                <div class="box-fitur-unggulan">
                    <div class="heading-fitur-unggulan green-young">
                        <span>Stock Opname</span>
                    </div>
                    <p>Validasi Stok Fisik dan Stok di dalam sistem jauh lebih mudah.</p>
                </div>
                <div class="box-fitur-unggulan">
                    <div class="heading-fitur-unggulan green-older">
                        <span>Revaluasi Stok</span>
                    </div>
                    <p>Hitung ulang dan sesuaikan nilai stok dengan mudah.</p>
                </div>
            </div>
            <div class="section-2-tab-box-katalog">
                <div class="icon-box-katalog">
                    <img src="image/catalog-icon-1.png" alt="" class="icon-katalog-1">
                    <img src="image/catalog-icon-2.png" alt="" class="icon-katalog-2">
                </div>
            </div>
            <div class="section-2-tab-box-katalog section-2-tab-box-katalog-right">
                <div class="box-fitur-unggulan">
                    <div class="heading-fitur-unggulan green-young">
                        <span>Persentasi Stok</span>
                    </div>
                    <p>Tampilkan jumlah stok berdasarkan persentase kesediaan barang.</p>
                </div>
                <div class="box-fitur-unggulan">
                    <div class="heading-fitur-unggulan green-old">
                        <span>Stok Cadangan</span>
                    </div>
                    <p>Amankan stok saat langka atau saat ada event promosi.</p>
                </div>
                <div class="box-fitur-unggulan">
                    <div class="heading-fitur-unggulan" style="background: #B6B6B6;">
                        <span>Proyeksi Barang Habis </span>
                    </div>
                    <p>Persiapkan stok ketersediaan barang sebelum habis di gudang.</p>
                </div>
            </div>
        </div>
    </div>
</div> -->

<?php
include(APPPATH . 'Views/templates/footer.php');
?>

