{{-- @foreach ($prestasis as $item)
    {{ $item->prestasi }}
@endforeach --}}


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
                <li class="list-menu active">
                    <div class="icon">
                        <ion-icon name="medal"></ion-icon>
                    </div>
                    <a href="{{ route('prestasi.index') }}" class="sidebar-menu">Kelola Prestasi</a>
                </li>

                <li class="list-menu">
                    <div class="icon">
                        <ion-icon name="school"></ion-icon>
                    </div>
                    <a href="{{ route('tentang-kami.index') }}" class="sidebar-menu">Kelola Tentang Kami</a>
                </li>
                <li class="list-menu ">
                    <div class="icon">
                        <ion-icon name="call"></ion-icon>
                    </div>
                    <a href="{{ route('tentang-kami.index') }}" class="sidebar-menu">Kelola Kontak</a>
                </li>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <h2 class="pageNameContent">Kelola Detail Prestasi</h2>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">SMPN 3 CICURUG</a></li>
        <li class="breadcrumb-item active">Kelola Detail Prestasi</li>
    </ol>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('prestasi.index') }}">
                <i class="bi bi-arrow-90deg-left"></i>Back
            </a>
        </li>
    </ol>
    <ul class="nav nav-pills mb-3 tabsMenu" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="new-request-tab" data-bs-toggle="pill" data-bs-target="#newRequestTab"
                type="button" role="tab" aria-controls="newRequestTab" aria-selected="true">Tambah Prestasi</button>
        </li>

    </ul>


    <div class="tab-content" id="pills-tabContent">

        <div class="tab-pane fade show active" id="newRequestTab" role="tabpanel" aria-labelledby="new-request-tab">

            <div class="d-flex justify-content-end">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambaheskul">
                    Tambah
                </button>

            </div>

            <div class="wrapperTable table-responsive">

                <table id="sambutanTable" class="tables" style="width:100%">
                    <thead>
                        <tr>
                            <th style="width: 5%">No</th>
                            <th style="width: 12%">Nama</th>
                            <th style="width: 12%">Jenis kegiatan</th>
                            <th style="width: 12%">Tempat kegiatan</th>
                            <th style="width: 12%">Juara</th>
                            <th style="width: 12%">Tahun</th>
                            <th style="width: 12%">Tingkat</th>
                            <th style="width: 12%">aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        @if (!empty($prestasiId))
                            @foreach ($prestasi as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td style="width: 16%">{{ $item->nama }}</td>
                                    <td style="width: 16%">{{ $item->jenis_kegiatan }}</td>
                                    <td style="width: 16%">{{ $item->tempat_kegiatan }}</td>
                                    <td style="width: 16%">{{ $item->juara }}</td>
                                    <td style="width: 16%">{{ $item->tahun }}</td>
                                    <td style="width: 16%">{!! $item->tingkat !!}</td>
                                    <td>

                                        <div class="container d-flex">
                                            <a class="btn btn-danger deleteee">Hapus</a>
                                            <button type="button" class="btn btn-primary mx-1" data-bs-toggle="modal"
                                                data-bs-target="#editprestasi" data-id="{{ $item->id }}"
                                                data-nama="{{ $item->nama }}"
                                                data-jenis_kegiatan="{{ $item->jenis_kegiatan }}" data-body
                                                tempat_kegiatan="{{ $item->tempat_kegiatan }}"
                                                data-juara="{{ $item->juara }}" data-tahun="{{ $item->tahun }}"
                                                data-tingkat="{{ $item->tingkat }}">
                                                Edit
                                            </button>
                                            <!-- Button trigger modal -->
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>

        </div>


        <!-- Modal Create -->
        <div class="modal fade" id="tambaheskul" tabindex="-1" aria-labelledby="tambaheskulLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambaheskulLabel">Tambah Keterangan Prestasi</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <form action="{{ route('keterangan-prestasi.create') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <input name="prestasi_id" type="hidden" value="{{ $prestasiId ?? null }}">
                            <div class="mb-3">
                                <label for="nama" class="form-label @error('nama') is-invalid @enderror">name</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="isi name ">
                                @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="jenis_kegiatan"
                                    class="form-label @error('jenis_kegiatan') is-invalid @enderror">jenis_kegiatan</label>
                                <input type="text" class="form-control" id="jenis_kegiatan" name="jenis_kegiatan"
                                    placeholder="isi jenis_kegiatan ">
                                @error('jenis_kegiatan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="tempat_kegiatan" class="form-label">tempat_kegiatan</label>
                                <input type="text" class="form-control" id="tempat_kegiatan" name="tempat_kegiatan"
                                    placeholder="isi tempat_kegiatan ">
                            </div>
                            <div class="mb-3">
                                <label for="juara" class="form-label">juara</label>
                                <input type="text" class="form-control" id="juara" name="juara" placeholder="isi juara ">
                            </div>
                            <div class="mb-3">
                                <label for="tahun" class="form-label">tahun</label>
                                <input type="text" class="form-control" id="tahun" name="tahun" placeholder="isi tahun ">
                            </div>
                            <div class="mb-3">
                                <label for="tingkat" class="form-label">tingkat</label>
                                <input type="text" class="form-control" id="tingkat" name="tingkat"
                                    placeholder="isi tingkat ">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <!-- Modal Edit -->
        <div class="modal fade" id="editprestasi" tabindex="-1" aria-labelledby="editprestasiLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" id="editData">

                </div>
            </div>
        </div>

    </div>
@endsection

@section('js')
    <script>
        var editor_config = {
            path_absolute: "/",
            selector: '#editor',
            relative_urls: false,
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table directionality",
                "emoticons template paste textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            file_picker_callback: function(callback, value, meta) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName(
                    'body')[0].clientWidth;
                var y = window.innerHeight || document.documentElement.clientHeight || document
                    .getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + 'laravel-filemanager?editor=' + meta.fieldname;
                if (meta.filetype == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.openUrl({
                    url: cmsURL,
                    title: 'Filemanager',
                    width: x * 0.8,
                    height: y * 0.8,
                    resizable: "yes",
                    close_previous: "no",
                    onMessage: (api, message) => {
                        callback(message.content);
                    }
                });
            }
        };

        tinymce.init(editor_config);
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"
        integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('.dropify').dropify();
    </script>


    <script>
        $('#editprestasi').on('shown.bs.modal', function(e) {
            var html = `<div class="modal-header">
              <h5 class="modal-title" id="editprestasiLabel">Edit Keterangan Prestasi</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="/management/keterangan-prestasi/edit/${$(e.relatedTarget).data('id')}" method="get" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="isi nama" value="${$(e.relatedTarget).data('nama')}">
                    </div>
                    <div class="mb-3">
                        <label for="jenis_kegiatan" class="form-label">jenis_kegiatan</label>
                        <input type="text" class="form-control" id="jenis_kegiatan" name="jenis_kegiatan" placeholder="isi jenis_kegiatan" value="${$(e.relatedTarget).data('jenis_kegiatan')}">
                    </div>
                    <div class="mb-3">
                        <label for="tempat_kegiatan" class="form-label">tempat_kegiatan</label>
                        <input type="text" class="form-control" id="tempat_kegiatan" name="tempat_kegiatan" placeholder="isi tempat_kegiatan" value="${$(e.relatedTarget).data('tempat_kegiatan')}">
                    </div>
                    <div class="mb-3">
                        <label for="juara" class="form-label">juara</label>
                        <input type="text" class="form-control" id="juara" name="juara" placeholder="isi juara" value="${$(e.relatedTarget).data('juara')}">
                    </div>
                    <div class="mb-3">
                        <label for="tahun" class="form-label">tahun</label>
                        <input type="text" class="form-control" id="tahun" name="tahun" placeholder="isi tahun" value="${$(e.relatedTarget).data('tahun')}">
                    </div>
                    <div class="mb-3">
                        <label for="tingkat" class="form-label">tingkat</label>
                        <input type="text" class="form-control" id="tingkat" name="tingkat" placeholder="isi tingkat" value="${$(e.relatedTarget).data('tingkat')}">
                    </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
         </div>`;


            $('#editData').html(html);
            // $('.dropify').dropify();
        });
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
                        window.location = "{{ route('keterangan-prestasi.delete', ['id' => $item->id]) }}"
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
