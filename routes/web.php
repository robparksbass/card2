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

// Route::get('/', function () {
//     $businesses = App\Business::all();
//     return view('capstone', compact('businesses'));
// });

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/add', function () {
    return view('add');
});

Route::get('/businesses', 'BusinessesController@index');

Route::get('/businesses/{business}', 'BusinessesController@show');

Route::get('/cards', function () {
    return view('cards');
});

Route::get('/footer', function () {
    return view('footer');
});

Route::get('/header', function () {
    return view('header');
});