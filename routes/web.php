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
    return view('home');
});

Route::get('/students', function () {
    return view('students');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/schedule', function () {
    return view('schedule');
});

Route::post('/save-post','PostController@save_post');
Route::post('/update-post','PostController@update_post');
Route::get('/get-product','PostController@get_product');
Route::get('/del-product/{id}','PostController@del_product');
Route::get('/edit-product/{id}','PostController@edit_product');

Route::post('/save-student','StudentController@save_student');
Route::post('/update-student','StudentController@update_student');
Route::get('/get-students','StudentController@get_students');
Route::get('/del-student/{id}','StudentController@del_student');
Route::get('/edit-student/{id}','StudentController@edit_student');
