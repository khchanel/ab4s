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

Route::get('booking/{id}','BookingController@show');
Route::resource('api/booking','BookingApiController', array('only' => array('index', 'show')));

Route::get('/', function() {
	return View::make('enquiry.master');	
});
// =============================================
// API ROUTES ==================================
// =============================================
Route::group(array('prefix' => 'api'), function() {

	// since we will be using this just for CRUD, we won't need create and edit
	// Angular will handle both of those forms
	// this ensures that a user can't access api/create or api/edit when there's nothing there
	Route::resource('enquiries', 'EnquiryController', 
		array('only' => array('index')));
});