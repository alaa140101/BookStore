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

Route::get('/categories', 'CategoriesController@list')->name('gallery.categories.index');
Route::get('/categories/search', 'CategoriesController@search')->name('gallery.categories.search');
Route::get('/categories/{category}', 'CategoriesController@result')->name('gallery.categories.show');

Route::get('/publishers', 'PublishersController@list')->name('gallery.publishers.index');
Route::get('/publishers/search', 'PublishersController@search')->name('gallery.publishers.search');
Route::get('/publishers/{publisher}', 'PublishersController@result')->name('gallery.publishers.show');

Route::get('/authors', 'AuthorsController@list')->name('gallery.authors.index');
Route::get('/authors/search', 'AuthorsController@search')->name('gallery.authors.search');
Route::get('/authors/{author}', 'AuthorsController@result')->name('gallery.authors.show');

Route::get('/authors/{author}', 'AuthorsController@result')->name('gallery.authors.show');


Route::get('/admin', 'AdminsController@index')->name('admin.index');

Route::resource('/admin/books', 'BooksController');
Route::resource('/admin/categories', 'CategoriesController');
Route::resource('/admin/publishers', 'PublishersController');
Route::resource('/admin/authors', 'AuthorsController');