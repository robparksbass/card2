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

Route::get('/businesses', 'BusinessesController@index')->name('businesses');

Route::get('/businesses/{business}', 'BusinessesController@show');

Route::get('/cards', 'CardsController@index')->name('cards');

Route::get('/cards/{card}', 'CardsController@show');

Route::get('/cards/add', 'CardsController@add')->name('add');

// Route::get('/footer', function () {
//     return view('footer');
// });

// Route::get('/header', function () {
//     return view('header');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
