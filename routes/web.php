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

Route::get('/hello', function () {
    $name = 'João';
    return view('/hello', compact('name'));
});

Route::get('/dbz', function () {
    $energy = 8001;
    return view('/dbz', compact('energy'));
});

Route::get('/clients', function () {
    $names = ['Teste1', 'Teste2', 'Teste3'];
    return view('/clients', compact('names'));
});



