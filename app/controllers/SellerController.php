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
        return View::make('seller.sellerLogin');
    }

    public function sellerLoginCheck()
    {
        $email = Input::get('username');
        $password = Input::get('password');
        $user = Seller::where('email', '=', $email)
                        ->where('password', '=', $password)
                        ->first();

        if ($user)
            {
                if($user->active ==1 && $user->deleted !=1) {
                    Auth::login($user);
                    return Redirect::route('sellerHome');
                    //->with('flash_notice', 'You are successfully logged in.');
                } else {
                    return Redirect::route('login')
                    ->with('flash_error', 'Your had been deleted or deactivated.');
                }
            } else {
                return Redirect::route('login')
                ->with('flash_error', 'Your username/password combination was incorrect.'); 
            }
    }

    public function sellerHome()
    {
        return View::make('seller.home');
    }
}