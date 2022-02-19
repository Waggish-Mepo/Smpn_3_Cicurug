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
            <li class="list-menu active">
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
            <li class="list-menu ">
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

    <h2 class="pageNameContent">Kelola Ekstrakurikuler</h2>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">SMPN 3 CICURUG</a></li>
        <li class="breadcrumb-item active">Kelola Ekstrakurikuler</li>
    </ol>

    <ul class="nav nav-pills mb-3 tabsMenu" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="new-request-tab" data-bs-toggle="pill" data-bs-target="#newRequestTab" type="button" role="tab" aria-controls="newRequestTab" aria-selected="true">Banner</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="list-request-tab" data-bs-toggle="pill" data-bs-target="#listRequestTab" type="button" role="tab" aria-controls="listRequestTab" aria-selected="false">Daftar Eskul</button>
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
                        <tr>
                            <td>1</td>
                            <td><img src="" alt=""></td>
                            <td><!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editBanner">
                                  Edit
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="editBanner" tabindex="-1" aria-labelledby="editBannerLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
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
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="tab-pane fade" id="listRequestTab" role="tabpanel" aria-labelledby="list-request-tab">

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
                            <th style="width: 5%">#</th>
                            <th style="width: 30%">Gambar</th>
                            <th style="width: 30%">Judul</th>
                            <th style="width: 30%">Kata - Kata</th>
                            <th style="width: 5%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ( DB::table('ekskuls')->get() as $key=>$item )

                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td><img src="{{ url('thumbEskul/' . $item->image) }}" alt=""></td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->body }}</td>
                            <td>
                                <a class="btn btn-danger" href="{{ route('ekstrakurikuler.delete', ['id'=>$item->id]) }}">Hapus</a>

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editeskul" data-id="{{ $item->id}}" data-title="{{ $item->title }}" data-body="{{ $item->body }}" data-image="{{ $item->image }}">
                                  Edit
                                </button>

                            </td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>


                <!-- Modal Create -->
                <div class="modal fade" id="tambaheskul" tabindex="-1" aria-labelledby="tambaheskulLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="tambaheskulLabel">Tambah Ekskul</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <form action="{{ route('ekstrakurikuler.create') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="title" class="form-label">title</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="isi title " required>
                                </div>

                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Body</label>
                                    <textarea class="form-control" name="body" placeholder="Masukan Konten" id="editor"></textarea>
                                </div>

                                <input type="file" name="image" class="dropify" data-max-width="320" data-max-width="180"
                                    required />



                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>

                        </form>
                        </div>
                    </div>
                    </div>
                </div>

                <!-- Modal Edit -->
                <div class="modal fade" id="editeskul" tabindex="-1" aria-labelledby="editeskulLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content" id="editData">

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

    $('#editeskul').on('shown.bs.modal', function(e) {
        var html = `<div class="modal-header">
              <h5 class="modal-title" id="editeskulLabel">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="/management/ekstrakurikuler/edit/${$(e.relatedTarget).data('id')}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="isi title " value="${$(e.relatedTarget).data('title')}">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Body</label>
                        <textarea class="form-control" name="body" placeholder="Masukan Konten" id="editor">${$(e.relatedTarget).data('body')}</textarea>
                    </div>


                    <input type="file" name="image" class="dropify" data-max-width="320" data-max-width="180"
                    data-default-file="/thumbBerita/${$(e.relatedTarget).data('image')}" />

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>`;


        $('#editData').html(html);
        $('.dropify').dropify();
    });

    </script>

    <script>
        $(document).ready(function() {
            $('#bannerTable').DataTable({
                "info": false,
                "bSort": false,
            });
        } );

        $(document).ready(function() {
            $('#sambutanTable').DataTable({
                "info": false,
                "bSort": false,
            });
        } );
    </script>
@endsection
