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
Route::get('/terms-and-conditions', 'PagesController@terms')->name('terms-and-conditions');
Route::get('/privacy-policy', 'PagesController@privacy')->name('privacy-policy');
Route::get('/our-data', 'PagesController@data')->name('data');
Route::get('/platform', 'PagesController@platform')->name('platform');
Route::get('/contact-us', 'PagesController@contact')->name('contact');
Route::get('/marketing', 'PagesController@marketing')->name('marketing');
Route::get('/customers', 'PagesController@customers')->name('customers');
Route::get('/b2b', 'PagesController@b2b')->name('b2b');
