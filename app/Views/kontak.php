<?php
include(APPPATH . 'Views/templates/header.php');
?>

<div class="kontak-layout">
    <div class="heading-kontak">
        <h1>Butuh Bantuan? Hubungi Kami Sekarang</h1>
    </div>
    <div class="kontak-layout-box">
        <div class="content-kontak-layout">
            <p>Siap berkolaborasi? Kita mulai dari sapaan dan lanjutkan dengan kerjasama yang menguntungkan.</p>
            <ul>
                <li>HUBUNGI KAMI : +6287 866 291 056</li>
                <li>EMAIL : support@coevo.id</li>
            </ul>
            <div class="social-media-contanct">
                <a href="">
                <div class="social-media-contact-box">
                    <iconify-icon icon="uil:facebook-f"></iconify-icon>
                </div>
                </a>
                <a href="">
                <div class="social-media-contact-box">
                    <iconify-icon icon="pajamas:twitter"></iconify-icon>
                </div>
                </a>
                <a href="">
                <div class="social-media-contact-box">
                    <iconify-icon icon="basil:instagram-outline"></iconify-icon>
                </div>
                </a>
            </div>
        </div>
        <div class="form-kontak-layout">
            <form action="">
                <div class="input-box">
                    <input type="text" placeholder="Nama">
                    <input type="email" placeholder="Email">
                </div>
                <textarea name="" id=""rows="4" placeholder="Pesan"></textarea>
                <button>Kirim Pesan</button>
            </form>
        </div>
    </div>
</div>

<?php
include(APPPATH . 'Views/templates/footer.php');
?>