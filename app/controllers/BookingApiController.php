<?php

class BookingApiController extends BaseController {

    public function __construct()
    {
        header('Access-Control-Allow-Origin: *');
    }

    public function index()
    {
        $bookings = DB::table('ab4s_booking')->take(10)->get();
        //$bookings = Booking::all()->take(10);

        return Response::json($bookings);
    }

    public function show($id)
    {
        $booking = DB::table('ab4s_booking')->where('uuid', $id)->first();
        //$booking = Booking::where('uuid', '=', $id)->first();

        return Response::json($booking);
    }
}
