<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class costumerController extends Controller
{
    public function viewCostumer(){
        return view("pages.Costumer.dataCostumer");
    }
}
