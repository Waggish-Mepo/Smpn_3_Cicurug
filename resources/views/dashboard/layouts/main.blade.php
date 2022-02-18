<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Dashboard</title>

    <!--Bootstrap Assets-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/bootstrap/icons-1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">

    <!--CSS Component For Layouting-->
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/preloader.css">

    <!--Styling Index-->
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <div class="wrapperPreloader">
        <div id="loader"></div>
    </div>
    <div id="app">
        <div id="sidebarMain">
            <!-- sidebar -->
            @include('dashboard.layouts.sidebar')
        </div>

        <div id="main">
            <div class="headMain">
                <div class="brand-section">
                    <div class="iconBrand">
                        <img src="img/plantsasriLogo.png" alt="">
                    </div>
                    <div class="sidebarButton">
                        <img src="img/menuButton.svg" alt="" class="menuButton">
                    </div>
                </div>

                <!-- nav-header -->
                @include('dashboard.layouts.header')

            </div>
            <div class="contentMain">
                <h2 class="pageNameContent">Dashboard</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">SMPN 3 CICURUG</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>

            </div>
        </div>
    </div>


    <!--Vendor-->
    <!--Jquery-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/knob.bundle.js"></script>
    <!--Bootstrap JS-->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!--Ion Icon-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="vendor/jvectormap.bundle.js"></script>
    <!--Datatable By Bootstrap-->
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
    <!--Chart Js-->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <!--App JS-->
    <script src="js/app.js"></script>

    <script>
        const labels = [
            'Anggrek',
            'Clarinervium',
            'Amydrium',
        ];

        const data = {
            labels: labels,
            datasets: [{
                label: 'My First dataset',
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255 , 99 ,0)',
                    'rgb(255 , 99 ,200)',

                ],
                borderColor: 'rgb(2555, 255, 255)',
                data: [10, 10, 5],

            }]
        };

        const config = {
            type: 'pie',
            data: data,
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom',
                    },
                }
            }
        };


        const myChart = new Chart(
            document.getElementById('mostPopularPlant'),
            config
        );
    </script>

    <script>
        $(document).ready(function() {
            $('#lasRequest').DataTable({
                "info": false,
                "bSort": false,
            });
        });
    </script>

    <script>
        $(function() {
            if ($('#world-map-markers').length > 0) {

                $('#world-map-markers').vectorMap({
                    map: 'world_mill_en',
                    backgroundColor: 'transparent',
                    borderColor: '#fff',
                    borderOpacity: 0.25,
                    borderWidth: 0,
                    color: '#e6e6e6',
                    regionStyle: {
                        initial: {
                            fill: '#6c757d'
                        }
                    },
                    markerStyle: {
                        initial: {
                            r: 5,
                            'fill': '#fff',
                            'fill-opacity': 1,
                            'stroke': '#000',
                            'stroke-width': 1,
                            'stroke-opacity': 0.4
                        },
                    },

                    markers: [{
                        latLng: [21.00, 78.00],
                        name: 'INDIA : 350'

                    }, {
                        latLng: [-33.00, 151.00],
                        name: 'Australia : 250'

                    }, {
                        latLng: [36.77, -119.41],
                        name: 'USA : 250'

                    }, {
                        latLng: [55.37, -3.41],
                        name: 'UK   : 250'

                    }, {
                        latLng: [25.20, 55.27],
                        name: 'UAE : 250'

                    }, {
                        latLng: [35.65, 139.83],
                        name: 'JP : 37'

                    }, {
                        latLng: [-23.53, -46.62],
                        name: 'BR : 162'

                    }, {
                        latLng: [50.43, 30.51],
                        name: 'UA : 129'

                    }],

                    series: {
                        regions: [{
                            values: {
                                "US": '#ffec94',
                                "SA": '#ffaeae',
                                "AU": '#64e2d4',
                                "IN": '#b0e57c',
                                "GB": '#b4d8e7',
                                "JP": '#56baec',
                                "BR": '#fe8282',
                                "UA": '#e2ffcf',
                            },
                            attribute: 'fill'
                        }]
                    },

                    hoverOpacity: null,
                    normalizeFunction: 'linear',
                    zoomOnScroll: false,
                    scaleColors: ['#000000', '#000000'],
                    selectedColor: '#000000',
                    selectedRegions: [],
                    enableZoom: false,
                    hoverColor: '#fff',
                });
            }
        });
    </script>

</body>

</html>
