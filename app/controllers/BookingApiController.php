<?php

class ApiController extends BaseController {

    /*
    |--------------------------------------------------------------------------
    | Booking Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |   Route::get('/', 'ApiController@showBooking');
    |
    */

    public function showBookings()
    {
        $booking = Booking::whereRaw('active = 1')->select(['uuid', 'date_created', 'description_title'])->take(10)->orderBy('date_created','desc')->get();;

        return Response::json($booking)->setCallback(Input::get('callback'))->header('Access-Control-Allow-Origin', '*');
    }
}
