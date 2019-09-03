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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/login', function () {
//     return view('siswa.login2');
// });


Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin')->name('postlogin');
Route::get('/logout', 'AuthController@logout')->name('logout');

// Route::group(['middleware'=> ['auth', 'checkRole:admin']], function(){
	Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
	Route::get('/siswa', 'SiswaController@index')->name('data_siswa');
	Route::post('/siswa/tambah', 'SiswaController@create')->name('tambah_siswa');
	Route::get('/siswa/{id}/edit', 'SiswaController@edit')->name('edit_siswa');
	Route::post('/siswa/{id}/update', 'SiswaController@update')->name('update_siswa');
	Route::get('/datasiswa/{id}/delete', 'SiswaController@destroy');
	Route::get('/siswa/{id}/detail', 'SiswaController@detail')->name('detail');
// });
