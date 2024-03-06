<?php
include(APPPATH . 'Views/templates/header.php');
?>

<div class="login-layout">
    <div class="login-box-layout">
        <div class="header-login-text">
            <h1>Masuk</h1>
        </div>
        <div class="form-login">
            <form action="">
                <div class="input-form">
                    <input type="text" placeholder="Username">
                    <iconify-icon icon="mingcute:user-2-fill"></iconify-icon>
                </div>
                <div class="input-form">
                    <input type="password" placeholder="Kata Sandi">
                    <iconify-icon icon="icon-park-solid:lock"></iconify-icon>
                </div>
                <div class="menu-footer-login">
                <label class="checked-login">Ingatkan Saya
                <input type="checkbox">
                <span class="checkmark"></span>
                </label>
                    <a href="#">Lupa Kata Sandi?</a>
                </div>
                <button>Masuk</button>
            </form>
            <div class="link-footer-login">
                <p>Tidak punya akun? <a href="">Registrasi</a></p>
            </div>
        </div>
    </div>
</div>

<?php
include(APPPATH . 'Views/templates/footer.php');
?>