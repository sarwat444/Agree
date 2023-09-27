<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */


    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    /**
     * Login Function.
     * @param Request $request
     * @return RedirectResponse success And Navigate To Home Or Error
     */
    public function login(Request $request)
    {
        $loginCounter = $request->cookie('loginCounter');
        if($loginCounter>=5){
            return back()->withErrors([
                'email' => 'Too Many Login Attempts please Wait 5 minutes then retry to login Again.',
            ]);
        }
        Cookie::queue(cookie('loginCounter', $loginCounter+1, 5));
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);
        $remember= !$request->get('remember') ? false : true;
        if (Auth::attempt($credentials,$remember)) {
            $user =User::where('email',$request->get('email'))->first();
            $success=$user;
            $success['tokens'] =  $user->createToken('email')-> accessToken;
            auth()->Login($user);
            $request->session()->flash('successMsg','Welcome To Dashboard!');
            return redirect()->intended('dashboard');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }



}
