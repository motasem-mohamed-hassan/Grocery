<?php

use App\Http\Controllers\Front\AboutController;

use Illuminate\Support\Facades\Route;


Route::namespace('Front')->group(function() {

    Route::get('/', 'productsController@index')->name('home'); #need search and select boxs
    Route::get('product/{id}', 'productsController@show')->name('singleProduct');   #need data
    Route::get('/category/{id}', 'CategoryController@show')->name('categoryPage');   #need data and select box
    Route::get('/price-range', 'CategoryController@range')->name('priceRange');     #need to add slider
    Route::get('/contact', 'ContactController@index')->name('contactPage');         #data
    Route::post('/contact', 'ContactController@store')->name('sendEmail');
    Route::get('/about-us', 'AboutController@index')->name('aboutUs');


    //search
    Route::get('autocomplete', 'SearchController@autocomplete')->name('autocomplete');



});

Route::middleware('auth')->namespace('Front')->group(function() {

    //add products
    Route::get('/adding', 'AddController@index')->name('get_add');
    Route::post('/adding', 'AddController@store')->name('post_add');
    Route::get('/adding/chose', 'AddController@choseSub')->name('chose_sub');
    Route::get('/profile/{id}', 'ProfileController@show')->name('profile');
    Route::put('/profile/update', 'ProfileController@update')->name('profile.update');

});

Route::namespace('Dashboard')->as('admin.')->middleware('role:admin')->group(function() {

    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('/dashboard/categories', 'CategoriesController@index')->name('categories.index');
    Route::post('/dashboard/categories/store', 'CategoriesController@store')->name('categories.store');
    Route::get('/dashboard/categories/edit', 'CategoriesController@edit')->name('categories.edit');
    Route::post('/dashboard/categories/update', 'CategoriesController@update')->name('categories.update');
    Route::delete('/dashboard/categories','CategoriesController@destroy')->name('categories.delete');

    //products view
    Route::get('/dashboard/products', 'productsController@index')->name('products.index');
    Route::get('/dashboard/products/approve', 'productsController@approve')->name('products.approve');
    Route::get('/dashboard/products/delete', 'productsController@delete')->name('products.delete');
    Route::get('dashboard/product/{id}', 'productsController@show')->name('show-btn');

    Route::resource('/dashboard/users', 'UsersController');

    Route::put('/makeadmin/{id}', 'UsersController@makeAdmin')->name('makeAdmin');

    Route::get('/dashboard/pages', 'AboutController@index')->name('info');
    Route::get('/dashboard/setting', 'SettingController@index')->name('setting');

    Route::put('/dashboard/setting/update/{id}', 'SettingController@update')->name('update.setting');
    Route::put('/dashboard/about/update/{id}', 'AboutController@update')->name('update.about');


});

Auth::routes();
