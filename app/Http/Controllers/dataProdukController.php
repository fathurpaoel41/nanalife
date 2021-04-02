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

    public function storeProduk(Request $request){
        $rules= [
            "namaProduk" => "required|min:4",
            "beratProduk" => "required",
            "catatan" => "required",
            "size" => "required",
            "stokBarang" => "required",
            "harga" => "required",
            "gambar" => "required"
        ];

        $message = [
            "namaProduk.required" => "Nama Produk Harus Diisi",
            "namaProduk.min" => "Nama Produk Minimal 4 Karakter",
            "catatan.required" => "catatan Harus diisi",
            "size.required" => "size Harus diisi",
            "stokBarang.required" => "stokBarang Harus diisi",
            "harga.required" => "harga harus diisi",
            "gambar.required" => "gambar harus diisi",
        ];

        $request->validate($request,$rules,$message);


    }
}
