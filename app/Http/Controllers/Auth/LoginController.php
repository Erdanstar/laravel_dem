<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Language;

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

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/profile';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
				$this->middleware('guest')->except('logout');
		}
		
		public function showLoginForm($local){
			$lgs = Language::all();
			$lg = Language::where('code', $local)->first();
			$currentUrl = 'login';

			return view('auth.login', ['lgs' => $lgs, 'lg' => $lg, 'curl' => $currentUrl]);
		}
}
