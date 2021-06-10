@extends('layouts.app')
@section('title','Katalog')

@section('content')
    <!--jumbotron-->
    <div class="jumbotron catalog mt-4 h-300">
        <div class="container">
            <div class="container">
                <h6 class="text-title text-white-50">UKM Bulan Ini</h6>
                <h1 class="display-3 text-white">Distribusi Pasar <br>
                    Cianjur</h1>
            </div>
            <div class="container">
                <p class="lead text-white">Buat kalian yang ingin membeli bahan pokok sehari-hari kalian bisa
                    mengunjungi
                    pasar cianjur <br>
                    dan jangan khawatir akan kualitas bahannya karena sudah terbukti berkualitas</p>
                <a href="#" class="btn btn-primary p-3">Kunjungi UMKM Ini</a>
            </div>
        </div>
    </div>
    <!--akhir jumbotron-->

    <!--dropdown-->
    <div class="container mt-5">
        <div class="container">
            <div class="btn-group">
                <button class="btn btn-secondary-dropdown btn-lg dropdown-toggle" type="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <img src="{{ url('frontend/img/catalog/category-1.svg') }}" alt="" class="mr-3 py-1">Pilih Sektor Usaha
                </button>
                <div class="dropdown-menu">
                    <a href="#" class="dropdown-item">Perikanan</a>
                    <a href="#" class="dropdown-item">Pertambangan</a>
                    <a href="#" class="dropdown-item">Pedagangan</a>
                    <a href="#" class="dropdown-item">Perbankan</a>
                    <a href="#" class="dropdown-item">Pertanian</a>
                </div>
            </div>
            <div class="btn-group mx-lg-3">
                <button class="btn btn-secondary-dropdown btn-lg dropdown-toggle" type="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <img src="{{ url('frontend/img/catalog/category-1.svg') }}" alt="" class="mr-3 py-1">Pilih Sub Sektor Usaha
                </button>
                <div class="dropdown-menu">
                    <a href="#" class="dropdown-item">Perikanan</a>
                    <a href="#" class="dropdown-item">Pertambangan</a>
                    <a href="#" class="dropdown-item">Pedagangan</a>
                    <a href="#" class="dropdown-item">Perbankan</a>
                    <a href="#" class="dropdown-item">Pertanian</a>
                </div>
            </div>
            <div class="btn-group mx-lg-3">
                <button class="btn btn-secondary-dropdown btn-lg dropdown-toggle" type="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <img src="{{ url('frontend/img/catalog/category-1.svg') }}" alt="" class="mr-3 py-1">Daerah
                </button>
                <div class="dropdown-menu">
                    <a href="#" class="dropdown-item">Perikanan</a>
                    <a href="#" class="dropdown-item">Pertambangan</a>
                    <a href="#" class="dropdown-item">Pedagangan</a>
                    <a href="#" class="dropdown-item">Perbankan</a>
                    <a href="#" class="dropdown-item">Pertanian</a>
                </div>
            </div>
        </div>
    </div>
    <!--akhir dropdown-->

    <!--catalog cards-->
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-sm-6 col-sm-2 col-lg-3 mt-4">
                <div class="container">
                    <div class="card catalog-card" style="width: 15rem;">
                        <img class="card-img-top" src="{{ url('frontend/img/catalog/catalog.svg') }}" alt="Card image cap">
                        <div class="card-body">
                            <a href="{{ route('detail-katalog') }}" class="hr">
                                <h5 class="card-title">Fresh Market</h5>
                                <p>Perikanan</p>
                                <p>Sub Bibit Ikan</p>
                            </a>
                            <p class="card-text mt-5">
                                <img src="{{ url('frontend/img/catalog/placeholder-1.svg') }}" alt="" class="mr-2">Jakarta, Indonesia
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-sm-2 col-lg-3 mt-4">
                <div class="container">
                    <div class="card catalog-card" style="width: 15rem;">
                        <img class="card-img-top" src="{{ url('frontend/img/catalog/catalog.svg') }}" alt="Card image cap">
                        <div class="card-body">
                            <a href="{{ route('detail-katalog') }}" class="hr">
                                <h5 class="card-title">Fresh Market</h5>
                                <p>Perikanan</p>
                                <p>Sub Perikanan</p>
                            </a>
                            <p class="card-text mt-5">
                                <img src="{{ url('frontend/img/catalog/placeholder-1.svg') }}" alt="" class="mr-2">Jakarta, Indonesia
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-sm-2 col-lg-3 mt-4">
                <div class="container">
                    <div class="card catalog-card" style="width: 15rem;">
                        <img class="card-img-top" src="{{ url('frontend/img/catalog/catalog.svg') }}" alt="Card image cap">
                        <div class="card-body">
                            <a href="{{ route('detail-katalog') }}" class="hr">
                                <h5 class="card-title">Fresh Market</h5>
                                <p>Perikanan</p>
                                <p>Sub Perikanan</p>
                            </a>
                            <p class="card-text mt-5">
                                <img src="{{ url('frontend/img/catalog/placeholder-1.svg') }}" alt="" class="mr-2">Jakarta, Indonesia
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-sm-2 col-lg-3 mt-4">
                <div class="container">
                    <div class="card catalog-card" style="width: 15rem;">
                        <img class="card-img-top" src="{{ url('frontend/img/catalog/catalog.svg') }}" alt="Card image cap">
                        <div class="card-body">
                            <a href="{{ route('detail-katalog') }}" class="hr">
                                <h5 class="card-title">Fresh Market</h5>
                                <p>Perikanan</p>
                                <p>Sub Perikanan</p>
                            </a>
                            <p class="card-text mt-5">
                                <img src="{{ url('frontend/img/catalog/placeholder-1.svg') }}" alt="" class="mr-2">Jakarta, Indonesia
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--event catalog cards-->
@endsection