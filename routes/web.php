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

Route::prefix('/admin')->middleware('can:update-books')->group(function() {
    Route::get('/', 'AdminsController@index')->name('admin.index');

    Route::resource('/books', 'BooksController');
    Route::resource('/categories', 'CategoriesController');
    Route::resource('/authors', 'AuthorsController');
    Route::resource('/publishers', 'PublishersController');
    Route::resource('/users', 'UsersController')->middleware('can:update-users');
});


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'GalleryController@index')->name('gallery.index');
Route::get('/search', 'GalleryController@search')->name('search');

Route::get('/book/{book}', 'BooksController@details')->name('book.details');
Route::post('/book/{book}/rate', 'BooksController@rate')->name('book.rate');

Route::post('/cart', 'CartController@addToCart')->name('cart.add')->middleware('verified');
Route::get('/cart', 'CartController@viewCart')->name('cart.view');
Route::post('/removeOne/{book}', 'CartController@removeOne')->name('cart.remove_one');
Route::post('/removeAll/{book}', 'CartController@removeAll')->name('cart.remove_all');
