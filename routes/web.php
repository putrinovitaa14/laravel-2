<?php

use Illuminate\Support\Facades\Route;

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

Route::get('halaman-2', function () {
    return ('halaman 2');
});

Route::get('halaman-3/profile', function () {
    return ('halaman profile 3');
});

// Route::get('profile', function () {
//     return view('profile');
// });

Route::get('latihan/{nama}', function ($nama) {
    return ('Ini Halaman ' . $nama);
});

Route::get('/latihan/{nama}', function ($nama) {
    return view('latihan', compact('nama'));

});

Route::get('pesan/{menu?}', function ($a = "Masukkan Pesanan") {
    return view('pages.pesan', compact('a'));

});

// latihan pesasn makanan
Route::get('pemesanan/{makanan?}/{minuman?}/{ukuran?}', function ($a = "silahkan pesan", $b = "silahkan pesan", $c = "silahkan pesan") {
    return view('pages.pemesanan', compact('a', 'b', 'c'));
});

// controller
Route::get('hallo', 'LatihanController@hallo');
Route::get('profile', 'LatihanController@profile');
Route::get('about/{perkalian}-{nama}', 'LatihanController@facebook');
Route::get('siswa', 'LatihanController@siswa');
Route::get('beratbadan/{berat}/{tinggi}', 'LatihanController@beratbadan');
Route::get('kampus', 'LatihanController@kampus');
Route::get('mahasiswa', 'LatihanController@mahasiswa');
Route::get('nilai', 'LatihanController@nilai');
Route::get('belanja', 'LatihanController@belanja');
Route::get('siswa', 'SiswaController@tampil');
