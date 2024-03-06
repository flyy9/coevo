<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/harga', 'Home::harga');
$routes->get('/partner', 'Home::partner');
$routes->get('/affiliasi', 'Home::affiliasi');
$routes->get('/kontak', 'Home::kontak');
$routes->get('/term-condition', 'Home::term_condition');
$routes->get('/login', 'Home::login');
$routes->get('/produk/katalog', 'Produk::katalog');
$routes->get('/produk/pengelolaan-produk', 'Produk::pengelolaan_produk');
$routes->get('/produk/inventory', 'Produk::inventory');
$routes->get('/produk/pengaturan-pesanan', 'Produk::pengaturan_pesanan');
$routes->get('/produk/pembukuan', 'Produk::pembukuan');
$routes->get('/produk/laporan-bisnis', 'Produk::laporan_bisnis');
$routes->get('/affiliasi', 'Home::affiliasi');