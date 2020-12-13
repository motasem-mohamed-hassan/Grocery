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
    Route::post('/login','SessionsController@store')->name('login');
    Route::get('/logout','SessionsController@logout')->name('logout');

});


Route::namespace('Front')->group(function() {

    Route::get('/', 'productsController@index')->name('home');

});

Route::namespace('Dashboard')->as('admin.')->middleware('role:admin')->group(function() {

    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::resource('/dashboard/categories', 'CategoriesController');
    Route::resource('/dashboard/products', 'ProductsController');
    Route::resource('/dashboard/users', 'UsersController');
    Route::put('/makeadmin/{id}', 'UsersController@makeAdmin')->name('makeAdmin');

});
