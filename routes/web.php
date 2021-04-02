<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'guest'], function () {
    Route::view('/register', 'auth.register')->name('register');
    Route::view('/login', 'auth.login')->name('login');
    Route::post('/login', 'authController@login');
    Route::view('/register','auth.register')->name('register');
    Route::post('/register','authController@register');
});

Route::group(['middleware' => 'auth'], function () {
    Route::view('/index', 'pages.dashboard')->name('index');

    Route::get('/pemasukanPengeluaran','pemasukanPengeluaranController@pemasukanPengeluaran')->name('pemasukanPengeluaran');
    Route::get('/tambahPemasukanPengeluaran','pemasukanPengeluaranController@viewPemasukanPengeluaran')->name("tambahPemasukanPengeluaran");
    Route::get('/editPemasukanPengeluaran/{id_transaksi}','pemasukanPengeluaranController@viewEditPemasukanPengeluaran')->name("viewReseller");

    Route::get('/dataProduk','dataProdukController@dataProdukView')->name("dataProdukView");
    Route::get('/tambahDataProduk','dataProdukController@tambahDataProdukView')->name("tambahDataProduk");
    Route::get('/pemesanan','pemesananController@viewPemesanan')->name("viewPemesanan");
    Route::get('/dataCostumer','costumerController@viewCostumer')->name("viewCostumer");
    Route::get('/dataReseller','resellerController@viewReseller')->name("viewReseller");

    Route::get('/logout', 'authController@logout');

    Route::post('/tambahPemasukanPengeluaran','pemasukanPengeluaranController@store');
    Route::post('/editPemasukanPengeluaran','pemasukanPengeluaranController@edit');
    Route::get('/hapusPemasukanPengeluaran/{id_transaksi}','pemasukanPengeluaranController@delete');
});
