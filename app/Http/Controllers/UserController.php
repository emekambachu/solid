<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Transaction;
use App\Image;
use App\User;
use Carbon\Carbon;

// Add for authentication to work
use Illuminate\Support\Facades\Auth;

//Add for mail class to work
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

// add for flash session
use Illuminate\Support\Facades\Session;
use Mockery\Matcher\Not;

class UserController extends Controller
{
    public function index(){

        $countLeft = User::where('referer', Auth::user()->left)
                          ->where('is_active', 1)
                          ->where('right', !NULL)
                          ->where('left', !NULL)
                          ->count();

        return view('users.index', compact('countLeft'));

    }
}
