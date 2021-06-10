@extends('layouts.app')
@section('title','Berita sahabatUMKM')

@section('content')
 <!--berita-->
 <h2 class="text-center text-title mt-5">Berita Hari Ini</h2>
    <div class="container mt-5">
        <!--buttons-->
        <div class="row">
            <div class="col-6 col-sm-6 col-lg-3 mt-3 mt-sm-3 mt-lg-0">
                <button class="btn btn-block btn-primary-toggle text-white p-3">
                    <img src="{{url ('frontend/img/berita/presentation-1.svg') }}" alt="" class="mr-4">
                    Acara
                </button>
            </div>
            <div class="col-6 col-sm-6 col-lg-3 mt-3 mt-sm-3 mt-lg-0">
                <button onclick="keTipsdanTrik()" class="btn btn-block btn-secondary-toggle p-3">
                    <img src="{{url ('frontend/img/berita/light-1.svg') }}" alt="') }}" class="mr-4">
                    Tips dan Trik
                </button>
            </div>
            <div class="col-6 col-sm-6 col-lg-3 mt-3 mt-sm-3 mt-lg-0">
                <button onclick="kePengumuman()" class="btn btn-block btn-secondary-toggle p-3">
                    <img src="{{url ('frontend/img/berita/megaphone-1.svg') }}" a') }}lt="" class="mr-4">
                    Pengumuman
                </button>
            </div>
            <div class="col-6 col-sm-6 col-lg-3 mt-3 mt-sm-3 mt-lg-0">
                <button onclick="keBerita()" class="btn btn-block btn-secondary-toggle p-3">
                    <img src="{{url ('frontend/img/berita/news-1.svg') }}" alt=""') }} class="mr-4">
                    Berita
                </button>
            </div>
        </div>
        <!--buttons-->


        <!--title berita-->
        <div class="card news-title mt-5">
            <img class="img-fluid card-img-top" src="{{ url('frontend/img/berita/card-news-1.png') }}" alt="">
            <div class="card-img-overlay">
                <p class="author text-white-50">
                    <img src="{{url ('frontend/img/berita/author-1.svg') }}" alt="" class="mr-3">
                    Ivan Purba
                </p>
                <h2 class="card-title text-white ">
                    PT. FreshMarket adakan seminar penjualan instagram
                </h2>
                <p class="text-white-50">Sebagai pengusaha yang baru merambah di media sosial, kita harus tau bagaimana
                    cara produk kita
                    berkembang pesat di sektor
                    penjualan. Maka dari itu, PT FreshMarket mengadakan seminar penjualan</p>
            </div>
        </div>
        <!--akhir title berita-->

        <div class="row">
            <div class="col-6 col-sm-6 col-lg-3 mt-4">
                <div class="card news-card">
                    <img class="card-img-top" src="{{ url('frontend/img/main-news-1.svg') }}" alt="Card image cap">
                    <div class="card-body">
                        <a href="detailberita.html">
                            <h5 class="card-title">UMKM PT. A adakan <br>
                                Kompetisi tulis online</h5>
                        </a>
                        <a href="detailberita.html">
                            <p class="card-text">PT. A sedang mengadakan tulis online
                                yang diselenggarakan pada tanggal 26
                                Februari 2020. Acara ini melibatkan 250
                                peserta dalam jangka waktu 3 hari</p>
                        </a>
                        <p class="author text-black-50 mt-5">
                            <img src="{{ url('frontend/img/berita/author-1.svg') }}" alt="" class="mr-3">
                            Ivan Purba
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-lg-3 mt-4">
                <div class="card news-card">
                    <img class="card-img-top" src="{{ url('frontend/img/main-news-1.svg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">UMKM PT. B adakan <br>
                            Kompetisi tulis online</h5>
                        <p class="card-text">PT. B sedang mengadakan tulis online
                            yang diselenggarakan pada tanggal 26
                            Februari 2020. Acara ini melibatkan 250
                            peserta dalam jangka waktu 3 hari</p>
                        <p class="author text-black-50 mt-5">
                            <img src="{{ url('frontend/img/berita/author-1.svg') }}" alt="" class="mr-3">
                            Ivan Purba
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-lg-3 mt-4">
                <div class="card news-card">
                    <img class="card-img-top" src="{{ url('frontend/img/main-news-1.svg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">UMKM PT. C adakan <br>
                            Kompetisi tulis online</h5>
                        <p class="card-text">PT. C sedang mengadakan tulis online
                            yang diselenggarakan pada tanggal 26
                            Februari 2020. Acara ini melibatkan 250
                            peserta dalam jangka waktu 3 hari</p>
                        <p class="author text-black-50 mt-5">
                            <img src="{{ url('frontend/img/berita/author-1.svg') }}" alt="" class="mr-3">
                            Ivan Purba
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-lg-3 mt-4">
                <div class="card news-card">
                    <img class="card-img-top" src="{{ url('frontend/img/main-news-1.svg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">UMKM PT. D adakan <br>
                            Kompetisi tulis online</h5>
                        <p class="card-text">PT. D sedang mengadakan tulis online
                            yang diselenggarakan pada tanggal 26
                            Februari 2020. Acara ini melibatkan 250
                            peserta dalam jangka waktu 3 hari</p>
                        <p class="author text-black-50 mt-5">
                            <img src="{{ url('frontend/img/berita/author-1.svg') }}" alt="" class="mr-3">
                            Ivan Purba
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--akhir berita-->
@endsection