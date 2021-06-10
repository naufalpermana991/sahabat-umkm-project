@extends('layouts.app')
@section('title','Galeri Acara')

@section('content')
        <!--card-->
    <div class="container">
        <div class="container mt-5">
            <h2 class="text-title">
                Galeri
            </h2>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4 mt-5">
                    <div class="card gallery">
                        <img src="{{ url('frontend/img/gallery.svg') }}" alt="" class="card-img-top">
                        <h5 class=" text-main mt-4 pl-3">Seminar Marketplace</h5>
                        <p class="pl-3">10 Foto</p>
                        <a class="link-details pl-3 mb-4" data-toggle="modal" data-target="#detailfoto">
                            Lihat detail foto
                        </a>
                    </div>
                </div>
            </div>
            <div class="mt-5">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!--akhir card-->
@endsection