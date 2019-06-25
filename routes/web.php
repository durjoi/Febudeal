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
//     return view('layouts.master');
// });

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('saler')->group(function() {
  Route::get('/login', 'Auth\SalerLoginController@showLoginForm')->name('saler.login');
  Route::post('/login', 'Auth\SalerLoginController@Login')->name('saler.login.submit');
  Route::get('/', 'SalerController@index')->name('saler.dashboard');
});
