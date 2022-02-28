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
                <li class="list-menu active">
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
    <h2 class="pageNameContent">Kelola User</h2>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">SMPN 3 CICURUG</a></li>
        <li class="breadcrumb-item active">Kelola User</li>
    </ol>

    <ul class="nav nav-pills mb-3 tabsMenu" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="new-request-tab" data-bs-toggle="pill" data-bs-target="#newRequestTab"
                type="button" role="tab" aria-controls="newRequestTab" aria-selected="true">Daftar Akun</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="list-request-tab" data-bs-toggle="pill" data-bs-target="#listRequestTab"
                type="button" role="tab" aria-controls="listRequestTab" aria-selected="false">Tambah User</button>
        </li>
    </ul>

    <div class="tab-content" id="pills-tabContent">

        <div class="tab-pane fade show active" id="newRequestTab" role="tabpanel" aria-labelledby="new-request-tab">
            <div class="wrapperTable table-responsive">
                <table id="userTable" class="tables" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $key => $user)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>
                                    <p id="name">{{ $user->name }}</p>
                                </td>
                                <td>
                                    <p id="email">{{ $user->email }}</p>
                                </td>

                                <td>
                                    <div class="buttonAction">
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        ...
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <a class="btn btn-danger delete">Hapus</a>
                                        @section('js')
                                            <script>
                                                $('.delete').click(function() {
                                                    swal({
                                                            title: "Yakin?",
                                                            text: "Tekan ok untuk hapus, cancel untuk batal!",
                                                            icon: "warning",
                                                            buttons: true,
                                                            dangerMode: true,
                                                        })
                                                        .then((willDelete) => {
                                                            if (willDelete) {
                                                                window.location = "{{ route('users.delete', ['id' => $user->id]) }}"
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
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>

        <div class="tab-pane fade" id="listRequestTab" role="tabpanel" aria-labelledby="list-request-tab">
            <div class="row justify-content-center">
                <h1 class="text-center p-3 fs-2 text-black-50">Tambah Admin</h1>
                <div class="col-md-5">
                    <main class="form-registration">
                        <form action="{{ route('users.create') }}" method="post" class="form-registration">
                            @csrf
                            <div class="form-floating mb-2">
                                <input type="text" name="name"
                                    class="form-control rounded-top @error('name') is-invalid @enderror" id="name"
                                    placeholder="name" value="{{ old('name') }}">
                                <label for="name">name</label>
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-floating mb-2">
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                    id="email" placeholder="email" value="{{ old('email') }}">
                                <label for="email">Email address</label>
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-floating mb-2">
                                <input type="password" name="password"
                                    class="form-control rounded-bottom @error('password') is-invalid @enderror"
                                    id="password" placeholder="Password">
                                <label for="password">password</label>

                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button class="w-100 btn btn-lg btn-primary tambah" type="submit">Tambah</button>

                        </form>

                    </main>
                </div>
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
        $(document).ready(function() {
            $('#userTable').DataTable({
                "info": false,
                "bSort": false,
            });
        });
    </script>
@endsection
