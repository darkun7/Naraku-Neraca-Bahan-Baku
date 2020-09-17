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
    return view('front.home');
});

Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/profil', 'HomeController@profil')->name('profil'); // unimplemented
    Route::group(['prefix' => 'lahan'], function () {                // unimplemented
        Route::get('/', 'LahanController@index')->name('lahan')->middleware('role:pelanggan');
        Route::get('/tambah', 'LahanController@create')->name('create')->middleware('role:pelanggan');
        Route::post('/tambah', 'LahanController@store')->name('store')->middleware('role:pelanggan');
        Route::get('/{id}/edit', 'LahanController@edit')->name('edit')->middleware('role:pelanggan');
        Route::patch('/{id}/edit', 'LahanController@update')->name('update')->middleware('role:pelanggan');
        Route::delete('/{id}/hapus', 'LahanController@destroy')->name('delete')->middleware('role:pelanggan');
    });
    Route::group(['prefix' => 'pesanan'], function () {                // unimplemented
        Route::get('/', 'LahanController@index')->name('pesanan')->middleware('role:pelanggan');
        Route::get('/tambah', 'LahanController@create')->name('create')->middleware('role:pelanggan|produsen');
        Route::post('/tambah', 'LahanController@store')->name('store')->middleware('role:pelanggan|produsen');
        Route::get('/{id}/edit', 'LahanController@edit')->name('edit')->middleware('role:pelanggan|produsen');
        Route::patch('/{id}/edit', 'LahanController@update')->name('update')->middleware('role:pelanggan|produsen');
        Route::delete('/{id}/hapus', 'LahanController@destroy')->name('delete')->middleware('role:pelanggan|produsen');
    });
    Route::group(['prefix' => 'komposisi'], function () {                // unimplemented
        Route::get('/', 'KomposisiController@index')->name('komposisi')->middleware('role:produsen');
        Route::get('/tambah', 'KomposisiController@create')->name('create')->middleware('role:produsen');
        Route::post('/tambah', 'KomposisiController@store')->name('store')->middleware('role:produsen');
        Route::get('/{id}/edit', 'KomposisiController@edit')->name('edit')->middleware('role:produsen');
        Route::patch('/{id}/edit', 'KomposisiController@update')->name('update')->middleware('role:produsen');
        Route::delete('/{id}/hapus', 'KomposisiController@destroy')->name('delete')->middleware('role:produsen');
    });
    Route::group(['prefix' => 'bahan'], function () {                // unimplemented
        Route::get('/', 'BahanController@index')->name('bahan')->middleware('role:produsen');
        Route::get('/tambah', 'BahanController@create')->name('create')->middleware('role:produsen');
        Route::post('/tambah', 'BahanController@store')->name('store')->middleware('role:produsen');
        Route::get('/{id}/edit', 'BahanController@edit')->name('edit')->middleware('role:produsen');
        Route::patch('/{id}/edit', 'BahanController@update')->name('update')->middleware('role:produsen');
        Route::delete('/{id}/hapus', 'BahanController@destroy')->name('delete')->middleware('role:produsen');
    });
    Route::group(['prefix' => 'pupuk'], function () {                // unimplemented
        Route::get('/', 'PupukController@index')->name('pupuk')->middleware('role:produsen');
        Route::get('/tambah', 'PupukController@create')->name('create')->middleware('role:produsen');
        Route::post('/tambah', 'PupukController@store')->name('store')->middleware('role:produsen');
        Route::get('/{id}/edit', 'PupukController@edit')->name('edit')->middleware('role:produsen');
        Route::patch('/{id}/edit', 'PupukController@update')->name('update')->middleware('role:produsen');
        Route::delete('/{id}/hapus', 'PupukController@destroy')->name('delete')->middleware('role:produsen');
    });
    Route::group(['prefix' => 'pengaturan'], function () {                // unimplemented
        Route::get('/', 'SettingController@index')->name('pupuk')->middleware('role:produsen');
        Route::post('/perbarui', 'SettingController@store')->name('store')->middleware('role:produsen');
    });
});
