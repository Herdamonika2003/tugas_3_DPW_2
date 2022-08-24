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
    return view('index');
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('cart',function () {
    return view('cart');
});

Route::get('category',function () {
    return view('category');
});

Route::get('checkout',function () {
    return view('checkout');
});

Route::get('login',function () {
    return view('login');
});

Route::get('confirmation',function () {
    return view('confirmation');
});

Route::get('elements',function () {
    return view('elements');
});

Route::get('feature',function () {
    return view('feature');
});

Route::get('/tamplate', function () {
    return view('tamplate.base');
});

Route::get('/base', function () {
    return view('admin.base');
});

Route::get('/beranda', function () {
    return view('admin.section.beranda');
});

Route::get('/produk', function () {
    return view('admin.section.produk');
});

Route::get('/kategori', function () {
    return view('admin.section.kategori');
});

Route::get('/login_admin', function () {
    return view('admin.section.login_admin');
});  

