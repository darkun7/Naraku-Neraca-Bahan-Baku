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
Route::get('/', 'HomeController@landing')->name('landing');
// Route::get('/', function () {
//     return view('front.home');
// });

Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/kalkulator', 'HomeController@kalkulator')->name('kalkulator')->middleware('role:produsen');;
    Route::get('/profil', 'HomeController@profil')->name('profil'); // unimplemented
    Route::post('/profil', 'HomeController@store')->name('profilstore')->middleware('role:produsen');
    Route::group(['as' => 'lahan.' , 'prefix' => 'lahan'], function () {                // unimplemented
        Route::get('/', 'LahanController@index')->name('lahan')->middleware('role:pelanggan');
        Route::get('/tambah', 'LahanController@create')->name('create')->middleware('role:pelanggan');
        Route::post('/tambah', 'LahanController@store')->name('store')->middleware('role:pelanggan');
        Route::get('/{id}/edit', 'LahanController@edit')->name('edit')->middleware('role:pelanggan');
        Route::patch('/{id}/edit', 'LahanController@update')->name('update')->middleware('role:pelanggan');
        Route::delete('/{id}/hapus', 'LahanController@destroy')->name('delete')->middleware('role:pelanggan');
    });
    Route::group(['as' => 'penjualan.' , 'prefix' => 'penjualan'], function () {                // unimplemented
        Route::get('/', 'PenjualanController@index')->name('index')->middleware('role:pelanggan|produsen');
        Route::get('/tambah', 'PenjualanController@create')->name('create')->middleware('role:produsen');
        Route::post('/tambah', 'PenjualanController@store')->name('store')->middleware('role:produsen');
        Route::get('/{id}/edit', 'PenjualanController@edit')->name('edit')->middleware('role:produsen');
        Route::patch('/{id}/edit', 'PenjualanController@update')->name('update')->middleware('role:produsen');
        Route::delete('/{id}/hapus', 'PenjualanController@destroy')->name('delete')->middleware('role:produsen');
    });
    Route::group(['as' => 'pesanan.' , 'prefix' => 'pesanan'], function () {                // unimplemented
        Route::get('/', 'PesananController@index')->name('index')->middleware('role:produsen|pelanggan');
        Route::get('/riwayatpesan', 'PesananController@riwayatPesan')->name('riwayatpesan')->middleware('role:pelanggan');
        Route::get('/tambah', 'PesananController@create')->name('create')->middleware('role:pelanggan|produsen');
        Route::post('/tambah', 'PesananController@store')->name('store')->middleware('role:pelanggan|produsen');
        Route::get('/{id}/edit', 'PesananController@edit')->name('edit')->middleware('role:pelanggan|produsen');
        Route::patch('/{id}/edit', 'PesananController@update')->name('update')->middleware('role:pelanggan|produsen');
        Route::delete('/{id}/hapus', 'PesananController@destroy')->name('delete')->middleware('role:pelanggan|produsen');
    });
    Route::group(['as' => 'bahan.' , 'prefix' => 'bahan'], function () {                // unimplemented
        Route::get('/', 'BahanController@index')->name('index')->middleware('role:produsen');
        Route::get('/tambah', 'BahanController@create')->name('create')->middleware('role:produsen');
        Route::post('/tambah', 'BahanController@store')->name('store')->middleware('role:produsen');
        Route::get('/{id}/edit', 'BahanController@edit')->name('edit')->middleware('role:produsen');
        Route::patch('/{id}/edit', 'BahanController@update')->name('update')->middleware('role:produsen');
        Route::delete('/{id}/hapus', 'BahanController@destroy')->name('delete')->middleware('role:produsen');
    });
    Route::group(['as' => 'pupuk.' , 'prefix' => 'pupuk'], function () {                // unimplemented
        Route::get('/', 'PupukController@index')->name('index')->middleware('role:produsen|pelanggan');
        Route::get('/arsip', 'PupukController@arsip')->name('arsip')->middleware('role:produsen|pelanggan');
        Route::get('/tambah', 'PupukController@create')->name('create')->middleware('role:produsen');
        Route::post('/tambah', 'PupukController@store')->name('store')->middleware('role:produsen');
        Route::get('/{id}/edit', 'PupukController@edit')->name('edit')->middleware('role:produsen');
        Route::patch('/{id}/edit', 'PupukController@update')->name('update')->middleware('role:produsen');
        Route::delete('/{id}/hapus', 'PupukController@destroy')->name('delete')->middleware('role:produsen');
    });
    Route::group(['as' => 'pengaturan.' , 'prefix' => 'pengaturan'], function () {                // unimplemented
        Route::get('/website', 'PengaturanController@website')->name('website')->middleware('role:produsen');
        Route::get('/jumbotron', 'PengaturanController@jumbotron')->name('jumbotron')->middleware('role:produsen');
        Route::get('/kontak', 'PengaturanController@kontak')->name('kontak')->middleware('role:produsen');
        Route::get('/maps', 'PengaturanController@maps')->name('maps')->middleware('role:produsen');
        Route::post('/perbarui', 'PengaturanController@store')->name('store')->middleware('role:produsen');
    });
});
