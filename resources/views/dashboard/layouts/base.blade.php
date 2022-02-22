<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Dashboard</title>

    <!--Bootstrap Assets-->
    <link rel="stylesheet" href="{{ url('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/vendor/bootstrap/icons-1.7.2/font/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">

    <!--CSS Component For Layouting-->
    <link rel="stylesheet" href="{{ url('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/preloader.css') }}">

    <!--Styling Index-->
    <link rel="stylesheet" href="{{ url('assets/css/index.css') }}">


    @yield('css')
</head>

<body>
    <div class="wrapperPreloader">
        <div id="loader"></div>
    </div>
    <div id="app">
        @yield('sidebar')

        <div id="main">
            <div class="headMain">
                <div class="brand-section">
                    <div class="iconBrand">
                        <img src="{{ url('assets/img/plantsasriLogo.png') }}" alt="">
                    </div>
                    <div class="sidebarButton">
                        <img src="{{ url('assets/img/menuButton.svg') }}" alt="" class="menuButton">
                    </div>
                </div>

                <!-- nav-header -->
                <div class="user-action">
                    <div class="dropdown notification">
                        <button class="dropdown-toggle notification-toggle" type="button" id="notificationButton"
                            data-bs-toggle="dropdown">
                            <img src="{{ url('assets/img/notificationBell.svg') }}" alt="">
                        </button>

                        <ul class="dropdown-menu notificationList" aria-labelledby="notificationButton">
                            <li class="dropdown-item notification-item">
                                <div class="icon">
                                    <ion-icon name="mail"></ion-icon>
                                </div>
                                <div class="wraperMessage">
                                    <p class="label">Selamat Datang</p>
                                    <p class="message">Selamat datang! Kami merasa terhormat untuk menerima Anda.
                                    </p>
                                    </p>
                                </div>
                            </li>

                        </ul>

                        <div class="notificationNumber">
                            <p class="numberAllNotification">1</p>
                        </div>
                    </div>
                    <div class="logoutAction">
                        <div class="logoutAction">
                            <form action="/logout" method="post" onsubmit="return confirm('ingin logout')">
                                @csrf
                                <button type="submit" class="me-1 border-0 bg-transparent d-flex align-item-center">
                                    <div class="delete-confirm d-flex align-item-center">
                                        <span class="mx-1">Logout</span>
                                        <img src="{{ url('assets/img/powerIcon.svg') }}" alt="">
                                    </div>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <div class="contentMain">
                @yield('content')

            </div>
        </div>
    </div>


    <!--Vendor-->
    <!--Jquery-->
    <script src="{{ url('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('assets/vendor/knob.bundle.js') }}"></script>
    <!--Bootstrap JS-->
    <script src="{{ url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!--Ion Icon-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="{{ url('assets/vendor/jvectormap.bundle.js') }}"></script>
    <!--Datatable By Bootstrap-->
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
    <!--Chart Js-->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <!--App JS-->
    <script src="{{ url('assets/js/app.js') }}"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    @yield('js')

</body>

</html>
