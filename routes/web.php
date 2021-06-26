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
})->name('home');

Route::get('/cv', 'HomeController@index')->name('cv-saya');
Route::get('/about', 'HomeController@about')->name('tentang');

// route untuk tabel course menggunakan method resource
Route::resource('course', 'CourseController');
// route untuk mengambil data dari tabel course
Route::get('/kursus', 'CourseController@index')->name('course.index');
// route untuk membuka form input course
Route::get('/kursus/create', 'CourseController@create')->name('course.create');
// route untuk menyimpan data course
Route::post('/kursus/store', 'CourseController@store')->name('course.store');

// route untuk institusi
Route::get('/lembaga', 'InstitutionController@index');

// Route UTS
Route::get('/kelompoka', 'AController@index');
Route::get('/kelompoka/create', 'AController@create')->name('create');
Route::post('kelompoka/store', 'AController@store')->name('store');
