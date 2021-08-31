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
$nome = 'ahaushd';
Route::get('/', function () use ($nome) {
    return view('welcome', compact('nome'));
});

Route::get('cities', 'Projeto\CityController@index');
