<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class resellerController extends Controller
{
    public function viewReseller(){
        return view('pages.Reseller.reseller');
    }
}
