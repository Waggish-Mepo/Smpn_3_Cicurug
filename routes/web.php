<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\EkstrakurikulerController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\TentangKamiController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $banner = 'assets/img/ImgJumbotron.svg';

    return view('home', ['banner'=>$banner]);
});
Route::get('/berita', function () {

    return view('berita');
});
Route::get('/berita/detail', function () {

    return view('detailBerita');
});
Route::get('/ekstrakurikuler', function () {

    return view('eskul');
});
Route::get('/tentangKami', function () {

    return view('tentangKami');
});


Auth::routes();

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::prefix('management')->group(function () {

    Route::prefix('users')->name('users.')->group(function () {
        Route::get('/', [UsersController::class, 'index'])->name('index');
        Route::post('/create', [UsersController::class, 'create'])->name('create');
        Route::get('/edit/{id}', [UsersController::class, 'edit'])->name('edit');
        Route::get('/delete/{id}', [UsersController::class, 'delete'])->name('delete');
    });

    Route::prefix('beranda')->name('beranda.')->group(function () {
        Route::get('/', [BerandaController::class, 'index'])->name('index');
        Route::prefix('banner')->name('banner.')->group(function () {
            Route::post('/edit/{id}', [BerandaController::class, 'editBanner'])->name('edit');
        });
        Route::prefix('about')->name('about.')->group(function () {
            Route::post('/edit/{id}', [BerandaController::class, 'editAbout'])->name('edit');
        });
        Route::prefix('activity')->name('activity.')->group(function () {
            Route::post('/create', [BerandaController::class, 'create'])->name('create');
            Route::post('/edit/{id}', [BerandaController::class, 'editActivity'])->name('edit');
            Route::get('/delete/{id}', [BerandaController::class, 'delete'])->name('delete');
        });
    });

    Route::prefix('berita')->name('berita.')->group(function () {
        Route::get('/', [BeritaController::class, 'index'])->name('index');
        Route::post('/create', [BeritaController::class, 'create'])->name('create');
        Route::post('/edit/{id}', [BeritaController::class, 'edit'])->name('edit');
        Route::get('/delete/{id}', [BeritaController::class, 'delete'])->name('delete');
    });

    Route::prefix('ekstrakurikuler')->name('ekstrakurikuler.')->group(function () {
        Route::get('/', [EkstrakurikulerController::class, 'index'])->name('index');
        Route::post('/create', [EkstrakurikulerController::class, 'create'])->name('create');
        Route::post('/edit/{id}', [EkstrakurikulerController::class, 'edit'])->name('edit');
        Route::get('/delete/{id}', [EkstrakurikulerController::class, 'delete'])->name('delete');
    });

    Route::prefix('prestasi')->name('prestasi.')->group(function () {
        Route::get('/', [PrestasiController::class, 'index'])->name('index');
        Route::post('/create', [PrestasiController::class, 'create'])->name('create');
        Route::get('/edit/{id}', [PrestasiController::class, 'edit'])->name('edit');
        Route::get('/delete/{id}', [PrestasiController::class, 'delete'])->name('delete');
    });

    Route::prefix('tentang-kami')->name('tentang-kami.')->group(function () {
        Route::get('/', [TentangKamiController::class, 'index'])->name('index');
        Route::prefix('visimisi')->name('visimisi.')->group(function () {
            Route::post('/edit/{id}', [TentangKamiController::class, 'editVisimisi'])->name('edit');
        });
        Route::prefix('guru')->name('guru.')->group(function () {
            Route::post('/create', [TentangKamiController::class, 'create'])->name('create');
            Route::post('/edit/{id}', [TentangKamiController::class, 'editGuru'])->name('edit');
            Route::get('/delete/{id}', [TentangKamiController::class, 'delete'])->name('delete');
        });
        Route::prefix('sejarah')->name('sejarah.')->group(function () {
            Route::post('/edit/{id}', [TentangKamiController::class, 'editSejarah'])->name('edit');
        });
    });


});
