<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function getData() {
    return [
        ["nama_kategori" => "Elektronik", "deskripsi" => "Perangkat elektronik"],
        ["nama_kategori" => "Pakaian", "deskripsi" => "Fashion pria dan wanita"],
        ["nama_kategori" => "Makanan", "deskripsi" => "Produk makanan dan minuman"]
    ];
}

public function tampilkan() {
    $data = $this->getData();
    return view('kategori', compact('data'));
}
}
