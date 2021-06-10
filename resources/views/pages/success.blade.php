@extends('layouts.success')
@section('title','Pendaftaran Berhasil')

@section('content')
    <div class="container mt-5">
        <img src="{{ url('frontend/img/sukses.svg') }}" alt="" class="sukses rounded mx-auto d-block">
    </div>
    <div class="text-center">
        <h4 class="text-title mt-4">Berhasil mendaftar event</h4>
        <p class="mt-3">Hari yang indah untuk memulai harimu</p>
        <div class="row">
            <div class="col-12">
                <a href="{{ url('/') }}" class="btn btn-primary mt-4 py-2 px-5">Kembali ke Beranda</a>
            </div>
        </div>
    </div>
@endsection