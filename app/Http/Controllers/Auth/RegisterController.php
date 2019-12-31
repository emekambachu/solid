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
            'referer' => ['max:50', 'exists:users', 'sometimes', 'nullable'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'mobile' => ['required', 'regex:/^[\w-]*$/'],
            'state' => ['required', 'string', 'min:2', 'nullable'],
            'address' => ['string', 'max:100', 'nullable'],
            'nokname' => ['string', 'max:100', 'nullable'],
            'nokmobile' => ['regex:/^[\w-]*$/', 'max:100', 'nullable'],
            'accname' => ['required', 'string', 'max:100'],
            'bank' => ['required', 'string', 'max:50'],
            'accnum' => ['required', 'numeric', 'min:6', 'regex:/^[0-9]+$/'],
            'payopt' => ['required', 'string', 'max:50'],
            'feename' => ['required', 'string', 'max:50'],
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
    protected function create(array $data){

// INSERT ALL COMMENTED COMMANDS BELOW INTO THE register function IN VENDOR/LARAVEL/FRAMEWORK/SRC/ILLUMENATE/FOUNDATION/AUTH/registersusers.php

// if no referer was inserted or selected
//        if(empty($request->input('referer')) && empty($request->input('select_referer'))){
//
//            Session::flash('warning', 'You must insert a referer username or select from dropdown');
//            return redirect()->back();
//        }
//
//
//        // If user inserts a referer and selects from dropdown
//        if(!empty($request->input('referer')) && !empty($request->input('select_referer'))){
//
//            Session::flash('warning', 'You can only insert a referer or select from dropdown but not both');
//            return redirect()->back();
//        }
//
//        // check if referer has more than two downliners
//        $checkReferer = User::where([
//            ['referer', '=', $request->input('referer')]
//        ])->count();
//
//        // if referer has more than two downliners redirect back
//        if($checkReferer > 2){
//            Session::flash('warning', 'This referer already has more than two downliners');
//            return redirect()->back();
//        }

        if(!empty($data['referer']) && empty($data['select_referer'])){

            $referer = $data['referer'];

        }else{

            $referer = $data['select_referer'];

        }

        $user = User::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'username' => $data['username'],
            'referer' => $referer,
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
            'slipnum' => $data['slipnum'],
            'prefbank' => $data['prefbank'],
            'balance' => 0
        ]);

        $getReferer = User::where([
            ['username', '=', $user->referer],
        ])->get()->first();

        if(empty($getReferer->left)){

            $getReferer->left = $user->username;
            $getReferer->save();

        }else{

            $getReferer->right = $user->username;
            $getReferer->save();

        }

        // add name and email to session
        session()->put('firstname', $data['firstname']);
        session()->put('lastname', $data['lastname']);

        return $user;

    }

    // validated referers and selected referers in vendor/laravel/framework/src/illumenate/foundation/auth/registersusers.php

}
