<?php

class SellerController extends BaseController {

    /*
    |--------------------------------------------------------------------------
    | Booking Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |   Route::get('/', 'SellerController@sellerLogin');
    |
    */

    public function sellerLogin()
    {
        return View::make('sellerLogin');
    }
}