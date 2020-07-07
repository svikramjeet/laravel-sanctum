<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $remember = $request->only('remember');
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials, $remember)) {
            return response()->json(Auth::user(), 200);
        }

        return redirect()->back()
            ->withInput($request->only('email', 'remember'))
            ->withErrors(
                [
                'email' => 'Invalid Credential',
                ]
            );
    }

    public function showLoginForm()
    {
        if (!auth()->user()) {
            return view('auth.login');
            // unauthorizes response
        }
        return response()->json(Auth::user(), 200);

    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
