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
                <li class="list-menu active">
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

                        @foreach (DB::table('profils')->get() as $key => $item)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $item->visi }}</td>
                                <td>{{ $item->misi }}</td>
                                <td>
                                    <button type="button" class="btn btn-primary show-edit-modal mx-3"
                                        data-bs-toggle="modal" data-bs-target="#editVisimisi" data-id="{{ $item->id }}"
                                        data-visi="{{ $item->visi }}" data-misi="{{ $item->misi }}">
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

            <div class="d-flex justify-content-end">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahGuru">
                    Tambah
                </button>

                <!-- Modal -->
                <div class="modal fade" id="tambahGuru" tabindex="-1" aria-labelledby="tambahGuruLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="tambahGuruLabel">Tambah Tenaga Pengajar</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="{{ route('tentang-kami.guru.create') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="jabatan" class="form-label">Jabatan</label>
                                        <input type="text" class="form-control" id="jabatan" aria-describedby="jabatan"
                                            name="jabatan">
                                    </div>
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama Guru</label>
                                        <input type="text" class="form-control" id="nama" aria-describedby="nama"
                                            name="nama">
                                    </div>
                                    <div class="mb-3">
                                        <label for="gelar" class="form-label">Gelar Guru</label>
                                        <input type="text" class="form-control" id="gelar" aria-describedby="gelar"
                                            name="gelar">
                                    </div>
                                </div>
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
                <table id="guruTable" class="tables" style="width:100%">
                    <thead>
                        <tr>
                            <th style="width: 5%">#</th>
                            <th style="width: 30%">Jabatan</th>
                            <th style="width: 30%">Nama Guru</th>
                            <th style="width: 30%">Gelar</th>
                            <th style="width: 5%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (DB::table('teachers')->get() as $key => $item)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $item->jabatan }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->gelar }}</td>
                                <td>
                                    <button type="button" class="btn btn-primary show-edit-modal-guru mx-1"
                                        data-bs-toggle="modal" data-bs-target="#editGuru" data-id="{{ $item->id }}"
                                        data-jabatan="{{ $item->jabatan }}" data-nama="{{ $item->nama }}"
                                        data-gelar="{{ $item->gelar }}">
                                        Edit
                                    </button>
                                    <a class="btn btn-danger deleteee mx-1"
                                        href="{{ route('tentang-kami.guru.delete', ['id' => $item->id]) }}">Hapus<a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>

        <div class="tab-pane fade show" id="kegiatanTab" role="tabpanel" aria-labelledby="kegiatan-tab">

            <div class="wrapperTable table-responsive">
                <table id="kegiatanTable" class="tables" style="width:100%">
                    <thead>
                        <tr>
                            <th style="width: 10%">#</th>
                            <th style="width: 80%">Sejarah</th>
                            <th style="width: 10%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (DB::table('profils')->get() as $key => $item)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $item->sejarah }}</td>
                                <td>
                                    <button type="button" class="btn btn-primary show-edit-modal-sejarah"
                                        data-bs-toggle="modal" data-bs-target="#editSejarah" data-id="{{ $item->id }}"
                                        data-sejarah="{{ $item->sejarah }}">
                                        Edit
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Edit VM --}}
    <div class="modal fade" id="editVisimisi" tabindex="-1" aria-labelledby="editVisimisiLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" id="modal-editVisimisi">
                <div class="modal-header">
                    <h5 class="modal-title" id="editVisimisiLabel">Edit Visi & Misi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form action="{!! url('management/tentang-kami/visimisi/edit') !!}" method="post">
                        <input type="hidden" id="visi-misi-id" name="id">
                        @csrf
                        <label for="visi">Visi</label>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Visi" id="visi" style="height: 100px"
                                name="visi"></textarea>
                        </div>
                        <label for="misi">Misi</label>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Misi" id="misi" style="height: 100px"
                                name="misi"></textarea>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Edit Sejarah --}}
    <div class="modal fade" id="editSejarah" tabindex="-1" aria-labelledby="editSejarahLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" id="modal-editSejarah">
                <div class="modal-header">
                    <h5 class="modal-title" id="editSejarahLabel">Edit Sejarah</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form action="{!! url('management/tentang-kami/sejarah/edit') !!}" method="post">
                        <input type="hidden" id="sejarah-id" name="id">
                        @csrf
                        <label for="sejarah">Sejarah</label>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="sejarah" id="sejarah" style="height: 100px"
                                name="sejarah"></textarea>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Edit Guru --}}
    <div class="modal fade" id="editGuru" tabindex="-1" aria-labelledby="editGuruLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" id="modal-editGuru">
                <div class="modal-header">
                    <h5 class="modal-title" id="editGuruLabel">Edit Jabatan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form action="{!! url('management/tentang-kami/guru/edit') !!}" method="post">
                        <input type="hidden" id="guru-id" name="id">
                        @csrf
                        <div class="mb-3">
                            <label for="jabatan" class="form-label">Jabatan</label>
                            <input type="text" class="form-control" id="jabatan" aria-describedby="jabatan"
                                name="jabatan" value="">
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Guru</label>
                            <input type="text" class="form-control" id="nama" aria-describedby="nama" name="nama"
                                value="">
                        </div>
                        <div class="mb-3">
                            <label for="gelar" class="form-label">Gelar Guru</label>
                            <input type="text" class="form-control" id="gelar" aria-describedby="gelar" name="gelar"
                                value="">
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
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
            $('#guruTable').DataTable({
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
        $('.show-edit-modal').each(function() {
            $(this).click(function() {
                $('#visi').val($(this).data('visi'));
                $('#misi').val($(this).data('misi'));
                $('#visi-misi-id').val($(this).data('id'));
            });
        });

        $('.show-edit-modal-sejarah').each(function() {
            $(this).click(function() {
                $('#sejarah').val($(this).data('sejarah'));
                $('#sejarah-id').val($(this).data('id'));
            });
        });

        $('.show-edit-modal-guru').each(function() {
            $(this).click(function() {
                $('#jabatan').val($(this).data('jabatan'));
                $('#nama').val($(this).data('nama'));
                $('#gelar').val($(this).data('gelar'));
                $('#guru-id').val($(this).data('id'));
            });
        });
    </script>
@endsection
