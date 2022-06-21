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
    <link rel="stylesheet" href="{{ url('assets/css/berita.css') }}">


    <style>
        @media screen and (max-width: 767px) {
            .aboutSmpn {
                flex-direction: column;
            }
        }


        /*Component Table*/
        .wrapperTable {
            padding: 2rem 0;
        }

        .wrapperTable .pagination {
            margin-top: 20rem;
        }

        .wrapperTable .pagination .paginate_button.active .page-link {
            background: #2DB878 !important;
            color: #fff;
            border-radius: 6px;
        }

        .wrapperTable .pagination .paginate_button .page-link {
            border: none;
            background: transparent !important;
            color: #535353;
            padding: .2rem .8rem;
            font-weight: 300;
        }

        .wrapperTable .tables {
            border-spacing: 0 10px !important;
            width: 100%;
            max-width: 100%;
        }

        .wrapperTable .tables thead tr {
            box-shadow: 0px 36px 80px rgba(0, 0, 0, 0.02), 0px 4.50776px 10.0172px rgba(0, 0, 0, 0.04);
        }

        .wrapperTable .tables thead tr th {
            color: #535353;
            font-weight: 300;
            vertical-align: middle;
            padding: .8rem;
            background-color: #fff;
        }

        .wrapperTable .tables thead tr th:first-child {
            -moz-border-radius: 10px 0px 0px 10px !important;
            -webkit-border-radius: 10px 0px 0px 10px !important;
        }

        .wrapperTable .tables thead tr th:last-child {
            -webkit-border-radius: 0px 10px 10px 0px !important;
            -moz-border-radius: 0px 10px 10px 0px !important;
        }

        .wrapperTable .tables tbody tr:last-child {
            box-shadow: 0px 36px 80px rgba(0, 0, 0, 0.02), 0px 4.50776px 10.0172px rgba(0, 0, 0, 0.04);
        }

        .wrapperTable .tables tbody tr td {
            color: #535353;
            font-weight: 400;
            vertical-align: middle;
            height: 100%;
            padding: .8rem;
            background-color: #fff;
            font-size: 16px;
        }

        .wrapperTable .tables tbody tr td:first-child {
            -moz-border-radius: 10px 0px 0px 10px !important;
            -webkit-border-radius: 10px 0px 0px 10px !important;
        }

        .wrapperTable .tables tbody tr td:last-child {
            -webkit-border-radius: 0px 10px 10px 0px !important;
            -moz-border-radius: 0px 10px 10px 0px !important;
        }

        .wrapperTable .tables tbody tr td .code .numberCode {
            color: #2DB878;
            text-decoration: none;
            transition: .3s;
        }

        .wrapperTable .tables tbody tr td .code .numberCode:hover {
            color: #259963;
            transition: .3s;
        }

        .wrapperTable .tables tbody tr td .detailName {
            display: flex;
            flex-direction: column;
        }

        .wrapperTable .tables tbody tr td .detailName .name {
            font-weight: 600;
        }

        .wrapperTable .tables tbody tr td .buttonAction {
            display: flex;
        }

        .wrapperTable .tables tbody tr td .buttonAction .buttons {
            background: transparent;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: .5rem;
            border: none;
            border-radius: 6px;
            transition: .2s;
        }

        .wrapperTable .tables tbody tr td .buttonAction .success {
            margin-right: .5rem;
            background: #2DB878;
        }

        .wrapperTable .tables tbody tr td .buttonAction .success:hover {
            background: #259963;
            transition: .2s ease-in-out;
        }

        .wrapperTable .tables tbody tr td .buttonAction .danger {
            background: #DC3545;
        }

        .wrapperTable .tables tbody tr td .buttonAction .danger:hover {
            background: #b52b39;
            transition: .2s ease-in-out;
        }

        .wrapperTable .tables tbody tr td .address {
            display: block;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
            max-width: 250px;
        }

        .wrapperTable .tables tbody tr td .status {
            border-radius: 5px;
            padding: .5rem .8rem;
            width: fit-content;
            color: #fff;
            font-weight: 500;
            text-align: center;
            font-size: 12px;
        }

        .wrapperTable .tables tbody tr td .status.status-warning {
            background-color: #FFC107;
        }

        .wrapperTable .tables tbody tr td .status.status-primary {
            background-color: #2DB878;
        }

        .wrapperTable .tables tbody tr td .status.status-danger {
            background-color: #DC3545;
        }

        @media screen and (max-width: 768px) {
            .dataTables_length {
                margin-bottom: .5rem;
                font-size: 12px;
            }

            .dataTables_wrapper .dataTables_filter {
                font-size: 12px;
            }

            .form-select,
            .form-control {
                font-size: 12px;
            }

            .wrapperTable .tables thead tr th {
                font-size: 14px;
            }

            .wrapperTable .tables tbody tr td {
                font-size: 14px;
            }
        }

    </style>
    <style>
        @media screen and (min-width: 992px) {
            .navbar .container .navbar-toggler {
                display: none;
            }

            .navbar .container .navbar-collapse .navbar-nav .menu .nav-link {
                padding: 0;
                margin: .5rem 1rem;
                position: relative;
            }

            .navbar .container .navbar-collapse .navbar-nav .menu .nav-link.active {
                color: #3658A2;
                font-weight: 600;
            }

            .navbar .container .navbar-collapse .navbar-nav .menu .nav-link::after {
                content: '';
                display: block;
                width: 0;
                height: 2px;
                position: absolute;
                bottom: -5px;
                transform: translateX(50%);
                background-color: #3658A2;
                transition: .3s ease;
            }

            .navbar .container .navbar-collapse .navbar-nav .menu .nav-link:hover::after {
                width: 50%;
                transition: .3s ease;
            }

            .navbar .container .navbar-collapse .navbar-nav .getStarted {
                display: flex;
            }

            .navbar .container .navbar-collapse .navbar-nav .getStarted .polygon {
                position: relative;
            }

            .navbar .container .navbar-collapse .navbar-nav .getStarted .polygon .clipath {
                display: block;
                background-color: #fff;
                height: 100%;
                position: absolute;
                width: 130px;
                top: -29px;
                overflow: hidden;
                left: -65px;
                z-index: 1000;
                height: 238%;
                clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
            }

            .navbar .container .navbar-collapse .navbar-nav .getStarted::after {
                content: '';
                display: block;
                background-color: #3658A2;
                height: 100%;
                position: absolute;
                top: 0;
                width: 100%;
            }

            .navbar .container .navbar-collapse .navbar-nav .getStarted .buttonWrapper {
                position: relative;
                z-index: 20000;
                padding-left: 7rem;
            }

            .navbar .container .navbar-collapse .navbar-nav .getStarted .buttonWrapper .nav-link {
                background-color: #fff;
                border-radius: 6px;
                color: #3658A2;
                font-weight: 500;
                padding: .5rem 1.4rem;
            }

            .navbar .container .navbar-collapse .navbar-nav .getStarted .buttonWrapper .nav-link:hover {
                background-color: #f2f2f2;
            }
        }

    </style>

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
                            <a class="nav-link" href="{{ url('/') }}">Beranda</a>
                            <a class="nav-link" href="{{ url('berita') }}">Berita</a>
                            <a class="nav-link" href="{{ url('ekstrakurikuler') }}">Ekstrakurikuler</a>
                            <a class="nav-link active" href="{{ url('prestasi') }}">Prestasi</a>
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

        <div class="mainContent">
            <h2 style="color:#3658A2;text-align: center;padding:20px;margin-bottom:10px;margin-top:20px;font-size:52px">
                Prestasi Smpn
                3 Cicurug</h2>
            <div class="container">
                @foreach (DB::table('prestasis')->get() as $key => $item)
                    @if ($key % 2 == 0)
                        <div class="aboutSmpn d-flex mt-5" id="aboutSmpn">
                            <div class="imagesWrapper">
                                <img src="{{ url('thumbEskul/' . $item->image) }}" alt="">
                            </div>
                            <div class="about ms-0 ms-md-3 mt-2 mt-md-0">
                                <h4>{{ $item->title }}</h4>
                                <p>{{ $item->body }}</p>
                            </div>

                        </div>

                        @if (!is_null(
                            DB::table('ket_prestasis')->where('prestasi_id', $item->id)->first(),
                        ))
                            <div class="wrapperTable table-responsive">
                                <table id="kegiatanTable" class="tables" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Jenis kegiatan</th>
                                            <th scope="col">Tempat kegiatan</th>
                                            <th scope="col">Juara</th>
                                            <th scope="col">Tahun</th>
                                            <th scope="col">Tingkat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach (DB::table('ket_prestasis')->where('prestasi_id', $item->id)->get()
    as $loop => $ket)
                                            <tr style="margin: 20px;padding:20px;">
                                                <td style="width: 5%">{{ $loop->iteration }}</td>
                                                <td style="width: 20%">{{ $ket->nama }}</td>
                                                <td style="width: 20%">{{ $ket->jenis_kegiatan }}</td>
                                                <td style="width: 25%">{{ $ket->tempat_kegiatan }}</td>
                                                <td style="width: 20%">{{ $ket->juara }}</td>
                                                <td style="width: 20%">{{ $ket->tahun }}</td>
                                                <td style="width: 25%">{!! $ket->tingkat !!}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {{-- Table --}}
                        @endif
                    @else
                        <div class="aboutSmpn d-flex mt-5" id="aboutSmpn">
                            <div class="about me-0 me-md-3 mt-2 mt-md-0">
                                <h4>{{ $item->title }}</h4>
                                <p>{{ $item->body }}</p>
                            </div>
                            <div class="imagesWrapper">
                                <img src="{{ url('thumbEskul/' . $item->image) }}" alt="">
                            </div>
                        </div>

                        @if (!is_null(
                            DB::table('ket_prestasis')->where('prestasi_id', $item->id)->first(),
                        ))
                            {{-- Table --}}
                            <div class="container mt-3 mb-5">
                                <div class="row">
                                    <table id="beritaTable" class="table table-hover" style=" width:100%">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Jenis kegiatan</th>
                                                <th scope="col">Tempat kegiatan</th>
                                                <th scope="col">Juara</th>
                                                <th scope="col">Tahun</th>
                                                <th scope="col">Tingkat</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach (DB::table('ket_prestasis')->where('prestasi_id', $item->id)->get()
    as $loop => $ket)
                                                <tr>
                                                    <td style="width: 5%">{{ $loop->iteration }}</td>
                                                    <td style="width: 20%">{{ $ket->nama }}</td>
                                                    <td style="width: 20%">{{ $ket->jenis_kegiatan }}</td>
                                                    <td style="width: 25%">{{ $ket->tempat_kegiatan }}</td>
                                                    <td style="width: 20%">{{ $ket->juara }}</td>
                                                    <td style="width: 20%">{{ $ket->tahun }}</td>
                                                    <td style="width: 25%">{!! $ket->tingkat !!}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        @endif
                    @endif

                @endforeach
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
                        <a href="https://wa.me/085156293673">
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
    <script src="./assets/vendor/jquery/jquery.min.js"></script>
    <!--Bootstrap JS-->
    <script src="./assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!--Ion Icon-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!--Slick Js-->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="./assets/vendor/slick/slick.min.js"></script>
    <script src="./assets/vendors/owlcarousel/owl.carousel.min.js"></script>


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
