<?php

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

Route::get('/dashboard', 'HomeController@index')->name('home');


// Admin
Route::group(['middleware' => ['auth','ceklevel:admin']], function() {

    // Siswa
    Route::get('/siswa', 'SiswaController@index')->name('siswa');
    Route::get('/siswa/tambah', 'SiswaController@create');
    Route::post('/siswa/store', 'SiswaController@store');
    Route::get('/siswa/delete/{id}', 'SiswaController@destroy');
    Route::get('/siswa/edit/{id}', 'SiswaController@edit');
    Route::post('/siswa/update/{id}', 'SiswaController@update');
    Route::get('/siswa/detail/{id}', 'SiswaController@show');

    // Kelas
    Route::get('/kelas', 'KelasController@index')->name('kelas');
    Route::post('/kelas/store', 'KelasController@store');
    Route::put('/kelas/{id}', 'KelasController@update');
    Route::get('/kelas/delete/{id}', 'KelasController@destroy');

    // Pelanggaran
    Route::get('/pelanggaran', 'PelanggaranController@index')->name('pelanggaran');
    Route::post('/pelanggaran/store', 'PelanggaranController@store');
    Route::put('/pelanggaran/{id}', 'PelanggaranController@update');
    Route::get('/pelanggaran/delete/{id}', 'PelanggaranController@destroy');

    // Kategori
    Route::get('/kategori', 'KategoriController@index')->name('kategori');
    Route::post('/kategori/store', 'KategoriController@store');
    Route::put('/kategori/{id}', 'KategoriController@update');
    Route::get('/kategori/delete/{id}', 'KategoriController@destroy');

    // Penilaian
    Route::get('/penilaian', 'PenilaianController@index')->name('penilaian');
    Route::get('/penilaian/tambah', 'PenilaianController@create');
    Route::post('/penilaian/store', 'PenilaianController@store');

});

// Siswa
Route::group(['middleware' => ['auth','ceklevel:admin,siswa']], function() {


});
