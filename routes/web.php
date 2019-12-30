<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});

Auth::routes();

Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/users', 'UserController@index')->name('users');

Route::get('/registration-complete', function(){
    return view('registration-complete');
});

// Admin Section
//Login Page
Route::get('admin-login', 'Auth\AdminLoginController@showLoginForm')->name('admin-login');

//Submit Login
Route::post('admin-login', ['as'=>'admin-login','uses'=>'Auth\AdminLoginController@login']);

// Dashboard Page
Route::get('admin/dashboard', 'AdminController@index')->name('admin-dashboard');
