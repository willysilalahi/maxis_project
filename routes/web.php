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








Route::get('/login', 'AuthController@login')->name('login');
Route::get('/logout', 'AuthController@logout')->name('logout');
Route::post('/login', 'AuthController@postlogin')->name('auth.postlogin');
Route::post('/register', 'AuthController@postlogin')->name('auth.postlogin');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('home');
    })->name('home');

    Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');
    Route::get('/profil', 'DashboardController@profil')->name('dashboard.profil');
    Route::get('/profil/{id}', 'DashboardController@profilEdit')->name('dashboard.profil.edit');
    Route::prefix('siswa')->group(function () {
        Route::get('/', 'SiswaController@index')->name('siswa.index');
        Route::post('/', 'SiswaController@addSiswa')->name('siswa.addSiswa');
        Route::get('/{id}/edit', 'SiswaController@editSiswa')->name('siswa.editSiswa');
        Route::patch('/{id}', 'SiswaController@updateSiswa')->name('siswa.updateSiswa');
        Route::delete('/{id}', 'SiswaController@deleteSiswa')->name('siswa.deleteSiswa');
    });
    Route::prefix('guru')->group(function () {
        Route::get('/', 'GuruController@index')->name('guru.index');
        Route::post('/', 'GuruController@addGuru')->name('guru.addGuru');
        Route::get('/{id}/edit', 'GuruController@editGuru')->name('guru.editGuru');
        Route::patch('/{id}', 'GuruController@updateGuru')->name('guru.updateGuru');
        Route::delete('/{id}', 'GuruController@deleteGuru')->name('guru.deleteGuru');
    });
});
