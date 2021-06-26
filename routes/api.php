<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('kursus', 'API\CourseController@index');

Route::get('kursus/{data}', 'API\CourseController@show');

// Route Hapus Data
Route::delete('kursus/{data}', 'API\CourseController@destroy');

// Route Tambah Data
Route::post('kursus', 'API\CourseController@store');

// Route Update Data
Route::patch('kursus/{id}', 'API\CourseController@update');


Route::get('lembaga', 'API\InstitutionController@index');

Route::get('lembaga/{data}', 'API\InstitutionController@show');

// Route Hapus Data
Route::delete('lembaga/{data}', 'API\InstitutionController@destroy');

// Route Tambah Data
Route::post('lembaga', 'API\InstitutionController@store');

// Route Update Data
Route::patch('lembaga/{id}', 'API\InstitutionController@update');




Route::get('enrollment', 'API\EnrollmentController@index');

Route::get('enrollment/{data}', 'API\EnrollmentController@show');

// Route Hapus Data
Route::delete('enrollment/{data}', 'API\EnrollmentController@destroy');

// Route Tambah Data
Route::post('enrollment', 'API\EnrollmentController@store');

// Route Update Data
Route::patch('enrollment/{id}', 'API\EnrollmentController@update');