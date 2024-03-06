<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home');
    }
    public function harga()
    {
        return view('harga');
    }
    public function partner()
    {
        return view('partner');
    }
    public function affiliasi()
    {
        return view('affiliasi');
    }
    public function kontak()
    {
        return view('kontak');
    }
    public function term_condition()
    {
        return view('term-condition');
    }
    public function login()
    {
        return view('login');
    }
    public function katalog()
    {
        return view('produk/katalog');
    }
}
