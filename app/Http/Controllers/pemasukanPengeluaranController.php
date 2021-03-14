<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class pemasukanPengeluaranController extends Controller
{
    public function pemasukanPengeluaran(){
        $tabelTransaksi = DB::table('keuangan')
        ->join('informasi_transaksi', 'keuangan.id_transaksi', '=', 'informasi_transaksi.id_transaksi')
        ->get(array(
            'keuangan.id_transaksi',
            'tipe',
            'nominal',
            'catatan',
            'tanggal_transaksi',
            'channel_transaksi',
            'edited_by',
            'nama_barang',
            'qty'
        ));
        return view ("pages.pemasukanPengeluaran.pemasukanPengeluaran",['tabelTransaksi' => $tabelTransaksi]);
    }
    public function viewPemasukanPengeluaran(){
        $barangTransaksi =  DB::table("barang_transaksi")->get();
        $channelTransaksi =  DB::table("channel_transaksi")->get();
        return view ("pages.pemasukanPengeluaran.tambahPemasukanPengeluaran",['barangTransaksi' => $barangTransaksi, 'channelTransaksi' => $channelTransaksi]);
    }
    public function store(Request $request)
    {
        $uniqid = Str::random(10);
        $rules = [
            'tipe' => 'required',
            'nominal' => 'required',
            'catatan' => 'required|min:3',
            'tanggal'=> 'required',
            'nama_barang' => 'required',
            'nama_channel_transaksi' => 'required',
        ];
        $messages = [
            'tipe.required' => 'Tipe harus diisi',
            'nominal.required' => 'Nominal harus diisi',
            'catatan.required' => 'Catatan harus diisi',
            'catatan.min' => 'Catatan Minimal 3 karakter',
            'tanggal.required' => 'Tanggal harus diisi',
            'nama_barang.required' => 'barang harus diisi',
            'nama_channel_transaksi.required' => 'channel harus diisi',
        ];

        $this->validate($request,$rules,$messages);

        DB::table("keuangan")->insert([
            "id_transaksi" => $uniqid,
            "tipe" => $request->tipe,
            "nominal" => $request->nominal,
            "catatan" => $request->catatan,
            "tanggal_transaksi" => $request->tanggal,
            "channel_transaksi" => $request->nama_channel_transaksi,
            "edited_by" => $request->edited_by,
            "created_at" =>  \Carbon\Carbon::now(), # new \Datetime()
            "updated_at" => \Carbon\Carbon::now(),
        ]);

        DB::table("informasi_transaksi")->insert([
            "id_transaksi" => $uniqid,
            "nama_barang" => $request->nama_barang,
            "qty" => rand(10,20),
            "created_at" =>  \Carbon\Carbon::now(), # new \Datetime()
            "updated_at" => \Carbon\Carbon::now(),
        ]);

        return redirect()->route('pemasukanPengeluaran');
    }
}
