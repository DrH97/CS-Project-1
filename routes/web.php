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
    return view('index');
});

Route::get('/profile', function () {
    return view('user_account');
});

Route::get('/profile/update', function () {
    return view('user_account_update');
})->middleware('auth');

Route::get('/rating', function () {
    return view('rating');
});

Route::get('/repairs', function () {
    return view('repairs');
});

Route::get('/mycart', function () {
    return view('mycart');
});

Route::get('/admin', function () {
    return view('admin.admin');
});

Auth::routes();

Route::resource('addProduct', 'HardwareProductsController@st')->middleware('auth');;