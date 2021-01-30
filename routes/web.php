<?php

use App\Http\Controllers\Front\AboutController;
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

Route::namespace('Auth')->group(function() {

    Route::post('/register','RegistrationController@store')->name('register');
    Route::get('/login','SessionsController@index')->name('login-page');
    Route::post('/login','SessionsController@store')->name('login');
    Route::get('/logout','SessionsController@logout')->name('logout');

});


Route::namespace('Front')->group(function() {

    Route::get('/', 'productsController@index')->name('home');
    Route::get('product/{id}', 'productsController@show')->name('singleProduct');
    Route::get('/category{id}', 'CategoryController@show')->name('categoryPage');
    Route::get('/price-range', 'CategoryController@range')->name('priceRange');


    Route::get('/contact', 'ContactController@index')->name('contactPage');
    Route::post('/contact', 'ContactController@store')->name('sendEmail');

    Route::get('/search', 'SearchController@search')->name('search');




    Route::get('/cart','CartController@index')->name('cart.list');
    Route::get('add-to-cart', 'CartController@addToCart')->name('addToCart');
    Route::get('add-to-cart/plus', 'CartController@plus')->name('quantityPlus');
    Route::get('add-to-cart/minus', 'CartController@minus')->name('quantityMinus');
    Route::delete('delete-from-cart', 'CartController@delete')->name('deleteItemFromCart');

    Route::get('/about-us', 'AboutController@index')->name('aboutUs');




});

Route::middleware('auth')->namespace('Front')->group(function() {


    Route::post('makeorder', 'CartController@store')->name('makeOrder');
    Route::get('myorders', 'MyOrdersController@index')->name('myorders');
    Route::get('order/{id}', 'MyOrdersController@show')->name('order_details');
    Route::post('review/{id}', 'MyOrdersController@review')->name('makereview');
    Route::delete('delete-review/{id}', 'MyOrdersController@deleteReview')->name('delete_review');

});

Route::namespace('Dashboard')->as('admin.')->middleware('role:admin')->group(function() {

    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('/dashboard/categories', 'CategoriesController@index')->name('categories.index');
    Route::post('/dashboard/categories/store', 'CategoriesController@store')->name('categories.store');
    Route::get('/dashboard/categories/edit', 'CategoriesController@edit')->name('categories.edit');
    Route::post('/dashboard/categories/update', 'CategoriesController@update')->name('categories.update');
    Route::delete('/dashboard/categories','CategoriesController@destroy')->name('categories.delete');

    Route::get('/dashboard/products', 'productsController@index')->name('products.index');
    Route::post('/dashboard/products/store', 'ProductsController@store')->name('product.store');
    Route::get('/dashboard/products/edit', 'ProductsController@edit')->name('product.edit');
    Route::post('/dashboard/products/update', 'ProductsController@update')->name('product.update');
    Route::delete('/dashboard/products/delete', 'ProductsController@destroy')->name('product.delete');


    Route::resource('/dashboard/users', 'UsersController');
    Route::put('/makeadmin/{id}', 'UsersController@makeAdmin')->name('makeAdmin');
    Route::get('/dashboard/orders', 'OrdersController@index')->name('orders');
    Route::post('/dashboard/orders/approved/{id}', 'OrdersController@approved')->name('order.approved');

    Route::get('/dashboard/pages', 'AboutController@index')->name('info');
    Route::get('/dashboard/setting', 'SettingController@index')->name('setting');

    Route::put('/dashboard/setting/update/{id}', 'SettingController@update')->name('update.setting');
    Route::put('/dashboard/about/update/{id}', 'AboutController@update')->name('update.about');


});

Auth::routes();

