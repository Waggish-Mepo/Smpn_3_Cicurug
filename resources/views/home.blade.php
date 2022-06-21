<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smpn 3 Cicurug</title>

    <!--Bootstrap Assets-->
    <link rel="stylesheet" href="{{ url('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/vendor/bootstrap/icons-1.7.2/font/bootstrap-icons.css') }}">

    <!--CSS Component For Layouting-->
    <link rel="stylesheet" href="{{ url('assets/css/preloader.css') }}">

    <!--Slick Js-->
    <link rel="stylesheet" href="{{ url('assets/vendor/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ url('assets/vendor/slick/slick-theme.css') }}">

    <!--Styling LandingPage-->
    <link rel="stylesheet" href="{{ url('assets/css/landingpage.css') }}">

</head>

<body>
    <div class="wrapperPreloader">
        <div id="loader"></div>
    </div>


    <div id="app">
        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">

                <a class="navbar-brand" href="#">
                    <img src="{{ url('assets/img/Smpn 3 Cicurug.png') }}">
                </a>

                <button class="navbar-toggler" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <div class="menu">
                            <a class="nav-link active" href="{{ url('/') }}">Beranda</a>
                            <a class="nav-link" href="{{ url('berita') }}">Berita</a>
                            <a class="nav-link" href="{{ url('ekstrakurikuler') }}">Ekstrakurikuler</a>
                            <a class="nav-link" href="{{ url('prestasi') }}">Prestasi</a>
                            <a class="nav-link" href="{{ url('tentangKami') }}">Tentang Kami </a>
                        </div>

                        <div class="getStarted">
                            <div class="polygon">
                                <div class="clipath"></div>
                            </div>
                            <div class="buttonWrapper">
                                @auth
                                    <li class="nav-link">
                                        <form action="/logout" method="post">
                                            @csrf
                                            <button type="submit" class="btn dropdown-list">
                                                Logout<i class="bi bi-arrow-bar-right"></i>
                                            </button>
                                        </form>
                                    </li>
                                @else
                                    <li class="nav-item">
                                        <a href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right"></i>
                                            Login</a>
                                    </li>
                                @endauth
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </nav>
        <!--End Navbar-->

        <!--Banner-->
        <div class="wrapperBanner text-center">
            <div class="header" style="background-image: linear-gradient(
                rgba(0,0,0,0.6),
                rgba(0,0,0,0.6)
                ),
                url('{{ 'thumbBanner/' . DB::table('banners')->first()->image }}');">
                <h1 class="page-heading">
                    <span class="page-heading-primary">
                        <img src="{{ url('assets/img/smpn3.png') }}" alt="">
                    </span>
                    <span class="page-heading-secondary">SMPN 3 CICURUG</span>
                </h1>
            </div>
        </div>
        <!--End Banner-->

        <div class="mainContent">
            <div class="container">

                {{-- Sambutan Guru SMPN 3 Cicurug kepada Siswa Baru 2022 --}}

                <h1 class="text-center intro">{{ DB::table('sambutan')->first()->title }}</h1>

                <!--About-->
                <div class="aboutSmpn" id="aboutSmpn">
                    <div class="imagesWrapper">
                        <img src="{{ url('thumbSambutan/' . DB::table('sambutan')->first()->image) }}" alt="">
                    </div>
                    <div class="about">
                        <p>{{ DB::table('sambutan')->first()->content }}</p>
                    </div>
                </div>
                <!--End-->

                <!-- News -->
                <div class="wrapperNews">
                    <div class="headNews">
                        <h1>Berita</h1>
                        <p>Berita Seputar SMPN 3 CICURUG</p>
                    </div>
                    <div class="allNews" id="news">

                        <div class="container">
                            <div class="row">

                                @foreach (DB::table('beritas')->limit(3)->get()
    as $item)
                                    <a href="{{ route('detail-berita', ['id' => $item->id]) }}"
                                        class="col-12 col-md-4 news">
                                        <center>
                                            <div class="imgNews">
                                                <img style="max-width: 320px"
                                                    src="{{ url('thumbBerita/' . $item->image) }}" alt="">
                                            </div>
                                            <h5>
                                                {{ $item->title }}
                                            </h5>
                                        </center>
                                    </a>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
                <center>
                    <div class="moreNews">
                        <a href="{{ url('berita') }}" class="btnMore">Selengkapnya</a>
                    </div>
                </center>
                <!-- End News -->
            </div>
        </div>

        <!-- Superiority -->
        <div class="wrapperInfo">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="imagesWrapper">
                        <img src="{{ url('assets/img/bymalfi (2).png') }}" alt="">
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="row">
                        <div class="col-6 wrapperText">
                            <div class="text">
                                <h4>Prestasi</h4>
                                <p>SMPN 3 Cicurug menorehkan banyak prestasi di berbagai bidang dengan mendapatkan
                                    peringkat terbaik di Kabupaten Sukabumi serta aktif dalam mengikuti berbagai
                                    kegiatan perlombaan.</p>
                                <a href="{{ url('prestasi') }}">Lebih Lanjut</a>
                            </div>
                        </div>
                        <div class="col-6">
                            <img src="{{ url('assets/img/bymalfi (1).png') }}" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <img src="{{ url('assets/img/bymalfi (3).png') }}" alt="">
                        </div>
                        <div class="col-6 wrapperText">
                            <div class="text">
                                <h4>Ekstrakurikuler</h4>
                                <p>SMPN 3 Cicurug memiliki beragam Ekstrakurikuler untuk menyalurkan minat dan bakat
                                    para siwa.</p>
                                <a href="{{ url('ekstrakurikuler') }}">Lebih Lanjut</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        {{-- End Superiority --}}

        <div class="mainContent">
            <div class="container">

                <!-- Visi & Misi -->
                <div class="wrapperVm">
                    <div class="headVm">
                        <h1>Visi & Misi</h1>
                        <p> SMPN 3 CICURUG</p>
                    </div>
                    <div class="contentVm">
                        <a class="cardVm visi" href="{{ url('tentangKami') }}">
                            <img src="{{ url('assets/img/school.svg') }}" alt="">

                            <h3>Visi</h3>
                            <p class="small">{{ DB::table('profils')->first()->visi }}
                            </p>
                            <div class="dimmer"></div>
                            <div class="go-corner" href="{{ url('tentangKami') }}">
                                <div class="go-arrow">
                                    →
                                </div>
                            </div>
                        </a>
                        <a class="cardVm Misi" href="{{ url('tentangKami') }}">
                            <img src="{{ url('assets/img/book 1.svg') }}" alt="">
                            <h3>Misi</h3>
                            <p class="small">{{ DB::table('profils')->first()->misi }}
                            </p>
                            <div class="dimmer"></div>
                            <div class="go-corner" href="{{ url('tentangKami') }}">
                                <div class="go-arrow">
                                    →
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- End Visi & Misi -->

                <!--Countries Available-->
                <div class="wrapperCountryAvaialble">
                    <div class="content">
                        <div class="text">
                            <h1>Rangkaian kegiatan yang dilaksanakan di SMPN 3 Cicurug.</h1>
                        </div>

                        <div class="wrapperImagesCountry">
                            <div class="lineCountry lineCountry1">
                                @foreach (DB::table('kegiatans')->get() as $item)
                                    <div class="country">
                                        <img src="{{ url('thumbKegiatan/' . $item->image) }}"
                                            style="max-width: 320px;height:150px;border-radius: 15px"
                                            class="img-fluid">
                                    </div>
                                @endforeach
                            </div>

                            <div class="lineCountry lineCountry2">

                                @foreach (DB::table('kegiatans')->orderBy('id', 'desc')->get()
    as $item)
                                    <div class="country">
                                        <img src="{{ url('thumbKegiatan/' . $item->image) }}" class="img-fluid"
                                            style="max-width: 320px;height:150px;border-radius: 15px">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Countries Available-->

            </div>
        </div>

        <footer>
            <div class="container">
                <div class="contentFooter">
                    <div class="line">
                        <img src="{{ url('assets/img/smpn3.png') }}" alt="">
                        <p>Smpn 3 Cicurug terakreditasi A, mencetak Alumni yang berkualitas bagi negara, hampir 75% para
                            alumni sukses di masadepannya.</p>
                    </div>

                    <div class="line">
                        <h3>Tautan Links</h3>

                        <div class="linkToPages">
                            <a href="{{ url('/') }}">Beranda</a>
                            <a href="{{ url('berita') }}">Berita</a>
                            <a href="{{ url('ekstrakurikuler') }}">Ekstrakurikuler</a>
                            <a href="{{ url('prestasi') }}">Prestasi</a>
                            <a href="{{ url('tentangKami') }}">Tentang Kami</a>
                        </div>
                    </div>

                    <div class="line">
                        <h3>Tentang Kami</h3>

                        <div class="linkToPages">
                            <a href="{{ url('tentangKami') }}">Profil Sekolah</a>
                            <a href="{{ url('tentangKami') }}">Visi & Misi</a>
                            <a href="{{ url('tentangKami') }}">Sejarah</a>
                        </div>
                    </div>

                    <div class="line">
                        <h3>Kontak</h3>
                        <a href="https://wa.me/{{ DB::table('contact')->first()->no_telp }}">
                            <h2 class="phone">{{ DB::table('contact')->first()->no_telp }}</h2>
                        </a>
                        <div class="linkToPages">
                            <p class="address" style="margin-bottom: .5rem;">
                                {{ DB::table('contact')->first()->alamat }}</p>
                        </div>
                        <div class="socialMedia">
                            <a href="{{ DB::table('contact')->first()->fb }}" class="social">
                                <ion-icon name="logo-facebook"></ion-icon>
                            </a>
                            <a href="{{ DB::table('contact')->first()->ig }}" class="social">
                                <ion-icon name="logo-instagram"></ion-icon>
                            </a>
                        </div>
                    </div>
                </div>
                <p class="copyright">© 2022 SMPN 3 CICURUG</p>
            </div>
        </footer>
    </div>



    <!--Vendor-->
    <!--Jquery-->
    <script src="{{ url('assets/vendor/jquery/jquery.min.js') }}"></script>
    <!--Bootstrap JS-->
    <script src="{{ url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!--Ion Icon-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!--Slick Js-->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="{{ url('assets/vendor/slick/slick.min.js') }}"></script>

    <script>
        //Preloader
        $(window).on('load', function() {
            $('.wrapperPreloader').fadeOut('slow');
        });

        //Navbar Mobile Version Toggle triger
        $(document).ready(function() {
            $(".navbar-toggler").click(function() {
                $(".navbar-collapse").toggleClass("showNavbar");
            });
        });

        //testimoni slick
        $('.wrapperTestimoni').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 3,
            adaptiveHeight: true,
            arrows: false,
            responsive: [{
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    </script>


    <script>
        $('.lineCountry1').slick({
            infinite: false,
            slidesToShow: 2.5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
        });
        $('.lineCountry2').slick({
            slidesToShow: 2.5,
            infinite: false,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
        });
    </script>

    <script>
        $(document).ready(function() {
            $(document).on("scroll", onScroll);

            //smoothscroll
            $('a[href^="#"]').on('click', function(e) {
                e.preventDefault();
                $(document).off("scroll");

                $('a').each(function() {
                    $(this).removeClass('active');
                })
                $(this).addClass('active');

                var target = this.hash,
                    menu = target;
                $target = $(target);
                $('html, body').stop().animate({
                    'scrollTop': $target.offset().top + 6
                }, 700, 'swing', function() {
                    window.location.hash = target;
                    $(document).on("scroll", onScroll);
                });
            });
        });

        function onScroll(event) {
            var scrollPos = $(document).scrollTop();
            $('#navbar a').each(function() {
                var currLink = $(this);
                var refElement = $(currLink.attr("href"));
                if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() >
                    scrollPos) {
                    $('#navbar ul li a').removeClass("active");
                    currLink.addClass("active");
                } else {
                    currLink.removeClass("active");
                }
            });
        }
    </script>
</body>

</html>
