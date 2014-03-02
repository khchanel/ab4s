<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
    return View::make('hello');
});

Route::get('booking/{id}','BookingController@showBooking');
Route::get('login',array('as' => 'login','uses' => 'SellerController@sellerLogin'));
Route::post('loginCheck','SellerController@sellerLoginCheck');
Route::get('member',array('as' => 'sellerHome', 'before' => 'auth', 'uses' => 'SellerController@sellerHome'));
Route::get('logout',array('as' => 'logout','uses' => 'SellerController@sellerLogout'));
