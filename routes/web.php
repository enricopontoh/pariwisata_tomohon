<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZonasiWisataController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomepageController::class, 'index'])->name('homepage.home');
Route::get('/wisata', [App\Http\Controllers\HomepageController::class, 'wisata'])->name('homepage.wisata');
Route::get('/daerah', [App\Http\Controllers\HomepageController::class, 'daerah'])->name('homepage.daerah');
Route::get('/maps', [App\Http\Controllers\HomepageController::class, 'maps'])->name('homepage.maps');
Route::get('/about', [App\Http\Controllers\HomepageController::class, 'about'])->name('homepage.about');
Route::get('/wisata/cari', [App\Http\Controllers\HomepageController::class, 'cariwisata'])->name('homepage.cariwisata');
Route::get('/wisata/cariwisata', [App\Http\Controllers\HomepageController::class, 'cariwisata2'])->name('homepage.cariwisata2');
Route::get('/wisata/{id}', [App\Http\Controllers\HomepageController::class, 'detailwisata'])->name('homepage.detailwisata');
Route::post('/daerah/detail', [App\Http\Controllers\HomepageController::class, 'detaildaerah'])->name('homepage.detaildaerah');
Route::get('/daerah/{id}', [App\Http\Controllers\HomepageController::class, 'detaildaerahmenu'])->name('homepage.detaildaerahmenu');
Route::get('/kategori/{id}', [App\Http\Controllers\HomepageController::class, 'detailkategorimenu'])->name('homepage.detailkategorimenu');

Route::group(['prefix' => 'admin', 'middleware' => ['level_admin','auth']], function(){
    // users route
	
	Route::get('/home', [App\Http\Controllers\AdminController::class, 'Home'])->name('admin.home')->middleware('level_admin');	
	
    Route::get('/kategori', [App\Http\Controllers\AdminController::class, 'tampilkategori'])->name('kategori.home')->middleware('level_admin');
    Route::get('/kategori/tambah', [App\Http\Controllers\AdminController::class, 'tambahkategori'])->name('kategori.tambah')->middleware('level_admin');
    Route::delete('/kategori/{id}', [App\Http\Controllers\AdminController::class, 'hapuskategori'])->name('kategori.hapus')->middleware('level_admin');	
    Route::post('/kategori/', [App\Http\Controllers\AdminController::class, 'prosestambahkategori'])->name('kategori.prosestambah')->middleware('level_admin');
    Route::get('/kategori/{id}', [App\Http\Controllers\AdminController::class, 'editkategori'])->name('kategori.edit')->middleware('level_admin');
    Route::put('/kategori/{id}', [App\Http\Controllers\AdminController::class, 'prosesupdatekategori'])->name('kategori.prosesupdate')->middleware('level_admin');

    Route::get('/daerah', [App\Http\Controllers\AdminController::class, 'tampildaerah'])->name('daerah.home')->middleware('level_admin');
    Route::get('/daerah/tambah', [App\Http\Controllers\AdminController::class, 'tambahdaerah'])->name('daerah.tambah')->middleware('level_admin');
    Route::delete('/daerah/{id}', [App\Http\Controllers\AdminController::class, 'hapusdaerah'])->name('daerah.hapus')->middleware('level_admin');	
    Route::post('/daerah/', [App\Http\Controllers\AdminController::class, 'prosestambahdaerah'])->name('daerah.prosestambah')->middleware('level_admin');
    Route::get('/daerah/{id}', [App\Http\Controllers\AdminController::class, 'editdaerah'])->name('daerah.edit')->middleware('level_admin');
    Route::put('/daerah/{id}', [App\Http\Controllers\AdminController::class, 'prosesupdatedaerah'])->name('daerah.prosesupdate')->middleware('level_admin');	
	
    Route::get('/fasilitas', [App\Http\Controllers\AdminController::class, 'tampilfasilitas'])->name('fasilitas.home')->middleware('level_admin');
    Route::get('/fasilitas/tambah', [App\Http\Controllers\AdminController::class, 'tambahfasilitas'])->name('fasilitas.tambah')->middleware('level_admin');
    Route::delete('/fasilitas/{id}', [App\Http\Controllers\AdminController::class, 'hapusfasilitas'])->name('fasilitas.hapus')->middleware('level_admin');	
    Route::post('/fasilitas/', [App\Http\Controllers\AdminController::class, 'prosestambahfasilitas'])->name('fasilitas.prosestambah')->middleware('level_admin');
    Route::get('/fasilitas/{id}', [App\Http\Controllers\AdminController::class, 'editfasilitas'])->name('fasilitas.edit')->middleware('level_admin');
    Route::put('/fasilitas/{id}', [App\Http\Controllers\AdminController::class, 'prosesupdatefasilitas'])->name('fasilitas.prosesupdate')->middleware('level_admin');

    Route::get('/wisata', [App\Http\Controllers\AdminController::class, 'tampilwisata'])->name('wisata.home')->middleware('level_admin');
    Route::get('/wisata/tambah', [App\Http\Controllers\AdminController::class, 'tambahwisata'])->name('wisata.tambah')->middleware('level_admin');
    Route::post('/wisatagambar/', [App\Http\Controllers\AdminController::class, 'prosestambahgambar'])->name('wisata.prosestambahgambar')->middleware('level_admin');
    Route::delete('/wisata/{id}', [App\Http\Controllers\AdminController::class, 'hapuswisata'])->name('wisata.hapus')->middleware('level_admin');	
    Route::post('/wisata/', [App\Http\Controllers\AdminController::class, 'prosestambahwisata'])->name('wisata.prosestambah')->middleware('level_admin');
    Route::get('/wisata/{id}', [App\Http\Controllers\AdminController::class, 'editwisata'])->name('wisata.edit')->middleware('level_admin');
    Route::put('/wisata/{id}', [App\Http\Controllers\AdminController::class, 'prosesupdatewisata'])->name('wisata.prosesupdate')->middleware('level_admin');
	
	//gambar
	
    //Route::get('/dropzone', [App\Http\Controllers\AdminController::class, 'tampildatagambar'])->name('dropzone.upload')->middleware('level_admin');	
    Route::post('/dropzone/upload', [App\Http\Controllers\AdminController::class, 'uploadgambar'])->name('dropzone.upload')->middleware('level_admin');	
    Route::get('/dropzone/fetch', [App\Http\Controllers\AdminController::class, 'tampildatagambar'])->name('dropzone.fetch')->middleware('level_admin');	

	
    Route::delete('/dropzone/hapus/{id}', [App\Http\Controllers\AdminController::class, 'hapusgambar'])->name('dropzone.hapus')->middleware('level_admin');
	
	
	Route::resource('/zonasi',ZonasiWisataController::class);
	
}); 	