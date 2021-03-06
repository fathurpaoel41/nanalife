<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->string("sku")->primary();
            $table->string("nama_produk");
            $table->string("slug");
            $table->integer("berat");
            $table->string("size");
            $table->string("gambar_produk");
            $table->integer("harga");
            $table->string("deskripsi");
            $table->string("status");
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
        Schema::dropIfExists('produk');
    }
}
