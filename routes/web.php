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

Route::get('/', 'PagesController@index')->name('home');
Route::get('/products/{name}', 'PagesController@products')->name('products');
Route::get('/pricing', 'PagesController@pricing')->name('pricing');
Route::get('/searches', 'PagesController@searches')->name('searches');
Route::get('/faq', 'PagesController@faq')->name('faq');
Route::get('/aboutus', 'PagesController@about')->name('aboutus');