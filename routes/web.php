<?php

use Illuminate\Support\Facades\Auth;
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


// route admin
Route::prefix('admin')->namespace('Admin')
->middleware('auth', 'admin')
->group(function(){
    Route::get('/', 'DashboardController@index')->name('dashboard');

    // Pelajar
    Route::get('/pelajar/index', 'PelajarController@index')->name('pelajar.index');
    Route::get('/pelajar/create', 'PelajarController@create')->name('pelajar.create');
    Route::post('/pelajar/store', 'PelajarController@store')->name('pelajar.store');
    Route::get('/pelajar/edit/{id}', 'PelajarController@edit')->name('pelajar.edit');
    Route::put('/pelajar/update/{id}', 'PelajarController@update')->name('pelajar.update');
    Route::get('/pelajar/destroy/{id}', 'PelajarController@destroy')->name('pelajar.destroy');

    // kelas
    Route::get('/kelas/index', 'KelasController@index')->name('kelas.index');
    Route::get('/kelas/create', 'KelasController@create')->name('kelas.create');
    Route::post('kelas/store', 'KelasController@store')->name('kelas.store');
    Route::get('/kelas/edit/{id}', 'KelasController@edit')->name('kelas.edit');
    Route::put('/kelas/update/{id}', 'KelasController@update')->name('kelas.update');
    Route::get('/kelas/destroy/{id}', 'KelasController@destroy')->name('kelas.destroy');

    // guru
    Route::get('/guru/index', 'GuruController@index')->name('guru.index');
    Route::get('/guru/create', 'GuruController@create')->name('guru.create');
    Route::post('/guru/store', 'GuruController@store')->name('guru.store');
    Route::get('/guru/edit/{id}', 'GuruController@edit')->name('guru.edit');
    Route::put('/guru/update/{id}', 'GuruController@update')->name('guru.update');
    Route::get('/guru/destroy/{id}', 'GuruController@destroy')->name('guru.destroy');


// mapel
Route::get('/mapel/index', 'MapelController@index')->name('mapel.index');
Route::get('/mapel/create', 'MapelController@create')->name('mapel.create');
Route::post('/mapel/store', 'MapelController@store')->name('mapel.store');
Route::get('/mapel/edit/{id}', 'MapelController@edit')->name('mapel.edit');
Route::put('/mapel/updaate/{id}', 'MapelController@update')->name('mapel.update');
Route::get('/mapel/destroy/{id}', 'MapelController@destroy')->name('mapel.destroy');


});



// halaman siswa
Route::prefix('siswa')->namespace('Siswa')
->middleware('auth', 'user')
->group(function(){
    Route::get('/', 'HalamanUtamaController@halaman_utama')->name('siswa.hutama');
    Route::get('/datadiri', 'DataDiriController@datadiri')->name('siswa.data_diri');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
