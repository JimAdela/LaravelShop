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

Route::get('/', 'PagesController@root')->name('root');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
	Route::get('/email_verify_notice', 'PagesController@emailVerifyNotice')->name('email_verify_notice');
	Route::get('/email_verification/verify', 'EmailVerificationController@verify')->name('email_verification.verify');
	Route::get('email_verification/send', 'EmailVerificationController@send')->name('email_verification.send');
	Route::get('products/favorites', 'ProductsController@favorites')->name('products.favorites');

	Route::group(['middleware' => 'email_verified'], function () {
		Route::get('user_addresses', 'UserAddressesController@index')->name('user_addresses.index');
		Route::get('user_addresses/create', 'UserAddressesController@create')->name('user_addresses.create');

		Route::post('user_addresses', 'UserAddressesController@store')->name('user_addresses.store');

		Route::get('user_addresses/{user_address}', 'UserAddressesController@edit')->name('user_addresses.edit');
		Route::put('user_addresses/{user_address}', 'UserAddressesController@update')->name('user_addresses.update');
		Route::delete('user_addresses/{user_address}', 'UserAddressesController@destroy')->name('user_addresses.destroy');

		Route::post('products/{product}/favorite','ProductsController@favor')->name('products.favor');
		Route::delete('products/{product}/favorite','ProductsController@disfavor')->name('products.disfavor');
		Route::get('products/favorites','ProductsController@favorites')->name('products.favorites');
		Route::post('cart', 'CartController@add')->name('cart.add');

		Route::delete('cart/{sku}', 'CartController@remove')->name('cart.remove');

		Route::get('cart', 'CartController@index')->name('cart.index');

		Route::post('orders', 'OrdersController@store')->name('orders.store');

		Route::get('orders', 'OrdersController@index')->name('orders.index');
		Route::get('orders/{order}', 'OrdersController@show')->name('orders.show');

		Route::get('payment/{order}/alipay', 'PaymentController@payByAlipay')->name('payment.alipay');
		Route::get('payment/alipay/return', 'PaymentController@alipayReturn')->name('payment.alipay.return');

		Route::get('payment/{order}/wechat', 'PaymentController@payByWechat')->name('payment.wechat');


	});
});

Route::redirect('/', '/products')->name('root');
Route::get('products', 'ProductsController@index')->name('products.index');
Route::get('products/{product}', 'ProductsController@show')->name('products.show');

Route::post('payment/alipay/notify', 'PaymentController@alipayNotify')->name('payment.alipay.notify');

Route::post('payment/wechat/notify', 'PaymentController@wechatNotify')->name('payment.wechat.notify');


