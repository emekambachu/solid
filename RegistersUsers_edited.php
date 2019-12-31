<?php

namespace Illuminate\Foundation\Auth;

use App\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

trait RegistersUsers
{
    use RedirectsUsers;

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        $referers = User::where('is_active', 1)
                        ->orwhere('left', Null)
                        ->orwhere('right', NULL)
                        ->get();

        return view('auth.register', compact('referers'));
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        // if no referer was inserted or selected
        if(empty($request->input('referer')) && empty($request->input('select-referer'))){

            Session::flash('warning', 'You must insert a referer username or select from dropdown');
            return redirect()->back();
        }

        if(!empty($request->input('referer')) && empty($request->input('select-referer'))){

            $data['referer'] = $request->input('referer');
        }else{

            $data['referer'] = $request->input('select-referer');
        }

        // If user inserts a referer and selects from dropdown
        if(!empty($request->input('referer')) && !empty($request->input('select-referer'))){

            Session::flash('warning', 'You can only insert a referer or select from dropdown but not both');
            return redirect()->back();
        }

        // check if referer has more than two downliners
        $checkReferer = User::where([
            ['referer', '=', $request->input('referer')]
        ])->count();

        // if referer has more than two downliners redirect back
        if($checkReferer > 2){
            Session::flash('warning', 'This referer already has more than two downliners');
            return redirect()->back();
        }

        event(new Registered($user = $this->create($request->all())));

        $this->guard()->login($user);

        return $this->registered($request, $user)
            ?: redirect($this->redirectPath());
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard();
    }

    /**
     * The user has been registered.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function registered(Request $request, $user)
    {
        //
    }
}
