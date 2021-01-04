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

Route::namespace('Auth')->group(function() {

    Route::post('/register','RegistrationController@store')->name('register');
    Route::get('/login','SessionsController@index')->name('login-page');
    Route::post('/login','SessionsController@store')->name('login');
    Route::get('/logout','SessionsController@logout')->name('logout');

});


Route::namespace('Front')->group(function() {

    Route::get('/', 'productsController@index')->name('home');
    Route::get('product/{id}', 'ProductsController@show')->name('singleProduct');
    Route::get('/category{id}', 'CategoryController@show')->name('categoryPage');
    Route::get('/contact', 'ContactController@index')->name('contactPage');
    Route::post('/contact', 'ContactController@store')->name('sendEmail');

});

Route::middleware('auth')->namespace('Front')->group(function() {
    Route::get('/cart','CartController@index')->name('cart.list');
    Route::get('add-to-cart/{id}', 'CartController@addToCart')->name('addToCart');
    Route::delete('delete-from-cart/{id}', 'CartController@delete')->name('remove');
    Route::post('makeorder', 'CartController@store')->name('makeOrder');
    Route::get('myorders', 'MyOrdersController@index')->name('myorders');
    Route::get('order/{id}', 'MyOrdersController@show')->name('order_details');
    Route::post('review/{id}', 'MyOrdersController@review')->name('makereview');
    Route::delete('delete-review/{id}', 'MyOrdersController@deleteReview')->name('delete_review');

});

Route::namespace('Dashboard')->as('admin.')->middleware('role:admin')->group(function() {

    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::resource('/dashboard/categories', 'CategoriesController');
    Route::resource('/dashboard/products', 'ProductsController');
    Route::resource('/dashboard/users', 'UsersController');
    Route::put('/makeadmin/{id}', 'UsersController@makeAdmin')->name('makeAdmin');
    Route::get('/dashboard/orders', 'OrdersController@index')->name('orders');
    Route::get('/dashboard/inbox','MessagesController@index')->name('inbox');
    Route::get('/dashboard/message/{id}', 'MessagesController@show')->name('message.show');
    Route::delete('/dashboard/message/{id}', 'MessagesController@destroy')->name('message.destroy');

});

Auth::routes();

