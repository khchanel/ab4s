<?php

class BookingController extends BaseController {

    /*
    |--------------------------------------------------------------------------
    | Booking Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |   Route::get('/', 'BookingController@showBooking');
    |
    */

    public function show($id)
    {
        //$booking = DB::table('ab4s_booking')->where('uuid', $id)->first();
        $booking = Booking::where('uuid', '=', $id)->first();


        switch (Request::format()) {
            case 'html':
                return View::make('booking', array('booking' => $booking));
            case 'json':
                return $booking;
        }
    }
}
