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

Route::get('/', function () {
    return view('welcome');
});

Route::get('about','AboutController@index');
Route::get('contact','ContactController@index');
Route::post('contact/save','ContactController@insert');
Route::get('price','PriceController@index');
Route::get('terms_condition','PriceController@terms_condition');
Route::get('price/single_price/{id}','PriceController@single_price');
Route::get('price/service-wise-price/{id}','PriceController@serviceWisePrice');
Route::get('get_started','PriceController@get_started');
Route::post('payment/action','PaymentController@action');
Route::get('process/details','ProcessController@details');

Route::get('service','ServicePostController@service');
Route::get('how_we_work','ServicePostController@how_we_work');
Route::get('designlimit','ServicePostController@designlimit');
Route::get('faq','FaqController@faq');
Auth::routes();

Route::group(['middleware' => 'auth'], function () {
	Route::get('admin/order','OrderController@getOrder')->name('admin.order');
	Route::get('admin/services','OurServicesController@getServices')->name('admin.services');
	Route::get('admin/service/create','OurServicesController@create')->name('admin.service.create');
	Route::post('admin/service/insert','OurServicesController@insert');
	Route::get('admin/service/edit/{id}','OurServicesController@edit');
	Route::get('admin/service/delete/{id}','OurServicesController@delete');
	Route::post('admin/service/update','OurServicesController@update');
	Route::get('admin/contact','AdminController@contact')->name('admin.contact');
	Route::get('admin/gallery','GalleryController@index')->name('admin.gallery');
	Route::get('admin/gallery/create','GalleryController@create');
	Route::post('admin/gallery/insert','GalleryController@insert');
	Route::get('admin/gallery/edit/{id}','GalleryController@edit');
	Route::post('admin/gallery/update','GalleryController@update');
	Route::get('/home', 'AdminController@index')->name('home');
});

Route::post('subStore', 'SubscriberController@store')->name('subStore');
Route::get('recruitment', 'HomeController@recruitment')->name('recruitment');
Route::get('sitemap', 'HomeController@sitemap')->name('sitemap');
Route::get('pagenotfound', ['as'=>'notfound', 'use'=>'HomeController@pagenotfound']);
