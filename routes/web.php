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


// Route::get('/404', function () {
//     return view('pages.404');
// });
// Route::get('/about', function () {
//     return view('pages.about');
// });
// Route::get('/checkout', function () {
//     return view('pages.checkout')
// });
// Route::get('/contact', function () {
//     return view('pages.contact');
// });
// Route::get('/customer', function () {
//     return view('pages.customer');
// });
// Route::get('/payment', function () {
//     return view('pages.payment');
// });
// // Route::get('/shop', function () {
// //     return view('pages.shop');
// // });
// Route::get('/single', function () {
//     return view('pages.single');
// });
// Route::resource('/404', '404Controller');

Route::get('/', 'HomeController@index');
Route::get('/product/{url}', 'ProductsController@show');
Route::get('/product/all/search', 'ProductsController@search')->name('product.search');
Route::get('/product', 'ProductsController@index')->name('product.all');

Route::post('/', 'ProductsController@addcart')->name('add.cart');
Route::get('/cart', 'ProductsController@cart')->name('product.cart');
Route::match(['get','post'], '/checkout', 'ProductsController@checkout')->name('product.checkout');


Route::get('/profile', 'UsersController@profile')->name('users.profile');
Route::get('/profile/edit', 'UsersController@edit')->name('users.edit');
Route::post('/profile/update', 'UsersController@update')->name('users.update');

Route::resource('/about', 'AboutController');
// Route::resource('/checkout', 'CheckoutController');
Route::resource('/contact', 'ContactController');
Route::resource('/customer', 'CustomerController');
Route::resource('/payment', 'PaymentController');
Route::resource('/single', 'SingleController');

Auth::routes();
