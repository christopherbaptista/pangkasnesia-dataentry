<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LayananController;


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
    return view('welcome', ['title' => 'Pangkasnesia']);
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/layanan', '\App\Http\Controllers\LayananController@data');

Route::get('/layanan/add', '\App\Http\Controllers\LayananController@add');

Route::post('/layanan', '\App\Http\Controllers\LayananController@addProcess');