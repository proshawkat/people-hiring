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

Auth::routes([
    'register' => false,
    'verify' => true,
    'reset' => false
]);

Route::group(['middleware' => 'auth'], function () {
	Route::get('admin/order','OrderController@getOrder')->name('admin.order');
	Route::get('admin/services','OurServicesController@getServices')->name('admin.services');
	Route::get('admin/service/create','OurServicesController@create')->name('admin.service.create');
	Route::post('admin/service/insert','OurServicesController@insert');
	Route::get('admin/service/edit/{id}','OurServicesController@edit');
	Route::get('admin/service/delete/{id}','OurServicesController@delete');
	Route::post('admin/service/update','OurServicesController@update');
	Route::get('admin/contact','AdminController@contact')->name('admin.contact');
	Route::get('admin/subscriber','SubscriberController@index')->name('admin.subscriber');
	Route::get('admin/gallery','GalleryController@index')->name('admin.gallery');
	Route::get('admin/gallery/create','GalleryController@create');
	Route::post('admin/gallery/insert','GalleryController@insert');
	Route::get('admin/gallery/edit/{id}','GalleryController@edit');
	Route::post('admin/gallery/update','GalleryController@update');
	Route::get('/home', 'AdminController@index')->name('home');


	Route::get('admin/client', 'ClientController@index')->name('admin.client');
	Route::get('admin/client/message/{id}', 'ClientController@messageIndex')->name('admin.client.message');
	Route::post('admin/client/message/get', 'ClientController@getMessages')->name('admin.client.message.get');
	Route::post('admin/client/message/send', 'ClientController@send')->name('admin.client.message.send');
});

Route::post('subStore', 'SubscriberController@store')->name('subStore');
Route::get('recruitment', 'HomeController@recruitment')->name('recruitment');
Route::get('sitemap', 'HomeController@sitemap')->name('sitemap');
Route::get('pagenotfound', ['as'=>'notfound', 'use'=>'HomeController@pagenotfound']);

Route::middleware(['guest'])->group(function(){

    Route::get('/client/login', function () {
        return view('client/auth/login');
    });

    Route::get('/client/register', 'Auth\AuthClientController@showRegiter')->name('client.register');
    Route::post('/client/register', 'Auth\AuthClientController@registerClient')->name('client.register');
    Route::post('/client/login', 'Auth\LoginClientController@login')->name('client.login');

    Route::get('email/resend', 'Client\Auth\VerificationController@resend')->name('verification.resend');
    Route::get('email/verify', 'Client\Auth\VerificationController@show')->name('verification.notice');
    Route::get('email/verify/{id}/{hash}', 'Client\Auth\VerificationController@verify')->name('verification.verify');
});

Route::group(['middleware'  => 'auth:clients'],function(){
    Route::get('/client/home', 'Client\OrderController@index')->name('client.home');

    //message
    Route::get('/client/message', 'Client\MessageController@index')->name('client.message');
    Route::post('/client/message/send', 'Client\MessageController@send')->name('client.message.send');
    Route::post('/client/message/get', 'Client\MessageController@getMessages')->name('client.message.get');

    //    Orders
    Route::get('/client/services', 'Client\OrderController@index')->name('client.services');

    //    settings
    Route::get('/client/settings', 'Client\SettingsController@index')->name('client.settings');
    Route::post('/client/profile/update', 'Client\SettingsController@update')->name('client.profile.update');
});

