@extends('dashboard.layouts.base')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css"
        integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
@endsection

@section('sidebar')
    <div id="sidebarMain">
        <!-- sidebar -->
        <div class="wrapperSidebar">
            <div class="brandLogo">
                <img src="{{ url('assets/img/smpn 3 cicurug 2.svg') }}" alt="">
            </div>
            <a href="#" class="profile">
                <div class="imagesProfile">
                    <img src="{{ url('assets/img/faces.jpeg') }}" alt="">
                </div>
                <div class="profileUser">
                    <h5 class="labelDay">Morning</h5>
                    <h5 class="nameUser">{{ auth()->user()->name }}</h5>
                </div>
            </a>
            <div class="sidebar-menu-wrapper">
                <li class="listMenuName">
                    <p>Admin Menu</p>
                </li>
                <li class="list-menu ">
                    <div class="icon">
                        <ion-icon name="grid"></ion-icon>
                    </div>
                    <a href="{{ route('dashboard') }}" class="sidebar-menu">Dashboard</a>
                </li>
                <li class="list-menu ">
                    <div class="icon">
                        <ion-icon name="people"></ion-icon>
                    </div>
                    <a href="{{ route('users.index') }}" class="sidebar-menu">Kelola User</a>
                </li>
                <li class="list-menu active">
                    <div class="icon">
                        <ion-icon name="home"></ion-icon>
                    </div>
                    <a href="{{ route('beranda.index') }}" class="sidebar-menu">Kelola Beranda</a>
                </li>
                <li class="list-menu ">
                    <div class="icon">
                        <ion-icon name="newspaper"></ion-icon>
                    </div>
                    <a href="{{ route('berita.index') }}" class="sidebar-menu">Kelola Berita</a>
                </li>
                <li class="list-menu">
                    <div class="icon">
                        <ion-icon name="accessibility"></ion-icon>
                    </div>
                    <a href="{{ route('ekstrakurikuler.index') }}" class="sidebar-menu">Kelola ekstrakurikuler</a>
                </li>
                <li class="list-menu">
                    <div class="icon">
                        <ion-icon name="medal"></ion-icon>
                    </div>
                    <a href="{{ route('prestasi.index') }}" class="sidebar-menu">Kelola Prestasi</a>
                </li>
                <li class="list-menu ">
                    <div class="icon">
                        <ion-icon name="school"></ion-icon>
                    </div>
                    <a href="{{ route('tentang-kami.index') }}" class="sidebar-menu">Kelola Tentang Kami</a>
                </li>
                <li class="list-menu ">
                    <div class="icon">
                        <ion-icon name="call"></ion-icon>
                    </div>
                    <a href="{{ route('contact.index') }}" class="sidebar-menu">Kelola Kontak</a>
                </li>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <style>
        .dropify-wrapper .dropify-message p {
            font-size: 14px;
        }

    </style>

    <h2 class="pageNameContent">Dashboard</h2>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">SMPN 3 CICURUG</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>

    <ul class="nav nav-pills mb-3 tabsMenu" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="new-request-tab" data-bs-toggle="pill" data-bs-target="#newRequestTab"
                type="button" role="tab" aria-controls="newRequestTab" aria-selected="true">Banner</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="list-request-tab" data-bs-toggle="pill" data-bs-target="#listRequestTab"
                type="button" role="tab" aria-controls="listRequestTab" aria-selected="false">Kata Sambutan</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="kegiatan-tab" data-bs-toggle="pill" data-bs-target="#kegiatanTab"
                type="button" role="tab" aria-controls="kegiatanTab" aria-selected="false">Kegiatan</button>
        </li>
    </ul>

    <div class="tab-content" id="pills-tabContent">

        <div class="tab-pane fade show active" id="newRequestTab" role="tabpanel" aria-labelledby="new-request-tab">
            <div class="wrapperTable table-responsive">
                <table id="bannerTable" class="tables" style="width:100%">
                    <thead>
                        <tr>
                            <th style="width: 15%">#</th>
                            <th style="width: 70%">Banner</th>
                            <th style="width: 15%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (DB::table('banners')->get() as $key => $item)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td><img style="max-height: 250px;max-width:250px;min-width:250px;min-height:250px;"
                                        src="{{ url('thumbBanner/' . $item->image) }}" alt=""></td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary me-3" data-bs-toggle="modal"
                                        data-bs-target="#editBanner" data-id="{{ $item->id }}"
                                        data-image="{{ $item->image }}">
                                        Edit
                                    </button>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="tab-pane fade" id="listRequestTab" role="tabpanel" aria-labelledby="list-request-tab">

            <div class="wrapperTable table-responsive">
                <table id="sambutanTable" class="tables" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Content</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (DB::table('sambutan')->get() as $key => $item)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td><img style="max-height: 250px;max-width:250px;min-width:250px;min-height:250px;"
                                        src="{{ url('thumbSambutan/' . $item->image) }}" alt=""></td>

                                <td>{{ $item->title }}</td>
                                <td>{{ $item->content }}</td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#editSambutan" data-id="{{ $item->id }}"
                                        data-title="{{ $item->title }}" data-content="{{ $item->content }}"
                                        data-image="{{ $item->image }}">
                                        Edit
                                    </button>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>

        <div class="tab-pane fade show" id="kegiatanTab" role="tabpanel" aria-labelledby="kegiatan-tab">

            <div class="d-flex justify-content-end">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahKegiatan">
                    Tambah
                </button>

                <!-- Modal -->
                <div class="modal fade" id="tambahKegiatan" tabindex="-1" aria-labelledby="tambahKegiatanLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content container">
                            <div class="modal-header">
                                <h5 class="modal-title" id="tambahKegiatanLabel">Tambah Kegiatan</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="{{ route('beranda.activity.create') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">

                                    <input type="file" name="image" class="dropify" data-max-width="2000" />

                                </div>
                                <p style="font-size:12px; margin-bottom:10px; margin-top:10px">Ukuran Gambar Minimal :
                                    <span style="color:red;font-weight:bold">width:320px</span>
                                    dan Maksimal ukuran file <span style="color:red;font-weight:bold">2mb</span>
                                </p>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="wrapperTable table-responsive">
                <table id="kegiatanTable" class="tables" style="width:100%">
                    <thead>
                        <tr>
                            <th style="width: 15%">#</th>
                            <th style="width: 70%">foto</th>
                            <th style="width: 15%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (DB::table('kegiatans')->get() as $key => $item)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td><img src="{{ url('thumbKegiatan/' . $item->image) }}" alt=""
                                        style="width: 350px;height:250px"></td>
                                <td>

                                    <a class="btn btn-danger deleteee">Hapus</a>

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#editKegiatan" data-id="{{ $item->id }}"
                                        data-image="{{ $item->image }}">
                                        Edit
                                    </button>

                                    <!-- Modal -->

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div class="modal fade" id="editBanner" tabindex="-1" aria-labelledby="editBannerLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" id="modal-editBanner">
                <div class="modal-header">
                    <h5 class="modal-title" id="editBannerLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editSambutan" tabindex="-1" aria-labelledby="editSambutanLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" id="modal-editSambutan">
                <div class="modal-header">
                    <h5 class="modal-title" id="editSambutanLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="editKegiatan" tabindex="-1" aria-labelledby="editKegiatanLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" id="modal-editKegiatan">
                <div class="modal-header">
                    <h5 class="modal-title" id="editKegiatanLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"
        integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('.dropify').dropify();
    </script>
    <script>
        $(document).ready(function() {
            $('#bannerTable').DataTable({
                "info": false,
                "bSort": false,
            });
        });

        $(document).ready(function() {
            $('#sambutanTable').DataTable({
                "info": false,
                "bSort": false,
            });
        });

        $(document).ready(function() {
            $('#kegiatanTable').DataTable({
                "info": false,
                "bSort": false,
            });
        });
    </script>



    <script>
        $('#editBanner').on('shown.bs.modal', function(e) {
            var html = `
        <div id="modal-content" class="modal-content container">
         <div class="modal-header">
                    <h5 class="modal-title" id="tambaheskulLabel">Edit Banner</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            <form action="/management/beranda/banner/edit/${$(e.relatedTarget).data('id')}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="file" name="image" class="dropify" data-max-width="2000"
                data-default-file="/thumbBanner/${$(e.relatedTarget).data('image')}" />
               <p style="font-size:12px; margin-bottom:10px; margin-top:10px">Ukuran Gambar Minimal : <span style="color:red;font-weight:bold">width:1200px</span> dan ukuran file maksimal <span style="color:red;font-weight:bold">2Mb</span></p>
                <br>
                <br>
                <center> <button class="btn btn-success m-3" type="submit">Submit</button>
                </center>

            </form>
        </div>
`;

            $('#modal-editBanner').html(html);
            $('.dropify').dropify();

        });

        $('#editSambutan').on('shown.bs.modal', function(e) {
            var html = `
    <div id="modal-content" class="modal-content container">
        <div class="modal-header">
            <h5 class="modal-title" id="tambaheskulLabel">Edit Sambutan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            <form action="/management/beranda/about/edit/${$(e.relatedTarget).data('id')}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                        <label for="title" class="form-label">title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="isi title " value="${$(e.relatedTarget).data('title')}">
                    </div>

                    <div class="mb-3">
                        <label for="content" class="form-label">content</label>
                        <input type="text" class="form-control" id="content" name="content" placeholder="isi content " value="${$(e.relatedTarget).data('content')}">
                    </div>

                <input type="file" name="image" class="dropify" data-max-width="2000"
                data-default-file="/thumbSambutan/${$(e.relatedTarget).data('image')}" />
                     <p style="font-size:12px; margin-bottom:10px; margin-top:10px">Ukuran Gambar Minimal : <span style="color:red;font-weight:bold">width:350px</span> dan ukuran file maksimal <span style="color:red;font-weight:bold">2Mb</span></p>
                <br>
                <br>
                <center> <button class="btn btn-success m-3" type="submit">Submit</button>
                </center>

            </form>
        </div>
`;

            $('#modal-editSambutan').html(html);
            $('.dropify').dropify();

        });

        $('#editKegiatan').on('shown.bs.modal', function(e) {
            var html = `
    <div id="modal-content" class="modal-content">
        <div class="modal-header">
                    <h5 class="modal-title" id="tambaheskulLabel">Edit Kegiatan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            <form action="/management/beranda/activity/edit/${$(e.relatedTarget).data('id')}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="file" name="image" class="dropify" data-max-width="2000"
                data-default-file="/thumbKegiatan/${$(e.relatedTarget).data('image')}" />
                <p style="font-size:12px; margin-bottom:10px; margin-top:10px">Ukuran Gambar Minimal : <span style="color:red;font-weight:bold">width:320px</span></p>
                <br>
                <br>
                <center> <button class="btn btn-success" type="submit">Submit</button>
                </center>

            </form>
        </div>
`;

            $('#modal-editKegiatan').html(html);
            $('.dropify').dropify();

        });
    </script>

    <script>
        $('.deleteee').click(function() {
            swal({
                    title: "Yakin?",
                    text: "Tekan ok untuk hapus, cancel untuk batal!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "{{ route('beranda.activity.delete', ['id' => $item->id]) }}"
                        swal("Data Berhasil Dihapus", {
                            icon: "success",
                        });
                    } else {
                        swal("Data Batal Dihapus");
                    }
                });
        })
    </script>
@endsection
