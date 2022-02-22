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
    <link rel="stylesheet" href="{{ url('assets/css/tentangKami.css') }}">

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
                  <img src="{{ url('assets/img/Smpn 3 Cicurug.png') }}" alt="">
              </a>

              <button class="navbar-toggler" type="button">
                <span class="navbar-toggler-icon"></span>
              </button>


              <div class="navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <div class="menu">
                        <a class="nav-link " href="{{ url('/') }}">Beranda</a>
                        <a class="nav-link" href="{{ url('berita') }}">Berita</a>
                        <a class="nav-link" href="{{ url('ekstrakurikuler') }}">Ekstrakurikuler</a>
                        <a class="nav-link" href="#aboutPlantsasri">Prestasi</a>
                        <a class="nav-link active" href="{{ url('tentangKami') }}">Tentang Kami </a>
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
            <div class="header">
                <h1 class="page-heading">
                  <span class="page-heading-primary">
                      <img src="{{ url('assets/img/smpn3.png') }}" alt="">
                  </span>
                  <span class="page-heading-secondary">SMPN 3 CICURUG</span>
                </h1>
            </div>
        </div>
        <!--End Banner-->

        <ul class="nav nav-tabs menuTentang d-flex justify-content-center my-3" id="myTab" role="tablist">
            <li class="nav-item px-3 px-lg-5" role="presentation">
              <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Sambutan Guru</button>
            </li>
            <li class="nav-item px-3 px-lg-5" role="presentation">
              <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Visi & Misi</button>
            </li>
            <li class="nav-item px-3 px-lg-5" role="presentation">
              <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Tenaga Pengajar</button>
            </li>
            <li class="nav-item px-3 px-lg-5" role="presentation">
                <button class="nav-link" id="sejarah-tab" data-bs-toggle="tab" data-bs-target="#sejarah" type="button" role="tab" aria-controls="sejarah" aria-selected="false">Sejarah</button>
              </li>
          </ul>

        <div class="mainContent">
            <div class="container mt-5">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h1 class="text-center intro">Sambutan Guru SMPN 3 Cicurug kepada Siswa Baru 2022</h1>

                        <!--About-->
                        <div class="aboutSmpn d-flex" id="aboutSmpn">
                            <div class="imagesWrapper">
                                <img src="{{ url('assets/img/about.png') }}" alt="">
                            </div>
                            <div class="about">
                                <p>Untuk meningkatkan kualitas sumber daya manusia, Kementerian Pendidikan, Kebudayaan dan Ristek (KemendikbudRistek) mencanangkan reformasi sistem pendidikan Indonesia melalui kebijakan Merdeka Belajar. Hal ini ditegaskan kembali Menteri Pendidikan dan Kebudayaan (Mendikbud).</p>
                            </div>
                        </div>
                        <!-- End About -->
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="text-center col-lg-6 mx-auto">
                            <h3 class="pb-3">
                                Visi
                            </h3>
                            <p class="pb-5">
                                <i>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione molestias in id, modi rem at tempora vero suscipit. Nostrum accusantium eum eius mollitia enim doloremque maiores quia corporis consequuntur qui.</i>
                            </p>
                            <div>
                                <h3 class="pb-3">
                                    Misi
                                </h3>
                                <ol class="">
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, laboriosam.</li>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, laboriosam.</li>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, laboriosam.</li>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, laboriosam.</li>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, laboriosam.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

                        <div class="container pt-4">
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <img src="{{ url('assets/img/about.png') }}" style="max-width: 400px; max-height: 250px;">
                                </div>
                                <div class="col-12 col-md-8">
                                  <h3>Pendidik dan Tenaga Kependidikan</h3>
                                  <hr style="height: 2px; background-color: black;">
                                  <ol type="1">
                                      <li class="pb-2"><b>Koordinator Bimbingan dan Konseling</b> : Melly Setyo Budi Astuti, S.Pd</li>
                                      <li class="pb-2"><b>Koordinator Bimbingan dan Konseling</b> : Melly Setyo Budi Astuti, S.Pd</li>
                                      <li class="pb-2"><b>Koordinator Bimbingan dan Konseling</b> : Melly Setyo Budi Astuti, S.Pd</li>
                                      <li class="pb-2"><b>Koordinator Bimbingan dan Konseling</b> : Melly Setyo Budi Astuti, S.Pd</li>
                                      <li class="pb-2"><b>Koordinator Bimbingan dan Konseling</b> : Melly Setyo Budi Astuti, S.Pd</li>
                                      <li class="pb-2"><b>Koordinator Bimbingan dan Konseling</b> : Melly Setyo Budi Astuti, S.Pd</li>
                                      <li class="pb-2"><b>Koordinator Bimbingan dan Konseling</b> : Melly Setyo Budi Astuti, S.Pd</li>
                                      <li class="pb-2"><b>Koordinator Bimbingan dan Konseling</b> : Melly Setyo Budi Astuti, S.Pd</li>
                                      <li class="pb-2"><b>Koordinator Bimbingan dan Konseling</b> : Melly Setyo Budi Astuti, S.Pd</li>
                                      <li class="pb-2"><b>Koordinator Bimbingan dan Konseling</b> : Melly Setyo Budi Astuti, S.Pd</li>
                                  </ol>
                                </div>
                              </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="sejarah" role="tabpanel" aria-labelledby="sejarah-tab">
                        <h1 class="text-center intro">Sejarah SMPN 3 Cicurug</h1>
                        <div class="d-flex">
                            <div class="stack">
                                <img src="{{ url('assets/img/download (2) 1.svg') }}" width="250" height="180">
                               <span>SMPN 3 CICURUG</span>
                            </div>
                            <div class="pt-5">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo laudantium eius fugiat rem saepe libero placeat sed aut facere, at nihil. Ab officiis placeat vel in voluptatum earum blanditiis totam?</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo laudantium eius fugiat rem saepe libero placeat sed aut facere, at nihil. Ab officiis placeat vel in voluptatum earum blanditiis totam?</p>
                            </div>
                        </div>
                    </div>
                </div>
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
