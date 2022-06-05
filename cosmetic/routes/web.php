<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => '', 'namespace' => 'Home'], function(){
    Route::get('/','HomeController@index')->name('home.index');
    Route::get('/product','ShopController@index')->name('shop.index');
    Route::get('/product/product-detail/{id}','ProductDetailController@index')->name('product_detail.index');
    Route::get('/blog' , 'BlogController@index')->name('blogs.index');
    Route::get('/blogdetail/{id}' , 'BlogdetailController@index')->name('blogdetails.index');
    Route::get('/about' , 'AboutController@index')->name('abouts.index');
    Route::get('/contact' , 'FeedbackController@index')->name('feedbacks.index');
    Route::post('/contact/post_feedback', 'FeedbackController@post_feedback')->name('feedbacks.post_feedback');
    Route::get('/service' , 'ServiceController@index')->name('cusservices.index');
    Route::post('/service/post_service', 'CartServiceController@add')->name('service.post_service');
});

Route::group(['prefix' => 'cart', 'namespace' => 'Home', 'middleware' => 'cus'], function(){
    Route::get('/add/{id}','CartController@add')->name('cart.add');
    Route::get('/remove/{id}/{color_id}','CartController@remove')->name('cart.remove');
    Route::get('/update/{id}','CartController@update')->name('cart.update');
    Route::get('clear','CartController@clear')->name('cart.clear');
    Route::get('view','CartController@view')->name('cart.view');

});

Route::group(['prefix' => 'cart-service', 'namespace' => 'Home', 'middleware' => 'cus'], function(){
    Route::get('/add/{id}','CartServiceController@add')->name('cart_service.add');
    Route::get('/remove/{id}','CartServiceController@remove')->name('cart_service.remove');
    Route::get('/update/{id}','CartServiceController@update')->name('cart_service.update');
    Route::get('clear','CartServiceController@clear')->name('cart_service.clear');
    Route::get('view','CartServiceController@view')->name('cart_service.view');

});

Route::group(['prefix' => 'customer', 'namespace' => 'Home'], function(){
    Route::get('/login','CustomerController@login')->name('customer.login');
    Route::post('/login','CustomerController@check_login')->name('customer.login');
    Route::get('/register','CustomerController@register')->name('customer.register');
    Route::post('/register','CustomerController@post_register')->name('customer.register');
    Route::get('/profile','CustomerController@profile')->name('customer.profile')->middleware('cus');
    Route::get('/logout','CustomerController@logout')->name('customer.logout');
    Route::get('/reset','CustomerController@reset')->name('customer.reset');
    Route::post('/reset','CustomerController@post_reset')->name('customer.post_reset');
    Route::get('/confirm','CustomerController@confirm')->name('customer.confirm');
    Route::post('/confirm','CustomerController@post_confirm')->name('customer.post_confirm');

});

Route::group(['prefix' => 'order', 'namespace' => 'Home', 'middleware' => 'cus'], function(){
    Route::get('/checkout','OrderController@checkout')->name('order.checkout');
    Route::post('/checkout','OrderController@post_checkout')->name('order.checkout');
    Route::get('/success','OrderController@success')->name('order.success');
    Route::get('/history','OrderController@history')->name('order.history');
    Route::get('/confirm','OrderController@confirm')->name('order.confirm');
    Route::get('/detail/{id}','OrderController@detail')->name('order.detail');


});

Route::group(['prefix' => 'book', 'namespace' => 'Home', 'middleware' => 'cus'], function(){
    Route::get('/checkout','BookController@checkout')->name('book.checkout');
    Route::post('/checkout','BookController@post_checkout')->name('book.checkout');
    Route::get('/success','BookController@success')->name('book.success');
    Route::get('/history','BookController@history')->name('book.history');
    Route::get('/confirm','BookController@confirm')->name('book.confirm');
    Route::get('/detail/{id}','BookController@detail')->name('book.detail');
    Route::get('/pdf/{id}','OrderController@pdf')->name('order.pdf');


});

Route::get('/admin/account/login','Admin\AccController@login')->name('admin.account.login');
Route::post('/admin/account/login','Admin\AccController@check_login')->name('admin.account.check_login');

Route::get('/admin/account/register','Admin\AccController@register')->name('admin.account.register');
Route::post('/admin/account/register','Admin\AccController@post_register')->name('admin.account.post_register');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'] , function(){
    Route::get('/','AdminController@index')->name('admin.index');
    Route::get('/account/logout','AccController@logout')->name('admin.account.logout');

    Route::post('/category/delete-all','CategoryController@delete_all')->name('category.delete_all');
    Route::post('/color/delete-all','ColorController@delete_all')->name('color.delete_all');
    Route::post('/banner/update-prioty','BannerController@updatePrioty')->name('banner.updatePrioty');

    Route::resource('category', 'CategoryController');
    Route::resource('color', 'ColorController');
    Route::resource('product', 'ProductController');
    Route::resource('banner', 'BannerController');
    Route::resource('brand', 'BrandController');
    Route::resource('service', 'ServiceController');
    Route::resource('blog', 'BlogController');
    Route::resource('blogdetail', 'BlogdetailController');
    Route::resource('about', 'AboutController');
    Route::resource('customer', 'CustomerController');
    Route::resource('feedback', 'FeedbackController');
    Route::resource('order', 'OrderController');


    Route::group(['prefix' => 'order'] , function(){
        Route::get('/','OrderController@index')->name('order.index');
        Route::get('/detail/{id}','OrderController@detail')->name('admin.order.detail');

    });
});