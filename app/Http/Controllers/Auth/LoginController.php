<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Redirect users after login based on role
     */
    

    protected function redirectTo()
{
    if (auth()->user()->role === 'admin') {
        return route('admin.index');
    }

    return '/';
}

}
