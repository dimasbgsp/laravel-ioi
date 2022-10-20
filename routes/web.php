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

// Route::get('/mahasiswa', function(){
//     return view('universitas.mahasiswa');
// });

// Route::get('/mahasiswa', function(){
//     return view('universitas.mahasiswa', ["mahasiswa1" => "Risa Lestari"]); 
//     // associate array
// });

// Route::get('/mahasiswa', function(){
//     return view('universitas.mahasiswa',[
//         "mahasiswa1" => "Risa Lestari",
//         "mahasiswa2" => "Rudi Hermawan",
//         "mahasiswa3" => "Bambang Kusumo",
//         "mahasiswa4" => "Lisa Permata",
//     ]);
// });

Route::get('/mahasiswa', function(){
    $arrMahasiswa = [
        "mahasiswa1" => "Risa Lestari",
        "mahasiswa2" => "Rudi Hermawan",
        "mahasiswa3" => "Bambang Kusumo",
        "mahasiswa4" => "Lisa Permata",
        "mahasiswa5" => "Budi Riyanto"
    ];

    return view('universitas.mahasiswa', $arrMahasiswa);
});

// pengelolaan aset - CSS dan JS
Route::get('/pengelolaan-aset-css-js', function(){
    $arrMahasiswa = [
        "Risa Lestari", "Rudi Hermawan", "Bambang Kusumo", "Lisa Permata", "Budi Riyanto"
    ];
 
    return view('universitas.pengelolaan_aset_css_js', ['mahasiswa' => $arrMahasiswa]);
});

// pengelolaan aset - CSS, Js dan Gambar
Route::get('/pengelolaan-aset-css-js-gambar', function(){
    $arrMahasiswa = [
        "Risa Lestari", "Rudi Hermawan", "Bambang Kusumo", "Lisa Permata", "Budi Riyanto"
    ];
 
    return view('universitas.pengelolaan_aset_css_js_gambar', ['mahasiswa' => $arrMahasiswa]);
});

// pengelolaan asset - Bootstrap CDN
Route::get('/mahasiswa/ilkom', function(){
    $arrMahasiswa = [
        "Risa Lestari", "Rudi Hermawan", "Bambang Kusumo", "Lisa Permata", "Budi Riyanto"
    ];
 
    return view('universitas.bootstrap_cdn', ['mahasiswa' => $arrMahasiswa]);
});

// kuis
Route::get('/siswa/{nama}/{umur}/{tempat_tinggal}', function($nama, $umur, $tempat_tinggal){
    return view('universitas.halaman_siswa')
    ->with('var_view_nama', $nama)
    ->with('var_view_umur', $umur)
    ->with('var_view_tempat_tinggal', $tempat_tinggal);
});

Route::get('/mahasiswa/{nama}/{agama}', function($nama, $agama){
    // return "tampilkan data mahasiswa bernama $nama";
    return view('universitas.halaman_siswa', compact('nama','agama'));
});