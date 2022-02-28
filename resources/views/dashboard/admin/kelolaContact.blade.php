{{-- @foreach ($prestasi as $item)
    {{ $item->ketPrestasi }}
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
                <li class="list-menu active">
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
    <h2 class="pageNameContent">Kelola Kontak</h2>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">SMPN 3 CICURUG</a></li>
        <li class="breadcrumb-item active">Kelola Kontak</li>
    </ol>

    <div class="wrapperTable table-responsive">
        <table id="editTable" class="tables" style="width:100%">
            <thead>
                <tr>
                    <th style="width: 5%">#</th>
                    <th style="width: 30%">No Telepon</th>
                    <th style="width: 30%">Alamat</th>
                    <th style="width: 30%">Link Akun Facebook</th>
                    <th style="width: 5%">Link Akun Instagram</th>
                    <th style="width: 5%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach (DB::table('contact')->get() as $key => $item)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $item->no_telp }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->fb }}</td>
                        <td>{{ $item->ig }}</td>
                        <td>
                            <button type="button" class="btn btn-primary show-edit-modal mx-1" data-bs-toggle="modal"
                                data-bs-target="#edit" data-id="{{ $item->id }}" data-no_telp="{{ $item->no_telp }}"
                                data-alamat="{{ $item->alamat }}" data-fb="{{ $item->fb }}"
                                data-ig="{{ $item->ig }}"> Edit
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- Edit Contact --}}
    <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" id="modal-edit">
                <div class="modal-header">
                    <h5 class="modal-title" id="editLabel">Edit Kontak</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form action="{!! url('management/contact/edit') !!}" method="post">
                        <input type="hidden" id="contact-id" name="id">
                        @csrf
                        <div class="mb-3">
                            <label for="no_telp" class="form-label">Nomor Telepon</label>
                            <input type="text" class="form-control" id="no_telp" aria-describedby="no_telp" name="no_telp"
                                value="">
                        </div>
                        <label for="alamat">Alamat</label>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="alamat" id="alamat" style="height: 100px"
                                name="alamat" value=""></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="fb" class="form-label">Link Facebook</label>
                            <input type="text" class="form-control" id="fb" aria-describedby="fb" name="fb" value="">
                        </div>
                        <div class="mb-3">
                            <label for="ig" class="form-label">Link Instagram</label>
                            <input type="text" class="form-control" id="ig" aria-describedby="ig" name="ig" value="">
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
    <script>
        $('.show-edit-modal').each(function() {
            $(this).click(function() {
                $('#no_telp').val($(this).data('no_telp'));
                $('#alamat').val($(this).data('alamat'));
                $('#fb').val($(this).data('fb'));
                $('#ig').val($(this).data('ig'));
                $('#contact-id').val($(this).data('id'));
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#editTable').DataTable({
                "info": false,
                "bSort": false,
            });
        });
    </script>
@endsection
