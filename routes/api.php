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


//Route Institution
Route::get('institution', 'API\InstitutionController@index');

Route::get('institution/{data}', 'API\InstitutionController@show');

// Route Hapus Data
Route::delete('institution/{data}', 'API\InstitutionController@destroy');

// Route Tambah Data
Route::post('institution', 'API\InstitutionController@store');

// Route Update Data        
Route::patch('institution/{id}', 'API\InstitutionController@update');
