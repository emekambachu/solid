<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Mail;
use Illuminate\http\Request;
use Illuminate\Support\Facades\Session;

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
    protected $redirectTo = RouteServiceProvider::REGISTRATIONCOMPLETE;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
            'firstname' => ['required', 'string', 'max:50'],
            'lastname' => ['required', 'string', 'max:50'],
            'username' => ['required', 'string', 'max:50', 'unique:users'],
            'referer' => ['required', 'string', 'max:50', 'exists:username'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'mobile' => ['required', 'regex:/^[\w-]*$/'],
            'state' => ['required', 'string', 'max:50'],
            'address' => ['required', 'string', 'max:100'],
            'nokname' => ['required', 'string', 'max:100'],
            'nokmobile' => ['required', 'regex:/^[\w-]*$/', 'max:100'],
            'accname' => ['required', 'string', 'max:100'],
            'bank' => ['required', 'string', 'max:50'],
            'accnum' => ['required', 'regex:/[0-9]{9}', 'max:100'],
            'payopt' => ['required', 'string', 'max:50'],
            'feename' => ['required', 'string', 'max:50'],
            'feenum' => ['required', 'string', 'max:50'],
            'slipnum' => ['required', 'string', 'max:100'],
            'prefbank' => ['required', 'string', 'max:50'],

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
        $user = User::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'username' => $data['username'],
            'referer' => $data['referer'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'mobile' => $data['mobile'],
            'state' => $data['state'],
            'address' => $data['address'],
            'nokname' => $data['nokname'],
            'nokmobile' => $data['nokmobile'],
            'accname' => $data['accname'],
            'bank' => $data['bank'],
            'accnum' => $data['accnum'],
            'payopt' => $data['payopt'],
            'feename' => $data['feename'],
            'feenum' => $data['feenum'],
            'slipnum' => $data['slipnum'],
            'prefbank' => $data['prefbank'],
            'balance' => 0
        ]);

        // add name and email to session
        session()->put('firstname', $data['firstname']);
        session()->put('lastname', $data['lastname']);

        return $user;

    }
}
