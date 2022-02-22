@extends('dashboard.layouts.base')

@section('css')

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
                <h5 class="nameUser">Louis Milla</h5>
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
            <li class="list-menu ">
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
            <li class="list-menu ">
                <div class="icon">
                    <ion-icon name="accessibility"></ion-icon>
                </div>
                <a href="{{ route('ekstrakurikuler.index') }}" class="sidebar-menu">Kelola Ekstrakurikuler</a>
            </li>
            <li class="list-menu ">
                <div class="icon">
                    <ion-icon name="medal"></ion-icon>
                </div>
                <a href="{{ route('prestasi.index') }}" class="sidebar-menu">Kelola Prestasi</a>
            </li>
            <li class="list-menu active">
                <div class="icon">
                    <ion-icon name="school"></ion-icon>
                </div>
                <a href="{{ route('tentang-kami.index') }}" class="sidebar-menu">Kelola Tentang Kami</a>
            </li>
        </div>
    </div>
</div>
@endsection

@section('content')

    <h2 class="pageNameContent">Kelola Tentang Kami</h2>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">SMPN 3 CICURUG</a></li>
        <li class="breadcrumb-item active">Tentang Kami</li>
    </ol>

    <ul class="nav nav-pills mb-3 tabsMenu" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="new-request-tab" data-bs-toggle="pill" data-bs-target="#newRequestTab"
                type="button" role="tab" aria-controls="newRequestTab" aria-selected="true">Visi & Misi</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="list-request-tab" data-bs-toggle="pill" data-bs-target="#listRequestTab"
                type="button" role="tab" aria-controls="listRequestTab" aria-selected="false">Tenaga Pengajar</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="kegiatan-tab" data-bs-toggle="pill" data-bs-target="#kegiatanTab"
                type="button" role="tab" aria-controls="kegiatanTab" aria-selected="false">Sejarah</button>
        </li>
    </ul>

    <div class="tab-content" id="pills-tabContent">

        <div class="tab-pane fade show active" id="newRequestTab" role="tabpanel" aria-labelledby="new-request-tab">
            <div class="wrapperTable table-responsive">
                <table id="VmTable" class="tables" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Visi</th>
                            <th>Misi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos quisquam laboriosam harum placeat. Nisi distinctio, commodi enim officia minima sapiente. Quia nemo aspernatur dolore hic quis minus magnam dolorum facere.</p>
                                </td>

                                <td>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga ipsa voluptate officiis consectetur cumque? Laborum commodi quaerat minus deserunt neque repellat fugiat est iure aliquid? Dolores quaerat numquam nemo tempora?</p>
                                </td>

                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#editVisimisi">
                                        Edit
                                    </button>
                                </td>
                            </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editVisimisi" tabindex="-1" aria-labelledby="editVisimisiLabel" aria-hidden="true">
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
            $('#VmTable').DataTable({
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

@endsection
