<!--navbar-->
<div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ url('frontend/img/assetsahabatUMKM.png') }}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mr-3">
                        <a class="nav-link" href="{{ url('/katalog') }}">Katalog</a>
                    </li>
                    <li class="nav-item mr-3">
                        <a class="nav-link" href="{{ url('/galeri') }}">Galeri</a>
                    </li>
                    <li class="nav-item mr-3">
                        <a class="nav-link" href="{{ url('/event') }}">Events</a>
                    </li>
                    <li class="nav-item mr-3">
                        <a class="nav-link" href="{{ url('/berita') }}l">Berita</a>
                    </li>
                    <li class="nav-item mr-3">
                        <a class="nav-link" href="{{ url('/kontak') }}">Kontak</a>
                    </li>                 
                </ul>
                
                @guest
                <button class="btn btn-outline-primary my-2 my-sm-3 my-lg-0 ml-3 px-5 " 
                type="button" 
                onclick="event.preventDefault(); location.href='{{ url('login') }}';">Masuk</button>
                @endguest
                
                @auth
                <form action="{{ url('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-outline-primary my-2 my-sm-3 my-lg-0 ml-3 px-5" 
                    type="submit">Keluar</button>
                </form>
                @endauth

            </div>
        </nav>
</div>
<!--akhir navbar-->