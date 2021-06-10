@extends('layouts.app')
@section('title','Kontak Kami')

@section('content')
    <!-- peta -->
    <div class="container mt-5">
        <h2 class="text-title">Lokasi kami</h2>
        <div class="location-map mt-5"></div>
    </div>
    <!-- akhir peta -->

    <!-- kontak -->
    <div class="container mt-5">
        <h2 class="text-title">Kontak kami</h2>
        <div class="row">
            <div class="col-5 mt-4">
                <form action="#">
                    <div class="form-group">
                        <label for="email">Alamat Email</label>
                        <input type="email" class="form-control" id="email" placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                        <label for="subject">Subjek</label>
                        <textarea type="text" class="form-control" id="subject" rows="3"></textarea>
                    </div>
                    <a href="#" class="btn btn-block btn-primary py-2 mt-4">Kirim</a>
                </form>
            </div>
        </div>
    </div>
    <!-- akhir kontak -->
@endsection