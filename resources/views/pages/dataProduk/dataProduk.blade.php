@extends('template.master')
@section('content')
<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/dataProduk">Data Produk</a></li>
    </ol>
  </nav>
<div class="row">
    <a href="/tambahDataProduk"><span class="fas fa-plus-circle buttonPlus"></span></a>
    <div class="col-lg-4 grid-margin stretch-card">
        <div class="card" style="width: 18rem;">
            <img src="https://ecs7.tokopedia.net/img/cache/700/VqbcmM/2020/7/18/b73b548b-f821-4421-b212-637159a3b8d4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Pisang Zanana</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Detail</a>
            </div>
        </div>
    </div>
    <div class="col-lg-4 grid-margin stretch-card">
        <div class="card" style="width: 18rem;">
            <img src="https://storage.hpaindonesia.net:8215/assets/922a6ee7c4d63339ac3f9363e8309279/jakulpandaan_20200621_104928_0.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Sang Dewa</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Detail</a>
            </div>
        </div>
    </div>
    <div class="col-lg-4 grid-margin stretch-card">
        <div class="card" style="width: 18rem;">
            <img src="https://www.resepkuerenyah.com/wp-content/uploads/2015/09/Cara-Membuat-Jus-Pisang-Spesial-Menyehatkan.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Jus Pisang</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Detail</a>
            </div>
        </div>
    </div>
</div>

@endsection
