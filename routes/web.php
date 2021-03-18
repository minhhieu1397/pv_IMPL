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
Route::get('/login', 'User\AuthController@showLoginForm')->name('user.login');
Route::post('/login', 'User\AuthController@login')->name('user.login.post');
Route::get('/register', 'User\AuthController@showRegisterForm')->name('user.register');
Route::post('/register', 'User\AuthController@register')->name('user.register.post');
Route::get('/logout', 'User\AuthController@logout')->name('user.logout');
//products

Route::group(['namespace' => 'User', 'middleware' => 'user'], function () {
	Route::get('/product/index', 'ProductsController@index')->name('user.product.index');
	Route::get('/product/{product}/sell', 'ProductsController@sellProduct')->name('user.products.sell');
	//User
	Route::get('/users/register_sell', 'UsersController@registerSell')->name('user.register_sell');
	Route::get('/users/change_role', 'UsersController@changeRole')->name('user.change_role');
	Route::get('/users/cart', 'UsersController@myCart')->name('user.users.cart');

	//Sell
	Route::get('/users/sell/index', 'UsersController@registerSell')->name('user.user.sell');
});

//ShopAssistant
Route::get('ShopAssistant/login', 'ShopAssistant\AuthController@showLoginForm')->name('shop_assistant.login');
Route::post('ShopAssistant/login', 'ShopAssistant\AuthController@login')->name('shop_assistant.login.post');
Route::get('ShopAssistant/logout', 'ShopAssistant\AuthController@logout')->name('shop_assistant.logout');

Route::group(['namespace' => 'ShopAssistant', 'middleware' => 'seller'], function () {
	Route::get('ShopAssistant/index', 'ShopAssistantsController@index')->name('shop_assistant.index');

	//product 
	Route::get('ShopAssistant/products/index', 'ProductsController@index')->name('shop_assistant.products.index');
	Route::get('ShopAssistant/products/create', 'ProductsController@create')->name('shop_assistant.products.create');
	Route::post('ShopAssistant/products/store', 'ProductsController@store')->name('shop_assistant.product.store');
	Route::get('ShopAssistant/products/status', 'ProductsController@status')->name('shop_assistant.products.status');

	Route::put('ShopAssistant/{purchase}/update', 'PurchasesController@updateStatus')->name('user.purchases.updateStatus');
});



