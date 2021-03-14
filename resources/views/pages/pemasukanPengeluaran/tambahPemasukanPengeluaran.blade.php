@extends('template.master')
@section('content')
<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/pemasukanPengeluaran">Pemasukan Pengeluaran</a></li>
        <li class="breadcrumb-item">Tambah Pemasukan Pengeluaran</li>
    </ol>
</nav>
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <center><h4>Pemasukan Pengeluaran</h4></center>
                <br>
                <form action="/tambahPemasukanPengeluaran" method="POST">
                    @csrf
                    <input type="hidden" name="edited_by" value="{{Auth::user()->name}}">
                    <label for="nominal" class="form-label">Tipe</label>
                <div class="form-group">
                    <select class="form-select" aria-label="Default select example" name="tipe">
                        <option selected>--Pilih--</option>
                        <option value="Pemasukan">Pemasukan</option>
                        <option value="Pengeluaran">Pengeluaran</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nominal" class="form-label">Nominal</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Rp.</span>
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" id="nominal" name="nominal">
                        <span class="input-group-text">.00</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="catatan" class="form-label">Catatan</label>
                    <textarea class="form-control" id="catatan" rows="2" name="catatan"></textarea>
                </div>
                <div class="form-group">
                    <label for="tanggal" class="form-label">Tanggal</label><br>
                    <input type="date" name="tanggal" id="tanggal" name="tanggal" class="form-control" />
                </div>
                <br>
                <h5>Informasi</h5>
                <br>
                <label for="namaBarang" class="form-label">Nama Barang</label>
                    <div class="form-group">
                        <select class="form-select" aria-label="Default select example" name="nama_barang">
                            <option selected>--Pilih--</option>
                            @foreach($barangTransaksi as $barang)
                            <option value="{{$barang->nama_barang}}">{{$barang->nama_barang}}</option>
                            @endforeach
                        </select>
                    </div>
                    <label for="channelPembayaran" class="form-label">Channel Pembayaran</label>
                    <div class="form-group">
                        <select class="form-select" aria-label="Default select example" id="channelPembayaran" name="nama_channel_transaksi">
                            <option selected>--Pilih--</option>
                            @foreach($channelTransaksi as $channel)
                            <option value="{{$channel->nama_channel_transaksi}}">{{$channel->nama_channel_transaksi}}</option>
                            @endforeach
                        </select>
                    </div>
                    <br><br>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection




