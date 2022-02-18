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
                    <a class="nav-link active"href="{{ url('landingpage.html') }}">Beranda</a>
                    <a class="nav-link" href="{{ url('berita.html') }}">Berita</a>
                    <a class="nav-link" href="#">Ekstrakurikuler</a>
                    <a class="nav-link" href="#aboutPlantsasri">Prestasi</a>
                    <a class="nav-link" href="#contact">Tentang Kami </a>
                  </div>

                  <div class="getStarted">
                      <div class="polygon">
                          <div class="clipath"></div>
                      </div>
                      <div class="buttonWrapper">
                        <a href="#" class="nav-link">Masuk</a>
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
                url('{{ $banner }}');">
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

                <h1 class="text-center intro">Sambutan Guru SMPN 3 Cicurug kepada Siswa Baru 2022</h1>

                <!--About-->
                <div class="aboutSmpn" id="aboutSmpn">
                    <div class="imagesWrapper">
                        <img src="{{ url('assets/img/about.png') }}" alt="">
                    </div>
                    <div class="about">
                        <p>Untuk meningkatkan kualitas sumber daya manusia, Kementerian Pendidikan, Kebudayaan dan Ristek (KemendikbudRistek) mencanangkan reformasi sistem pendidikan Indonesia melalui kebijakan Merdeka Belajar. Hal ini ditegaskan kembali Menteri Pendidikan dan Kebudayaan (Mendikbud).</p>
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
                                <a href="" class="col-12 col-md-4 news">
                                    <center>
                                        <div class="imgNews">
                                            <img src="{{ url('assets/img/95KAPOLSEK_APRESIASI_SISWA 1 (1).svg') }}" alt="">
                                        </div>
                                        <h5>
                                            Kapolsek Apresiasi Tiga Siswa SMPN 3 Cicurug Kabupaten Sukabumi.
                                        </h5>
                                    </center>
                                </a>
                                <a href="" class="col-12 col-md-4 news">
                                    <center>
                                        <div class="imgNews">
                                            <img src="{{ url('assets/img/75446723_147266949969814_7906375067779465216_n 1.svg') }}" alt="">
                                        </div>
                                        <h5>
                                            Pertemuan Antar Kelas Siswa SMPN 3 Cicurug.
                                        </h5>
                                    </center>
                                </a>
                                <a href="" class="col-12 col-md-4 news">
                                    <center>
                                        <div class="imgNews">
                                            <img src="{{ url('assets/img/73361273_147266406636535_6211017966989869056_n 1.svg') }}" alt="">
                                        </div>
                                        <h5>
                                            Upacara Bendera SMPN 3 Cicurug Memperingati HUT RI Ke-72.
                                        </h5>
                                    </center>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <center>
                <div class="moreNews">
                    <a href="" class="btnMore">Selengkapnya</a>
                </div>
                </center>
                <!-- End News -->
            </div>
        </div>

                <!-- Superiority -->



        <div class="mainContent">
            <div class="container">

                <!-- Visi & Misi -->
                <div class="wrapperVm">
                    <div class="headVm">
                        <h1>Visi & Misi</h1>
                        <p> SMPN 3 CICURUG</p>
                    </div>
                    <div class="contentVm">
                        <a class="cardVm visi" href="#">
                            <img src="{{ url('assets/img/school.svg') }}" alt="">

                            <h3>Visi</h3>
                            <p class="small">“Menjadi pusat ilmu pengetahuan dan teknologi yang unggul dan berdaya saing, melalui upaya ...
                            </p>
                            <div class="dimmer"></div>
                            <div class="go-corner" href="#">
                                <div class="go-arrow">
                                    →
                                </div>
                            </div>
                        </a>
                        <a class="cardVm Misi" href="#">
                            <img src="{{ url('assets/img/book 1.svg') }}" alt="">
                            <h3>Misi</h3>
                            <p class="small">Menyediakan akses yang luas dan adil, serta pendidikan yang berkualitas.
                            </p>
                            <div class="dimmer"></div>
                            <div class="go-corner" href="#">
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
                                <div class="country">
                                    <img src="{{ url('assets/img/1.svg') }}" alt="">
                                </div>
                                <div class="country">
                                    <img src="{{ url('assets/img/2.svg') }}" alt="">
                                </div>
                                <div class="country">
                                    <img src="{{ url('assets/img/3.svg') }}" alt="">
                                </div>
                                <div class="country">
                                    <img src="{{ url('assets/img/4.svg') }}" alt="">
                                </div>
                                <div class="country">
                                    <img src="{{ url('assets/img/5.svg') }}" alt="">
                                </div>
                                <div class="country">
                                    <img src="{{ url('assets/img/6.svg') }}" alt="">
                                </div>
                            </div>

                            <div class="lineCountry lineCountry2">
                                <div class="country">
                                    <img src="{{ url('assets/img/6.svg') }}" alt="">
                                </div>
                                <div class="country">
                                    <img src="{{ url('assets/img/5.svg') }}" alt="">
                                </div>
                                <div class="country">
                                    <img src="{{ url('assets/img/4.svg') }}" alt="">
                                </div>
                                <div class="country">
                                    <img src="{{ url('assets/img/3.svg') }}" alt="">
                                </div>
                                <div class="country">
                                    <img src="{{ url('assets/img/2.svg') }}" alt="">
                                </div>
                                <div class="country">
                                    <img src="{{ url('assets/img/1.svg') }}" alt="">
                                </div>
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
                        <p>Smpn 3 Cicurug terakreditasi A, mencetak Alumni yang berkualitas bagi negara, hampir 75% para alumni sukses di masadepannya.</p>
                    </div>

                    <div class="line">
                        <h3>Tautan Links</h3>

                        <div class="linkToPages">
                            <a href="#">Beranda</a>
                            <a href="#">Berita</a>
                            <a href="#">Ekstrakurikuler</a>
                            <a href="#">Prestasi</a>
                            <a href="#">Tentang Kami</a>
                        </div>
                    </div>

                    <div class="line">
                        <h3>Tentang Kami</h3>

                        <div class="linkToPages">
                            <a href="#">Profil Sekolah</a>
                            <a href="#">Visi & Misi</a>
                            <a href="#">Sejarah</a>
                        </div>
                    </div>

                    <div class="line">
                        <h3>Kontak</h3>
                        <a href="https://wa.me/085156293673"><h2 class="phone">+6285156293673</h2></a>
                        <div class="linkToPages">
                            <p class="address" style="margin-bottom: .5rem;">Jl. Cibuntu Satu, Kutajaya, Kec. Cicurug, Kabupaten Sukabumi, Jawa Barat 43359.</p>
                        </div>
                        <div class="socialMedia">
                            <a href="#" class="social">
                                <ion-icon name="logo-facebook"></ion-icon>
                            </a>
                            <a href="#" class="social">
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
        $(document).ready(function () {
            $(".navbar-toggler").click(function(){
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
            arrows :false,
            responsive: [
                {
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
                infinite:false,
                slidesToShow: 2.5,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
            });
            $('.lineCountry2').slick({
                slidesToShow: 2.5,
                infinite:false,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
            });
    </script>

<script>
    $(document).ready(function () {
        $(document).on("scroll", onScroll);

        //smoothscroll
        $('a[href^="#"]').on('click', function (e) {
            e.preventDefault();
            $(document).off("scroll");

            $('a').each(function () {
                $(this).removeClass('active');
            })
            $(this).addClass('active');

            var target = this.hash,
                menu = target;
            $target = $(target);
            $('html, body').stop().animate({
                'scrollTop': $target.offset().top+6
            }, 700, 'swing', function () {
                window.location.hash = target;
                $(document).on("scroll", onScroll);
            });
        });
    });

    function onScroll(event){
        var scrollPos = $(document).scrollTop();
        $('#navbar a').each(function () {
            var currLink = $(this);
            var refElement = $(currLink.attr("href"));
            if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
                $('#navbar ul li a').removeClass("active");
                currLink.addClass("active");
            }
            else{
                currLink.removeClass("active");
            }
        });
    }
</script>
</body>
</html>
