<?php

namespace App\Controllers;

class Produk extends BaseController
{
    public function katalog()
    {
        return view('produk/katalog');
    }
    public function pengelolaan_produk()
    {
        return view('produk/pengelolaan-produk');
    }
    public function inventory()
    {
        return view('produk/inventory');
    }
    public function pengaturan_pesanan()
    {
        return view('produk/pengaturan-pesanan');
    }
    public function pembukuan()
    {
        return view('produk/pembukuan');
    }
    public function laporan_bisnis()
    {
        return view('produk/laporan-bisnis');
    }
}
