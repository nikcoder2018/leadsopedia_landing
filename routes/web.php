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
Route::get('/services', 'PagesController@platform')->name('platform');
Route::get('/services/{name}', 'PagesController@services')->name('services');
Route::get('/pricing', 'PagesController@pricing')->name('pricing');
Route::get('/searches', 'PagesController@searches')->name('searches');
Route::get('/faq', 'PagesController@faq')->name('faq');
Route::get('/aboutus', 'PagesController@about')->name('aboutus');
Route::get('/terms-and-conditions', 'PagesController@terms')->name('terms-and-conditions');
Route::get('/privacy-policy', 'PagesController@privacy')->name('privacy-policy');
Route::get('/our-data', 'PagesController@data')->name('data');
Route::get('/contact-us', 'PagesController@contact')->name('contact');
Route::get('/marketing', 'PagesController@marketing')->name('marketing');
Route::get('/customers', 'PagesController@customers')->name('customers');
Route::get('/b2b', 'PagesController@b2b')->name('b2b');
Route::get('/bulk-search', 'PagesController@bulk')->name('bulk');
Route::get('/email-marketing', 'PagesController@email')->name('email');
Route::get('/api-docs', 'PagesController@api')->name('api');
Route::get('/cookie-policy', 'PagesController@cookies')->name('cookies');
Route::get('/refund-and-cancellation-policy', 'PagesController@refund')->name('refund');
Route::get('/disclaimer', 'PagesController@disclaimer')->name('disclaimer');
Route::get('/ccpa-policy', 'PagesController@ccpapolicy')->name('ccpa-policy');
Route::get('/dont-sell', 'PagesController@dontsell')->name('dont-sell');
Route::get('/request-data', 'PagesController@requestdata')->name('request-data');
Route::post('/request-data', 'RequestDataController@submit')->name('request-data');

Route::post('send-message', 'MessageController@saveMessage')->name('message.send');
Route::post('email-subscribe', 'EmailSubscribersController@store')->name('email.subscribe');
Route::post('enterprise-request', 'EnterpriseRequestsController@store')->name('enterprise.request');
