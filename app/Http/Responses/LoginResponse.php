<?php

namespace App\Http\Responses;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{
    public function toResponse($request)
    {
        
        // below is the existing response
        // replace this with your own code
        // the user can be located with Auth facade

        //$role = Auth::user()->role;
        //$checkrole = explode(',', $role);

        // if (Auth::user()->role == 'admin') {
        //     return redirect()->route('admin');
        // }

        // if (Auth::user()->role == 'user') {
        //     Session::put('isadmin', 'seller');
        //     return redirect()->route('s');
        // }
        
        return redirect()->route('home');
    }
}
