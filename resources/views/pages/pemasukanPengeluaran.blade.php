@extends('template.master')
@section('content')
<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/pemasukanPengeluran">Pemasukan Pengeluaran</a></li>
    </ol>
  </nav>
<div class="row">
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
                <input class="form-control" type="text" name="daterange" value="01/01/2018 - 01/15/2018" /></div>
                <script>
                $(function() {
                $('input[name="daterange"]').daterangepicker({
                    opens: 'right'
                }, function(start, end, label) {
                    console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
                });
                });
                </script>
                <br />
                <h3 class="card-title">Tabel Pembelian Selama Seminggu</h3>
                <table class="table">
                <thead>
                    <tr>
                    <th>Profile</th>
                    <th>VatNo.</th>
                    <th>Created</th>
                    <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>Jacob</td>
                    <td>53275531</td>
                    <td>12 May 2017</td>
                    <td>
                        <label class="badge badge-danger">Pending</label>
                    </td>
                    </tr>
                    <tr>
                    <td>Messsy</td>
                    <td>53275532</td>
                    <td>15 May 2017</td>
                    <td>
                        <label class="badge badge-warning">In progress</label>
                    </td>
                    </tr>
                    <tr>
                    <td>John</td>
                    <td>53275533</td>
                    <td>14 May 2017</td>
                    <td>
                        <label class="badge badge-info">Fixed</label>
                    </td>
                    </tr>
                    <tr>
                    <td>Peter</td>
                    <td>53275534</td>
                    <td>16 May 2017</td>
                    <td>
                        <label class="badge badge-success">Completed</label>
                    </td>
                    </tr>
                    <tr>
                    <td>Dave</td>
                    <td>53275535</td>
                    <td>20 May 2017</td>
                    <td>
                        <label class="badge badge-warning">In progress</label>
                    </td>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

<script type="text/javascript" src="../../assets/js/datePicker/jquery.min.js"></script>
<script type="text/javascript" src="../../assets/js/datePicker/moment.min.js"></script>
<script type="text/javascript" src="../../assets/js/datePicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="h../../assets/js/datePicker/daterangepicker.css" />
