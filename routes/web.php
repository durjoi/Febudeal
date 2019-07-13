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

Route::get('/', 'PagesController@home')->name('index');
Route::get('/about', 'PagesController@about');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('saler')->group(function() {
  Route::get('/login', 'Auth\SalerLoginController@showLoginForm')->name('saler.login');
  Route::post('/login', 'Auth\SalerLoginController@Login')->name('saler.login.submit');
  Route::get('/register', 'Auth\SalerRegisterController@showRegisterForm')->name('saler.register');
  Route::post('/register', 'Auth\SalerRegisterController@Store')->name('saler.register.submit');
  Route::get('/', 'SalerController@Index')->name('saler.dashboard');
  Route::get('/pending', 'SalerController@Pending')->name('saler.pending');
  Route::get('/upload/product/{catagory}', 'ProductsController@ShowUploadForm')->name('product.upload');
  Route::post('/upload/product', 'ProductsController@Store')->name('product.upload.submit');
  Route::get('/product/{id}', 'SalerController@show')->name('product.show');
  Route::get('/catagory', 'SalerController@showCatagory')->name('product.catagory');
});

Route::get('/{catagory}', 'PagesController@catagory')->name('catagory.page');

Route::get('admin/dashboard', 'AdminController@showDashboard')->name('admin.dashboard');
Route::get('admin/login', 'Auth\AdminLoginController@showLoginForm')->name('Admin.login');
Route::post('admin/login', 'Auth\AdminLoginController@Login')->name('Admin.login.submit');
