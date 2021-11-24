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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'GalleryController@index')->name('gallery.index');

Route::get('/search', 'GalleryController@search')->name('search');

Route::get('/book/{book}', 'BooksController@details')->name('book.details');

Route::get('/categories/{category}', 'CategoriesController@result')->name('gallery.categories.show');

Route::get('/authors/{author}', 'AuthorsController@result')->name('gallery.authors.show');