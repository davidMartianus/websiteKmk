<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('admin','projectController@show');
Route::get('admin/tulis-event','projectController@tulis');
Route::post('admin/store-event','projectController@storeEvent');
Route::get('admin/delevent/{id}','projectController@deleteEvent');
Route::get('admin/lihat-event','projectController@lihat');
Route::get('admin/tulis-renungan','projectController@tulisRenungan');
Route::get('admin/lihat-renungan','projectController@lihatRenungan');
Route::get('admin/pengurus','projectController@pengurus');



Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/event','projectController@viewEvent');
Route::get('/user/renungan','projectController@viewRenungan');
