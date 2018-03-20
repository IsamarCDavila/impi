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
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/archivos', 'HomeController@archivos')->name('archivos');
Route::get('/addarchivos', 'HomeController@subir')->name('subir');
Route::get('/status', 'HomeController@status')->name('status');
Route::post('/crear-archivo', 'ArchivosController@creararchivo');
