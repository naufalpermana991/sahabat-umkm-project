@extends('layouts.app')
@section('title','Event')

@section('content')
      <!--pills-->
      <ul class="nav nav-pills justify-content-center mt-5">
        <li class="nav-item">
            <a class="nav-link active py-3 px-4 mr-3" href="#">Semua</a>
        </li>
        <li class="nav-item">
            <a class="nav-link standby py-3 mr-3" href="#">Seminar</a>
        </li>
        <li class="nav-item">
            <a class="nav-link standby py-3 mr-3" href="#">Kelas Komunitas</a>
        </li>
    </ul>
    <!--akhir pills-->

    <!--isi-->
    <div class="container mt-5">
        <div class="text-center">
            <h2 class="text-title mt-5">Saat ini belum ada event yang bisa kamu ikuti</h2>
            <p>Ikuti event di sekitaran kamu buat menambah ilmu dan relasi kamu</p>
        </div>
    </div>
    <hr class="mt-5">
    <div class="container mt-5">
        <h5 class="text-title mb-5">Event hari ini</h5>
        <!--card-->
        <div class="row">
            <div class="col-12 col-sm-12 col-lg-6 mt-lg-0">
                <div class="cards event-list-main">
                    <div class="card-body">
                        <span class="badge badge-pill badge-success mb-5 px-3 py-2">Protokol Kesehatan
                            Covid-19</span>
                        <span class="badge badge-pill badge-info mb-5 px-3 py-2 ml-2">Offline</span>
                        <h5 class="card-title text-white" style="margin-top: 10rem;">Meningkatkan penjualan melalui
                            Instagram</h5>
                        <p class="card-text isi">Sebagai pengusaha yang baru merambah di media sosial,
                            kita harus tau bagaimana cara produk kita berkembang pesat di sektor penjualan</p>
                        <div class="row">
                            <div class="col-5 mb-2">
                                <p class="card-text jadwal text-white-50 mt-4">
                                    <img src="{{ url('frontend/img/event/clock-1.svg') }} " alt="" class="mr-3">08.00 - 11.00
                                </p>
                            </div>
                            <div class="col-5 mb-2">
                                <p class="card-text jadwal text-white-50 mt-4">
                                    Rp45.000/orang
                                </p>
                            </div>
                        </div>
                    </div>
                    <a href="{{ url('/event/details') }}" class="btn btn-block tombol-event btn-primary p-3">Lihat Detail Event
                        Ini</a>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-lg-6 mt-sm-4 mt-lg-0 mt-4">
                <div class="cards event-list-main">
                    <div class="card-body">
                        <span class="badge badge-pill badge-success mb-5 px-3 py-2">Protokol Kesehatan
                            Covid-19</span>
                        <span class="badge badge-pill badge-info mb-5 px-3 py-2 ml-2">Offline</span>
                        <h5 class="card-title text-white" style="margin-top: 10rem;">Meningkatkan penjualan melalui
                            Instagram</h5>
                        <p class="card-text isi">Sebagai pengusaha yang baru merambah di media sosial,
                            kita harus tau bagaimana cara produk kita berkembang pesat di sektor penjualan</p>
                        <div class="row">
                            <div class="col-5 mb-2">
                                <p class="card-text jadwal text-white-50 mt-4">
                                    <img src="{{url ('frontend/img/event/clock-1.svg') }}" alt="" class="mr-3">08.00 - 11.00
                                </p>
                            </div>
                            <div class="col-5 mb-2">
                                <p class="card-text jadwal text-white-50 mt-4">
                                    Rp45.000/orang
                                </p>
                            </div>
                        </div>
                    </div>
                    <a href="{{ url('/event/details') }}" class="btn btn-block tombol-event btn-primary p-3">Lihat Detail Event
                        Ini</a>
                </div>
            </div>
        </div>
        <!--akhir card-->
    </div>
    </div>
    <!--bagian isi-->
@endsection