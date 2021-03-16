<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dataProdukController extends Controller
{
    public function dataProdukView(){
        return view("pages.dataProduk.dataProduk");
    }

    public function tambahDataProdukView(){
        return view("pages.dataProduk.tambahDataProduk");
    }
}
