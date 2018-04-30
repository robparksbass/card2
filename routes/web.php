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

Route::get('/about', function () {
    return view('about');
});

Route::get('/formAction', function () {
    return view('formAction');
});

Route::get('/businesses', 'BusinessesController@index')->name('businesses');

Route::get('/businesses/{business}', 'BusinessesController@show');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::prefix('cards')->middleware('auth')->group(function(){
    Route::get('/', 'CardsController@index')->name('cards');
    Route::get('/{card}', 'CardsController@show');
    Route::get('/cards/add', 'CardsController@add')->name('add');
    Route::post('/', 'CardsController@store');
});

Route::prefix('manage')->middleware('role:administrator')->group(function(){
    Route::get('/', 'ManageController@index');
    Route::get('/dashboard', 'ManageController@dashboard')->name('manage.dashboard');
    Route::resource('/users', 'UserController');
    Route::get('/roles', function () {
        return view('manage/users/roles');
    });
    Route::get('/search', [
        'as' => 'api.search',
        'uses' => 'Api\SearchController@search'
    ]);
});