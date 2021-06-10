@extends('layouts.app')

@section('title')
    SahabatUMKM | Komunitas UMKM di Indonesia
@endsection

@section('content')
    <!--jumbotron-->
    <div class="jumbotron mt-4 h-300">
        <div class="container">
            <h1 class="display-3 text-white">Satu tempat untuk <br>
                semua UMKM</h1>
            <p class="lead text-white-50">Jadikan UMKM anda sebagai program-program yang dapat meningkatkan potensi
                usaha di <br>
                masa depan dengan platform SAHABATUMKM.</p>
            <a href ="{{ url('/katalog') }}" class="btn btn-primary p-3">Pelajari Lebih Lanjut</a>
        </div>
    </div>
    <!--akhir jumbotron-->

    <!--bagian tentang sahabatUMKM-->
    <div class="container">
        <div class="section-phase">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <h2 class="text-main">Tentang <br> SahabatUMKM</h2>
                    <p>Sahabat UMKM dibentuk sebagai komunitas yang memberikan <br>
                        kontribusi positif dalam mengembangkan potensi usaha para <br>
                        pelaku UMKM di Indonesia.
                    </p>
                </div>
                <div class="second-section d-none d-xl-block col-sm-12 col-md-12 col-lg-6">
                    <img src="{{ url('frontend/img/section-1.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!--akhir bagian tentang sahabatUMKM-->

    <!--events-->
    <section class="p-1">
        <div class="container-section">
            <div class="section-phase">
                <h2 class="text-main text-center mt-5">Event Hari Ini</h2>
            </div>
            <!--events card-->
            <div class="container">
                <div class="row">

                    <div class="col-sm-12 col-lg-4">
                        <div class="card event mt-5">
                            <img src="{{ url('frontend/img/card-1.svg') }} " alt="" class="card-img-top">
                            <div class="card-body event-body">
                                <p class="card-text text-muted">Senin, 25 Februari 2021</p>
                                <h5 class="card-title">
                                    Seminar UKM 2021
                                </h5>
                                <p class="card-text mt-4">
                                    <img src="{{ url('frontend/img/clock 1.png') }} " alt="" class="mr-3">08.00 - 11.00
                                </p>
                                <p class="card-text mt-4">
                                    <img src="{{ url('frontend/img/dollar-sign 1.png') }} " alt="" class="mr-3">Rp45.000/orang
                                </p>
                                <p class="card-text mt-4">
                                    <img src="{{ url('frontend/img/home-1.png') }} " alt="" class="mr-3">Video Conference (Zoom)
                                </p>
                                <a href="{{ route('event-details') }}" class="btn btn-block btn-primary mt-5 p-2">Lihat Detail
                                    Event Ini</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-lg-4">
                        <div class="card event mt-5">
                            <img src="{{ url('frontend/img/card-2.svg') }} " alt="" class="card-img-top">
                            <div class="card-body event-body">
                                <p class="card-text text-muted">Senin, 25 Februari 2021</p>
                                <h5 class="card-title">
                                    Seminar UKM 2021
                                </h5>
                                <p class="card-text mt-4">
                                    <img src="{{ url('frontend/img/clock 1.png') }} " alt="" class="mr-3">08.00 - 11.00
                                </p>
                                <p class="card-text mt-4">
                                    <img src="{{ url('frontend/img/dollar-sign 1.png') }} " alt="" class="mr-3">Rp45.000/orang
                                </p>
                                <p class="card-text mt-4">
                                    <img src="{{ url('frontend/img/home-1.png') }} " alt="" class="mr-3">Video Conference (Zoom)
                                </p>
                                <a href="{{ route('event-details') }}" class="btn btn-block btn-primary mt-5 p-2">Lihat Detail
                                    Event Ini</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-lg-4">
                        <div class="card event mt-5">
                            <img src="{{ url('frontend/img/card-3.svg') }} " alt="" class="card-img-top">
                            <div class="card-body event-body">
                                <p class="card-text text-muted">Senin, 25 Februari 2021</p>
                                <h5 class="card-title">
                                    Seminar UKM 2021
                                </h5>
                                <p class="card-text mt-4">
                                    <img src="{{ url('frontend/img/clock 1.png') }}" alt="" class="mr-3">08.00 - 11.00
                                </p>
                                <p class="card-text mt-4">
                                    <img src="{{ url('frontend/img/dollar-sign 1.png') }} " alt="" class="mr-3">Rp45.000/orang
                                </p>
                                <p class="card-text mt-4">
                                    <img src="{{ url('frontend/img/home-1.png') }}" alt="" class="mr-3">Video Conference (Zoom)
                                </p>
                                <a href="{{ route('event-details') }}" class="btn btn-block btn-primary mt-5 p-2">Lihat Detail
                                    Event Ini</a>
                            </div>
                        </div>
                        <a href="{{ route('event') }}" class="link float-right mt-5 mb-5">Lihat Semua Event>></a>
                    </div>
                </div>
            </div>
            <!--akhir events card-->
        </div>
    </section>
    <!--akhir events-->

    <!--testimoni-->
    <div class="container">
        <div class="section-phase">
            <h2 class="text-main text-center">Apa kata mereka tentang <img src="{{url ('frontend/img/assetsahabatUMKM.png') }}" alt=""></h2>
            <div class="row">

                <div class="col-sm-12 col-lg-4">
                    <div class="card testimonial mt-5">
                        <div class="card-body testimonial-body">
                            <p>
                                “Lorem ipsum dolor sit amet,<br>
                                consectetur adipiscing elit.<br>
                                Aenean quis rhoncus, mauris<br>
                                fames in semper.”
                            </p>
                            <div class="testimonials mt-5">
                                <img src="{{url ('frontend/img/picturecustomer-1.png') }}" alt="" class="mr-3"> Naufal Permana
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-4">
                    <div class="card testimonial mt-5">
                        <div class="card-body testimonial-body">
                            <p>
                                “Lorem ipsum dolor sit amet,<br>
                                consectetur adipiscing elit.<br>
                                Aenean quis rhoncus, mauris<br>
                                fames in semper.”
                            </p>
                            <div class="testimonials mt-5">
                                <img src="{{url ('frontend/img/picturecustomer-1.png') }}" alt="" class="mr-3"> Naufal Permana
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-4">
                    <div class="card testimonial mt-5">
                        <div class="card-body testimonial-body">
                            <p>
                                “Lorem ipsum dolor sit amet,<br>
                                consectetur adipiscing elit.<br>
                                Aenean quis rhoncus, mauris<br>
                                fames in semper.”
                            </p>
                            <div class="testimonials mt-5">
                                <img src="{{url ('frontend/img/picturecustomer-1.png') }}" alt="" class="mr-3"> Naufal Permana
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--akhir testimoni-->
@endsection