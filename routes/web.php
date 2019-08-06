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
Route::get('/catagory/{id}', 'PagesController@CatagoryProducts')->name('catagory.products');
Route::get('/subcatagory/{id}', 'PagesController@SubcatagoryProducts')->name('subcatagory.products');
Route::get('/sub2catagory/{id}', 'PagesController@Sub2catagoryProducts')->name('sub2catagory.products');
Route::get('/allcatagory', 'PagesController@CatagoryAllProducts')->name('catagory.all.products');

Route::get('/sectionone', 'PagesController@SectionOne')->name('product.firstsection');
Route::get('/sectiontwo', 'PagesController@SectionTwo')->name('product.sectiontwo');
Route::get('/sectionthree', 'PagesController@SectionThree')->name('product.sectionthree');
Route::get('/sectionfour', 'PagesController@SectionFour')->name('product.sectionfour');
Route::get('/sectionfive', 'PagesController@SectionFive')->name('product.sectionfive');
Route::get('/sectionsix', 'PagesController@SectionSix')->name('product.sectionsix');
Route::get('/sectionseven', 'PagesController@SectionSeven')->name('product.sectionseven');
Route::get('/sectioneight', 'PagesController@SectionEight')->name('product.sectioneight');
Route::get('/sectionnine', 'PagesController@SectionNine')->name('product.sectionnine');
Route::get('/sectionten', 'PagesController@SectionTen')->name('product.sectionten');


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


  Route::get('/fifthsec', 'AdminController@FifthsecShow')->name('admin.fifthsec');
  Route::post('/fifthsec/add/{id}', 'AdminController@FifthsecAdd')->name('admin.fifthsec.add');
  Route::post('/fifthsec/delete/{id}', 'AdminController@FifthsecDelete')->name('admin.fifthsec.delete');
  Route::get('/fifthsec/catagory', 'AdminController@FifthsecShowCatagory')->name('admin.fifthsec.add.catagory');
  Route::get('/fifthsec/catagory/{id}', 'AdminController@FifthsecShowProduct')->name('admin.fifthsec.catagory.product');

  Route::get('/sixthsec', 'AdminController@SixthsecShow')->name('admin.sixthsec');
  Route::post('/sixthsec/add/{id}', 'AdminController@SixthsecAdd')->name('admin.sixthsec.add');
  Route::post('/sixthsec/delete/{id}', 'AdminController@SixthsecDelete')->name('admin.sixthsec.delete');
  Route::get('/sixthsec/catagory', 'AdminController@SixthsecShowCatagory')->name('admin.sixthsec.add.catagory');
  Route::get('/sixthsec/catagory/{id}', 'AdminController@SixthsecShowProduct')->name('admin.sixthsec.catagory.product');


  Route::get('/seventhsec', 'AdminController@SeventhsecShow')->name('admin.seventhsec');
  Route::post('/seventhsec/add/{id}', 'AdminController@SeventhsecAdd')->name('admin.seventhsec.add');
  Route::post('/seventhsec/delete/{id}', 'AdminController@SeventhsecDelete')->name('admin.seventhsec.delete');
  Route::get('/seventhsec/catagory', 'AdminController@SeventhsecShowCatagory')->name('admin.seventhsec.add.catagory');
  Route::get('/seventhsec/catagory/{id}', 'AdminController@SeventhsecShowProduct')->name('admin.seventhsec.catagory.product');

  Route::get('/eightsec', 'AdminController@EightsecShow')->name('admin.eightsec');
  Route::post('/eightsec/add/{id}', 'AdminController@EightsecAdd')->name('admin.eightsec.add');
  Route::post('/eightsec/delete/{id}', 'AdminController@EightsecDelete')->name('admin.eightsec.delete');
  Route::get('/eightsec/catagory', 'AdminController@EightsecShowCatagory')->name('admin.eightsec.add.catagory');
  Route::get('/eightsec/catagory/{id}', 'AdminController@EightsecShowProduct')->name('admin.eightsec.catagory.product');

  Route::get('/ninthsec', 'AdminController@NinthsecShow')->name('admin.ninthsec');
  Route::post('/ninthsec/add/{id}', 'AdminController@NinthsecAdd')->name('admin.ninthsec.add');
  Route::post('/ninthsec/delete/{id}', 'AdminController@NinthsecDelete')->name('admin.ninthsec.delete');
  Route::get('/ninthsec/catagory', 'AdminController@NinthsecShowCatagory')->name('admin.ninthsec.add.catagory');
  Route::get('/ninthsec/catagory/{id}', 'AdminController@NinthsecShowProduct')->name('admin.ninthsec.catagory.product');


  Route::get('/tenthsec', 'AdminController@TenthsecShow')->name('admin.tenthsec');
  Route::post('/tenthsec/add/{id}', 'AdminController@TenthsecAdd')->name('admin.tenthsec.add');
  Route::post('/tenthsec/delete/{id}', 'AdminController@TenthsecDelete')->name('admin.tenthsec.delete');
  Route::get('/tenthsec/catagory', 'AdminController@TenthsecShowCatagory')->name('admin.tenthsec.add.catagory');
  Route::get('/tenthsec/catagory/{id}', 'AdminController@TenthsecShowProduct')->name('admin.tenthsec.catagory.product');


  Route::get('/HomepageSectionName/Edit', 'HomepageSectionNameController@EditFormShow')->name('admin.section.name.edit');
  Route::post('/HomepageSectionName/update/{id}', 'HomepageSectionNameController@UpdateName')->name('section.name.update');
  //Hero banner
  Route::get('/herobanner', 'BannerController@showHerobanner')->name('admin.herobanner');
  Route::get('/herobannerForm', 'BannerController@showHerobannerUploadForm')->name('admin.herobannerUploadForm');
  Route::post('/herobanner/upload', 'BannerController@HerobannerStore')->name('admin.herobanner.store');
  Route::get('/herobanner/edit/{id}', 'BannerController@HerobannerEdit')->name('admin.herobanner.edit');
  Route::post('/herobanner/update/{id}', 'BannerController@HerobannerUpdate')->name('admin.herobanner.update');
  Route::post('/herobanner/delete/{id}', 'BannerController@HerobannerDelete')->name('admin.herobanner.delete');
  //First Banner
  Route::get('/firstbanner', 'BannerController@showFirstbanner')->name('admin.firstbanner');
  Route::get('/firstbannerForm', 'BannerController@showFirstbannerUploadForm')->name('admin.firstbannerUploadForm');
  Route::post('/firstbanner/upload', 'BannerController@FirstbannerStore')->name('admin.firstbanner.store');
  Route::get('/firstbanner/edit/{id}', 'BannerController@FirstbannerEdit')->name('admin.firstbanner.edit');
  Route::post('/firstbanner/update/{id}', 'BannerController@FirstbannerUpdate')->name('admin.firstbanner.update');
  Route::post('/firstbanner/delete/{id}', 'BannerController@FirstbannerDelete')->name('admin.firstbanner.delete');


  Route::get('/product/{id}', 'AdminController@IndividualProductShow')->name('admin.product');

});
