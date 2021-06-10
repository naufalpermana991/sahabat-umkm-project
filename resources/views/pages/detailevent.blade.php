@extends('layouts.app')
@section('title','Detail Event')

@section('content')
        <!--breadcrumbs-->
        <div class="container mt-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent">
                <li class="breadcrumb-item"><a href="indexafterlogin.html">Beranda</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/event') }}">Event</a></li>
                <li class="breadcrumb-item active" aria-current="page">Meningkatkan penjualan melalui Instagram</li>
            </ol>
        </nav>
    </div>
    <!--akhir breadcrumbs-->
    <!--isi-->
    <div class="container mt-3">
        <h2 class="text-title">Meningkatkan penjualan melalui Instagram</h2>
        <div class="detail-event mt-5 h-300">
        </div>
    </div>


    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h2 class="text-title">Deskripsi Event</h2>
                <p>Sebagai pengusaha yang baru merambah di media sosial, <br>
                    kita harus tau bagaimana cara produk kita berkembang pesat di sektor penjualan</p>
                <a href="{{ route('event-checkout') }}" class="btn btn-primary mt-5 px-5 py-2">Daftarkan Saya Event Ini</a>
            </div>
            <div class="col">
                <h2 class="text-title">Jadwal Event</h2>
                <p class="card-text mt-4">
                    <img src="{{ url('frontend/img/clock 1.png') }}" alt="" class="mr-3">08.00 - 11.00
                </p>
                <p class="card-text mt-4">
                    <img src="{{ url('frontend/img/home-1.png') }}" alt="" class="mr-3">Video Conference (Zoom)
                </p>
                <p class="text-title mt-5">HTM Rp45.000/orang</p>
            </div>
        </div>
    </div>
    <!--akhir isi-->
@endsection