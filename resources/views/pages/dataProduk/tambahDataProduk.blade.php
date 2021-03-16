@extends('template.master')
@section('content')
<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dataProduk">Data Produk</a></li>
        <li class="breadcrumb-item">Tambah Data Produk</li>
    </ol>
</nav>
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <center><h4>Tambah Data Produk</h4></center>
                <br>
                <form action="/tambahPemasukanPengeluaran" method="POST">
                    @csrf
                    <input type="hidden" name="edited_by" value="{{Auth::user()->name}}">
                <div class="form-group">
                    <label for="namaProduk" class="form-label">Nama Produk</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" id="namaProduk" name="namaProduk">
                    </div>
                </div>
                <div class="form-group">
                    <label for="beratProduk" class="form-label">Berat Produk</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" id="beratProduk" name="beratProduk">
                        <span class="input-group-text">gram</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="catatan" class="form-label">Catatan</label>
                    <textarea class="form-control" id="catatan" rows="2" name="catatan"></textarea>
                </div>
                <label for="namaBarang" class="form-label">Size</label>
                    <div class="form-group">
                        <select class="form-select" aria-label="Default select example" name="nama_barang">
                            <option selected>--Pilih--</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="beratProduk" class="form-label">Stok Barang</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" id="beratProduk" name="beratProduk">
                            <span class="input-group-text">Pcs</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="beratProduk" class="form-label">Harga</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Rp.</span>
                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" id="beratProduk" name="beratProduk">
                            <span class="input-group-text">.oo</span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Select Gambar</label>
                        <input class="form-control" type="file" id="formFile">
                      </div>
                    <br><br>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection




