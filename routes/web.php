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
    return view('main');
})->name('main');

Route::get('/acusticas', function () {
    return view('acusticas');
})->name('acusticas');

Route::get('/bass', function () {
    return view('bass');
})->name('bass');

Route::get('/pianos', function () {
    return view('pianos');
})->name('pianos');

Route::get('/electricas', function () {
    return view('electricas');
})->name('electricas');
