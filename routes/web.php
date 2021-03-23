<?php

use Illuminate\Support\Facades\Route;

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

Route::get('bienvenida', function () {
    return view('bienvenida');
});

Route::get('enlacelogin', function () {
    return view('login');
});

Route::get('enlaceregistro', function () {
    return view('registro');
});

Route::get('reg_arbitro', function () {
    return view('reg_arbitro');
});

Route::get('presentacion', function () {
    return view('presentacion');
});