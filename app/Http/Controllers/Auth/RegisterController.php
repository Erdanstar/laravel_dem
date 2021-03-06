<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Status;
use App\Country;
use App\Language;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }


    public function showRegistrationForm($local)
    {
				$language = Language::where('code', $local)->first();
        $statuses = Status::all()->where('lang_id', $language->id);
				$countries = Country::all();
				$curl = 'register';
        return view('auth.register', [
            'statuses'  => $statuses,
						'countries' => $countries,
						'curl' => $curl
        ]);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'status_id' => ['required'], 
            'name'      => ['required', 'string', 'max:255'],
            'surname'   => ['required', 'string', 'max:255'],
            'birthday'  => ['required', 'date'],
            'email'     => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password'  => ['required', 'string', 'min:6', 'confirmed'],
            'license'   => ['required'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name'       => $data['name'],
            'surname'    => $data['surname'],
            'status_id'  => $data['status_id'],
            'birthday'   => $data['birthday'],
            'patronymic' => $data['patronymic'],
            'sex'        => $data['sex'],
            'email'      => $data['email'],
            'password'   => Hash::make($data['password']),
        ]);
    }
}
