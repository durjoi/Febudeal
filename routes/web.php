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
Route::get('/product/{id}', 'PagesController@ProductDetails')->name('product.details');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('saler')->group(function() {
  Route::get('/login', 'Auth\SalerLoginController@showLoginForm')->name('saler.login');
  Route::post('/login', 'Auth\SalerLoginController@Login')->name('saler.login.submit');
  Route::get('/register', 'Auth\SalerRegisterController@showRegisterForm')->name('saler.register');
  Route::post('/register', 'Auth\SalerRegisterController@Store')->name('saler.register.submit');


  Route::get('/', 'SalerController@Index')->name('saler.dashboard');
  Route::get('/pending', 'SalerController@Pending')->name('saler.pending');


  Route::get('/product/{id}', 'SalerController@ProductShow')->name('product.show');

  Route::get('/catagory', 'SalerController@showCatagory')->name('product.catagory');
  Route::get('/catagory/add/subcatagory/{id}', 'SalerController@showSubcatagory')->name('product.subcatagory');
  Route::get('/catagory/subcatagory/add/sub2catagory/{id}', 'SalerController@showSub2catagory')->name('product.sub2catagory');
  Route::get('/catagory/subcatagory/sub2catagory/product/{id}', 'ProductsController@showProductUploadForm')->name('product.upload.form');
  Route::post('/catagory/subcatagory/sub2catagory/product/{id}', 'ProductsController@StoreProduct')->name('product.upload.product');
  Route::post('/catagory/subcatagory/sub2catagory/product2/{id}', 'ProductsController@StoreProduct2')->name('product.upload.product2');
  Route::post('/catagory/subcatagory/sub2catagory/product3/{id}', 'ProductsController@StoreProduct3')->name('product.upload.product3');
  Route::post('/catagory/product/delete/{id}', 'ProductsController@DeleteProduct')->name('product.delete');
});

Route::get('/{catagory}', 'PagesController@catagory')->name('catagory.page');

Route::prefix('admin')->group(function() {
  Route::get('/dashboard', 'AdminController@showDashboard')->name('admin.dashboard');
  Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'Auth\AdminLoginController@Login')->name('admin.login.submit');

//Catagories All Routes
  Route::get('/catagory', 'AdminController@showCatagory')->name('admin.catagory');
  Route::get('/catagory/add/catagory', 'AdminController@addCatagory')->name('admin.catagory.add');
  Route::post('/catagory/add/catagory', 'AdminController@storeCatagory')->name('admin.catagory.add');
  Route::post('/catagory/delete/{id}', 'AdminController@deleteCatagory')->name('admin.catagory.delete');
  Route::get('/catagory/edit/{id}', 'AdminController@editCatagory')->name('admin.catagory.edit');
  Route::post('/catagory/edit/{id}', 'AdminController@upadateCatagory')->name('admin.catagory.update');

//Sub Catagories All Routes
  Route::get('/catagory/add/subcatagory/catagory/add/{id}', 'AdminController@addSubcatagory')->name('admin.subcatagory.add');
  Route::post('/catagory/add/subcatagory/catagory/add/{id}', 'AdminController@storeSubcatagory')->name('admin.subcatagory.add');
  Route::get('/catagory/add/subcatagory/catagory', 'AdminController@showCatagoryForSubcatagory')->name('admin.subcatagory.add.catagory');
  Route::post('/subcatagory/delete/{id}', 'AdminController@deleteSubcatagory')->name('admin.subcatagory.delete');
  Route::get('/subcatagory/edit/{id}', 'AdminController@editSubcatagory')->name('admin.subcatagory.edit');
  Route::post('/subcatagory/edit/{id}', 'AdminController@upadateSubcatagory')->name('admin.subcatagory.update');

//Sub2Catagories All Routes
  Route::get('/catagory/add/sub2catagory/catagory/subcatagory/add/{id}', 'AdminController@addSub2catagory')->name('admin.sub2catagory.add');
  Route::post('/catagory/add/sub2catagory/catagory/subcatagory/add/{id}', 'AdminController@storeSub2catagory')->name('admin.sub2catagory.add');
  Route::get('/catagory/add/sub2catagory/catagory', 'AdminController@showCatagoryForSub2catagory')->name('admin.sub2catagory.add.catagory');
  Route::get('/catagory/add/sub2catagory/catagory/subcatagory/{id}', 'AdminController@showSubcatagoryForSub2catagory')->name('admin.sub2catagory.add.subcatagory');
  Route::post('/sub2catagory/delete/{id}', 'AdminController@deleteSub2catagory')->name('admin.sub2catagory.delete');
  Route::get('/sub2catagory/edit/{id}', 'AdminController@editSub2catagory')->name('admin.sub2catagory.edit');
  Route::post('/sub2catagory/edit/{id}', 'AdminController@upadateSub2catagory')->name('admin.sub2catagory.update');


  Route::get('/product', 'AdminController@ProductShow')->name('admin.product.show');
  Route::post('/product/{id}', 'AdminController@ProductMakeLive')->name('admin.add.action');

  Route::get('/dotd', 'AdminController@DotdShow')->name('admin.dotd');
  Route::post('/dotd/add/{id}', 'AdminController@DotdAdd')->name('admin.dotd.add');
  Route::post('/dotd/delete/{id}', 'AdminController@DotdDelete')->name('admin.dotd.delete');
  Route::get('/dotd/catagory', 'AdminController@DotdShowCatagory')->name('admin.dotd.add.catagory');
  Route::get('/dotd/catagory/{id}', 'AdminController@DotdShowProduct')->name('admin.dotd.catagory.product');

  Route::get('/yml', 'AdminController@YmlShow')->name('admin.yml');
  Route::post('/yml/add/{id}', 'AdminController@YmlAdd')->name('admin.yml.add');
  Route::post('/yml/delete/{id}', 'AdminController@YmlDelete')->name('admin.yml.delete');
  Route::get('/yml/catagory', 'AdminController@YmlShowCatagory')->name('admin.yml.add.catagory');
  Route::get('/yml/catagory/{id}', 'AdminController@YmlShowProduct')->name('admin.yml.catagory.product');

  Route::get('/to', 'AdminController@ToShow')->name('admin.to');
  Route::post('/to/add/{id}', 'AdminController@ToAdd')->name('admin.to.add');
  Route::post('/to/delete/{id}', 'AdminController@ToDelete')->name('admin.to.delete');
  Route::get('/to/catagory', 'AdminController@ToShowCatagory')->name('admin.to.add.catagory');
  Route::get('/to/catagory/{id}', 'AdminController@ToShowProduct')->name('admin.to.catagory.product');

  Route::get('/fourthsec', 'AdminController@FourthsecShow')->name('admin.fourthsec');
  Route::post('/fourthsec/add/{id}', 'AdminController@FourthsecAdd')->name('admin.fourthsec.add');
  Route::post('/fourthsec/delete/{id}', 'AdminController@FourthsecDelete')->name('admin.fourthsec.delete');
  Route::get('/fourthsec/catagory', 'AdminController@FourthsecShowCatagory')->name('admin.fourthsec.add.catagory');
  Route::get('/fourthsec/catagory/{id}', 'AdminController@FourthsecShowProduct')->name('admin.fourthsec.catagory.product');


  Route::get('/product/{id}', 'AdminController@IndividualProductShow')->name('admin.product');

});
