<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    //use AuthenticatesUsers;

    protected $guardName = 'admin';
    protected $maxAttempts = 300;
    protected $decayMinutes = 200;

    protected $loginRoute;

    public function __construct()
    {
        $this->middleware('guest:admin')->except('postLogout');
        $this->loginRoute = route('admin.login');
    }

    public function getLogin()
    {
        return view('admin.login');
    }

    public function postLogout()
    {
        Auth::guard($this->guardName)->logout();
        Session::flush();
        return redirect()->guest($this->loginRoute);
    }

    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:5'
        ]);

        // if ($this->hasTooManyLoginAttempts($request)) {
        //     $this->fireLockoutEvent($request);
        //     $this->sendLockoutResponse($request);
        // }

        $credential = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];


        if (Auth::guard($this->guardName)->attempt($credential)) {

            $request->session()->regenerate();
            //$this->clearLoginAttempts($request);
            return redirect()->route('admin.home');
            //return redirect()->intended();

        } else {
            //$this->incrementLoginAttempts($request);

            return redirect()->back()
                ->withInput()
                ->withErrors(["Incorrect user login details!"]);
        }
    }

}

