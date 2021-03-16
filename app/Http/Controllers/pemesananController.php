<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pemesananController extends Controller
{
    public function viewPemesanan(){
        return view("pages.pemesanan.pemesanan");
    }
}
