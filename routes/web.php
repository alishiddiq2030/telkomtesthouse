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
    return view('pages.home');
});

Route::get('/certified', function () {
    return view('pages.certified');
});

Route::get('/login', function () {
    return view('pages.authentication');
});

Route::get('/procedure', function () {
    return view('pages.procedure');
});

Route::get('/tarif', function () {
    return view('pages.tarif');
});

Route::get('/purchase', function () {
    return view('pages.purchase_history');
});

Route::get('/progress', function () {
    return view('pages.progress');
});

Route::get('/buy_stel', function () {
    return view('pages.buy_stel');
});

Route::get('/process', function () {
    return view('pages.process');
});