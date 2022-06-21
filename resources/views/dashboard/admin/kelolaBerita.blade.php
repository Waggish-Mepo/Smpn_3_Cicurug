@extends('dashboard.layouts.base')

@section('css')
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css"
        integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: "#editor",
            height: 300,
            plugins: [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
                "table contextmenu directionality emoticons paste textcolor",
                "save code fullscreen autoresize codesample autosave responsivefilemanager"
            ],
            menubar: false,
            toolbar1: "undo redo restoredraft | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist | outdent indent table searchreplace",
            toolbar2: "| fontsizeselect | styleselect | link unlink anchor | image media emoticons | forecolor backcolor | code codesample fullscreen ",
            image_advtab: true,
            fontsize_formats: "8px 10px 12px 14px 18px 24px 36px",
            relative_urls: false,
            remove_script_host: false,
            filemanager_access_key: '@filemanager_get_key()',
            filemanager_sort_by: '',
            filemanager_descending: '',
            filemanager_subfolder: '',
            filemanager_crossdomain: '',
            external_filemanager_path: '@filemanager_get_resource(dialog . php)',
            filemanager_title: "File Manager",
            external_plugins: {
                "filemanager": "http://127.0.0.1:8000/js/filemanager.min.js"
            },
            filemanager_access_key: 'key',
        });
    </script>
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
                <li class="list-menu active">
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

    <h2 class="pageNameContent">Kelola Berita</h2>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">SMPN 3 CICURUG</a></li>
        <li class="breadcrumb-item active">Kelola Berita</li>
    </ol>

    <div class="d-flex justify-content-end">

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createData">
            Tambah
        </button>

    </div>

    <div class="wrapperTable table-responsive">
        <table id="beritaTable" class="tables" style="width:100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Judul</th>
                    <th>alias</th>
                    <th>artikel</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach (DB::table('beritas')->get() as $key => $item)
                    <tr>
                        <td style="width: 5%">{{ $key + 1 }}</td>
                        <td style="width: 20%">{{ $item->title }}</td>
                        <td style="width: 20%">{{ $item->excerpt }}</td>
                        <td style="width: 20%">
                            {!! Str::limit($item->body, 240) !!}
                        </td>
                        <td style="width: 20%">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#updateData" data-id="{{ $item->id }}"
                                data-title="{{ $item->title }}" data-excerpt="{{ $item->excerpt }}"
                                data-body="{{ $item->body }}" data-image="{{ $item->image }}">
                                Edit
                            </button>
                            <a class="btn btn-danger deleteee">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    </div>


    <!-- Modal -->
    <div class="modal fade" id="updateData" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="updateDataLabel" aria-hidden="true">
        <div class="modal-dialog" id="updateDialog">
            <div id="modal-content" class="modal-content">
                Loading..
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="createData" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="createDataLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div id="modal-content" class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambaheskulLabel">Tambah Berita</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('berita.create') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="p-3">
                        <label for="title" class="form-label">title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="isi title " required>
                    </div>

                    <div class="p-3">
                        <label for="excerpt" class="form-label">excerpt</label>
                        <input type="text" class="form-control" id="excerpt" name="excerpt" placeholder="isi excerpt "
                            required>
                    </div>


                    <div class="p-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Body</label>
                        <textarea class="form-control" name="body" placeholder="Masukan Konten" id="editor"></textarea>
                    </div>


                    <input type="file" name="image" class="dropify p-2" data-min-width="400" data-max-width="12000"
                        required />
                    <p style="font-size:12px; margin-bottom:10px; margin-top:10px">Ukuran Gambar Minimal : <span
                            style="color:red;font-weight:bold">width:300px</span></p>
                    <br>
                    <br>
                    <center> <button class="btn btn-success" type="submit">Submit</button>
                    </center>

                </form>
            </div>
        </div>
    </div>
@endsection


@section('js')
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

    <!--Ionicon-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- Table Js -->
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <!-- ckeditor -->
    <script src="https://cdn.tiny.cloud/1/{{ env('TINY_API_TOKEN') }}/tinymce/5/tinymce.min.js" referrerpolicy="origin">
    </script>



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
        $('#updateData').on('shown.bs.modal', function(e) {
            var html = `
    <div id="modal-content" class="modal-content">
    <div class="modal-header">
                    <h5 class="modal-title" id="tambaheskulLabel">Edit Berita</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/management/berita/edit/${$(e.relatedTarget).data('id')}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="p-3">
                        <label for="title" class="form-label">title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="isi title " value="${$(e.relatedTarget).data('title')}">
                    </div>

                    <div class="p-3">
                        <label for="excerpt" class="form-label">excerpt</label>
                        <input type="text" class="form-control" id="excerpt" name="excerpt" placeholder="isi excerpt " value="${$(e.relatedTarget).data('excerpt')}"
                        >
                    </div>

                    <div class="p-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Body</label>
                        <textarea class="form-control" name="body" placeholder="Masukan Konten" id="editor">${$(e.relatedTarget).data('body')}</textarea>
                    </div>


                    <input type="file" name="image" class="dropify" data-min-width="400" data-max-width="12000"
                    data-default-file="/thumbBerita/${$(e.relatedTarget).data('image')}" />
                    <p style="font-size:12px; margin-bottom:10px; margin-top:10px">Ukuran Gambar Minimal : <span style="color:red;font-weight:bold">width:300px</span></p>
                    <br>
                    <center>
                         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-success" type="submit">Submit</button>
                    </center>

                </form>
            </div>
    `;

            $('#modal-content').html(html);
            $('.dropify').dropify();

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
            $('#beritaTable').DataTable({
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
                        window.location = "{{ route('berita.delete', ['id' => $item->id]) }}"
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
