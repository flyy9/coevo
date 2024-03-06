<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coevo</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css'); ?>">
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</head>
<body>
<div class="navbar">
    <div class="logo">
        <a href="<?= base_url('/'); ?>"><img src="<?= base_url('image/logo.png'); ?>" alt=""></a>
    </div>
    <button class="hamburger-menu" onClick="popupMenu();">
        <iconify-icon icon="radix-icons:hamburger-menu"></iconify-icon>
    </button>
    <div class="wrapper-nav-menu" id="menuWrapper">
        <div class="heading-menu-mobile">
            <div class="logo">
                <a href="<?= base_url('/'); ?>"><img src="<?= base_url('image/logo.png'); ?>" alt=""></a>
            </div>
            <button class="hamburger-menu" onClick="popupMenu();">
                <iconify-icon icon="ic:round-close"></iconify-icon>
            </button>
        </div>
        <div class="nav-menu">
            <ul class="menu">
                <li class="has-submenu">
                    <a href="#"  onClick="subMenu();">Produk <iconify-icon icon="mi:chevron-down"></iconify-icon></a>
                    <div class="submenu" id="subMenu">
                        <ul class="submenu-layout">
                            <li><a href="<?= base_url('produk/katalog'); ?>"><img src="<?= base_url('image/katalog-produk.svg'); ?>" alt="">Katalog</a></li>
                            <li><a href="<?= base_url('produk/pengelolaan-produk'); ?>"><img src="<?= base_url('image/pengelolaan-produk.svg'); ?>" alt="">Pengelolaan Produk</a></li>
                            <li><a href="<?= base_url('produk/inventory'); ?>"><img src="<?= base_url('image/inventory-produk.svg'); ?>" alt="">Inventory</a></li>
                            <li><a href="<?= base_url('produk/pengaturan-pesanan'); ?>"><img src="<?= base_url('image/pengaturan-pesanan.svg'); ?>" alt="">Pengaturan Pesanan</a></li>
                            <li><a href="<?= base_url('produk/pembukuan'); ?>"><img src="<?= base_url('image/pembukuan.svg'); ?>" alt="">Pembukuan</a></li>
                            <li><a href="<?= base_url('produk/laporan-bisnis'); ?>"><img src="<?= base_url('image/laporan-bisnis.svg'); ?>" alt="">Laporan Bisnis</a></li>
                            <!-- Tambahkan submenu sesuai kebutuhan -->
                        </ul>
                    </div>
                </li>
                <li><a href="<?= base_url ('/harga'); ?>">Harga</a></li>
                <li><a href="<?= base_url('/partner'); ?>">Partner</a></li>
                <li><a href="<?= base_url('/affiliasi'); ?>">Afiliasi</a></li>
                <li><a href="<?= base_url('/kontak'); ?>">Kontak</a></li>
            </ul>
            <div class="language-logo">
                <img src="<?= base_url('image/indonesia.webp'); ?>" alt="">
            </div>
        </div>
        <a href="<?= base_url('/login'); ?>"><button class="btn-login btn-black">Masuk</button></a>
    </div>
</div>