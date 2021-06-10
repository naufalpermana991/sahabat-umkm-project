@extends('layouts.app')
@section('title','Detail Katalog')

@section('content')
 <!--breadcrumbs-->
 <div class="container mt-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent">
                <li class="breadcrumb-item"><a href="{{ url('/katalog') }}">Katalog</a></li>
                <li class="breadcrumb-item active" aria-current="page">Fresh Market</li>
            </ol>
        </nav>
        <!--akhir breadcrumbs-->
        <div class="container mt-5">
            <div class="row">
                <div class="col">
                    <img src="{{ url('frontend/img/catalog/header.svg') }}" alt="" class="mt-5">
                </div>
                <div class="col">
                    <h1 class="text-title mt-5">Fresh Market</h1>
                    <div class="row">
                        <div class="col">Perikanan</div>
                        <div class="col-4">Sub Bibit Ikan</div>
                    </div>
                    <p class="mt-3 mb-5 text-black-50">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Est, facilisi eu arcu sagittis risus posuere nibh.
                        Leo leo sit augue consequat tortor phasellus proin.</p>
                    <div class="row link-usaha">
                        <div class="col-12 pt-3">
                            <a href="#"><img src="{{ url('frontend/img/catalog/instagram.svg') }}" class="mr-3" alt="">Order via Instagram</a>
                        </div>
                        <div class="col-12 pt-3">
                            <a href="#"><img src="{{ url('frontend/img/catalog/fb.svg') }}" class="mr-3" alt="">Order via Facebook</a>
                        </div>
                        <div class="col-12 mt-5 pt-5">
                            <a href="#" class="order-wa"><img src="{{ url('frontend/img/catalog/wa.svg') }}" class="mr-3" alt="">Order via
                                WhatsApp</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection