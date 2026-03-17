<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListBarangController extends Controller
{
    function index($id, $nama){
        return view('list_barang', ['id' => $id, 'nama' => $nama]);
    }
}
