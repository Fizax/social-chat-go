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
    return view('welcome');
});

Route::resource('/account/interests', 'InterestsController');

Route::resource('account', 'accountController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/map', 'mapController');

Route::resource('/chat', 'chatController');

Route::get('/picture', 'pictureController@index');

Route::get('/api', 'mapController@ajax');


Route::get('/marker', function () {
    return view('marker');
});
