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

// PROFILE

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/certification', function () {
    return view('pages.certification');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

// SERVICE

Route::get('/procedure', function () {
    return view('pages.procedure');
});

Route::get('/tarif', function () {
    return view('pages.tarif');
});

// CERTIFIED

Route::get('/certified', function () {
    return view('pages.certified');
});

// REFERENCES

Route::get('/stel', function () {
    return view('pages.stel');
});

Route::get('/sstel', function () {
    return view('pages.sstel');
});

// TESTING

Route::get('/progress', function () {
    return view('pages.progress');
});

Route::get('/process', function () {
    return view('pages.process');
});
Route::get('/qa', function () {
    return view('pages.qa');
});

Route::get('/purchase', function () {
    return view('pages.purchase_history');
});

Route::get('/buy_stel', function () {
    return view('pages.buy_stel');
});

Route::get('/cart', function () {
    return view('pages.shopping_cart');
});

Route::get('/checkout', function () {
    return view('pages.checkout');
});

// AUTH

Route::get('/login', function () {
    return view('pages.authentication');
});

Route::get('/register', function () {
    return view('pages.registration');
});

// EXAMPLE

Route::get('/example', function () {
    return view('pages.example');
});

// EXAMPLE

Route::get('/faq', function () {
    return view('pages.faq');
});