<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanan', function (Blueprint $table) {
            $table->increments("kode_pesanan");
            $table->string("kode_produk");
            $table->string("kode_costumer");
            $table->string("jumlah_pembelian");
            $table->string("harga");
            $table->string("tanggal_pesanan");
            $table->string("status_pesanan");
            $table->string("edited_by");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesanan');
    }
}
