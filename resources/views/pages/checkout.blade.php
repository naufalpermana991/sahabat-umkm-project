@extends('layouts.checkout')
@section('title','Checkout Event')

@section('content')
    <!--alert-->
    <div class="container mt-5">
        <div class="alert alert-info-event-offline alert-dismissible fade show" role="alert">
            <div class="row">
                <div class="col">
                    <img src="{{ url('frontend/img/event/no-virus-1.svg') }}" alt="" class="p-lg-3">

                </div>
                <div class="col-10">
                    <h4 class="text-title info-event-offline mt-3 mt-lg-2 p-lg-2">Seminar ini menerapkan protokol
                        kesehatan
                        Covid-19
                    </h4>
                    <p class="info-event-offline p-lg-2">Sesuai dengan peraturan PSBB, seminar ini sudah
                        menerapkan
                        protokol kesehatan seperti menjaga
                        jarak antar peserta event, memakai masker, dan difasilitasi hand sanitizer yang disediakan
                        oleh panitia.</p>
                </div>
            </div>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>

    <!--akhir alert-->
    <div class="container mt-5">
        <h4 class="text-title">
            Checkout seminar penjualan melalui instagram
        </h4>
        <!--card-->
        <div class="row">
            <div class="col-12 col-lg-6 mt-5 mb-5">
                <div class="card transaction">
                    <img src="" alt="" class="card-img-top">
                    <d class="card-body">
                        <h5 class="text-title">
                            Penjualan melalui instagram
                        </h5>
                        <span class="badge badge-pill badge-success px-3 py-2 mt-2">Protokol Kesehatan
                            Covid-19</span>
                        <span class="badge badge-pill badge-info px-3 py-2 ml-2 mt-2">Offline</span>
                        <p class="card-text mt-4">
                            <img src="{{ url('frontend/img/clock 1.png') }}" alt="" class="mr-3">08.00 - 11.00
                        </p>
                        <p class="card-text">
                            <img src="{{ url('frontend/img/dollar-sign 1.png') }}" alt="" class="mr-3">Rp45.000/orang
                        </p>
                        <p class="card-text">
                            <img src="{{ url('frontend/img/home-1.png') }}" alt="" class="mr-3">Video Conference (Zoom)
                        </p>
                        <p>Sebagai pengusaha yang baru merambah di media sosial, kita harus tau
                            bagaimana cara produk kita berkembang pesat di sektor penjualan</p>
                        <hr class="mt-4">
                        <h5 class="text-title">
                            Informasi Peserta
                        </h5>
                        <div class="row mt-4">
                        <div class="col">
                            <p>Nama</p>
                            <p>E-mail</p>
                            <p>Domisili</p>
                        </div>
                        <div class="col">
                            <p class="text-right text-black-50">Tammy Abraham</p>
                            <p class="text-right text-black-50">tammydoodle21@gmail.com</p>
                            <p class="text-right text-black-50">Bogor</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6 mt-5">
                <div class="card transaction">
                    <img src="" alt="" class="card-img-top">
                    <div class="card-body">
                        <h5 class="text-title">
                            Informasi Checkout
                        </h5>
                        <div class="row mt-4">
                            <div class="col">
                                <p>Harga Tiket</p>
                                <p>Kode Unik</p>
                                <p>Total(*Kode Unik)</p>
                            </div>
                            <div class="col">
                                <p class="text-right text-black-50">Rp45.000/Orang</p>
                                <p class="text-right text-black-50">569</p>
                                <p class="text-right">Rp45.569</p>
                            </div>
                        </div>
                        <div class="mt-0">
                            <div class="row">
                                <div class="col">
                                    <a href="{{ route('event-details-success') }}" class="btn btn-block btn-primary p-3 mt-5">Saya Sudah Bayar</a>
                                    <a href="#" class="text-black-50 d-block text-center mt-3">Batalkan Pesanan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--akhir card-->
@endsection