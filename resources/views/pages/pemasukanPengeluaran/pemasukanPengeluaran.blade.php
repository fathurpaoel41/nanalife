@extends('template.master')
@section('content')
<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <span class="breadcrumb-item"><a href="/pemasukanPengeluaran">Pemasukan Pengeluaran</a></span>
    </ol>
</nav>
<div class="row">
    <a href="/tambahPemasukanPengeluaran"><span class="fas fa-plus-circle buttonPlus"></span></a>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <canvas id="barChart" style="height:250px"></canvas>
                <div id="bar-traffic-legend"></div>
                <center>Traffic Transaksi</center>
            </div>
        </div>
    </div>

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="col-sm-6">
                    Filter Tanggal
                    <input class="form-control" type="text" name="daterange" value="" autocomplete/></div>
                    <script>
                        $(function() {
                            $('input[name="daterange"]').daterangepicker({
                                opens: 'right',
                                autoUpdateInput: false,
                                autoApply: true,
                            }, function(start, end, label) {
                                console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
                                ;
                            });
                        });
                        </script>
                <br />
                <h3 class="card-title">Tabel Pembelian Selama Seminggu</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id Transaksi</th>
                            <th>Tipe</th>
                            <th>Nominal</th>
                            <th>Tanggal</th>
                            <th>Channel</th>
                            <th>Edited</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tabelTransaksi as $tabel)
                        <tr>
                            <td>{{$tabel->id_transaksi}}</td>
                            <td>{{$tabel->tipe}}</td>
                            <td>Rp. {{$tabel->nominal}}</td>
                            <td>{{$tabel->tanggal_transaksi}}</td>
                            <td>{{$tabel->channel_transaksi}}</td>
                            <td>{{$tabel->edited_by}}</td>
                            <td>
                            <a href="editPemasukanPengeluaran/{{$tabel->id_transaksi}}"><span class="fas fa-edit"></span></a>
                            </td>
                        </tr>
                        @endforeach
                            {{-- <td>
                                <label class="badge badge-danger">Pending</label>
                            </td> --}}
                    </tbody>
                </table>
                {{ $tabelTransaksi->links() }}
            </div>
        </div>
    </div>
</div>
@endsection

{{-- untuk datePicker --}}
<script type="text/javascript" src="../../assets/js/datePicker/jquery.min.js"></script>
<script type="text/javascript" src="../../assets/js/datePicker/moment.min.js"></script>
<script type="text/javascript" src="../../assets/js/datePicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="../../assets/js/datePicker/daterangepicker.css" />

