<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route :: get('/userform', function(){
    return view('userform');
});

Route :: post('/userform', function(){
    $rules = array(
        'email' => 'required|email|different:username',
        'username' => 'required|min:6',
        'password' => 'required|same:password_confirm'
    );
    $validation = Validator::make(input::all(), $rules);

    if ($validation -> fails())
    {
        return Redirect::to('/userform')->withErrors($validation)->withInput();
    }
    return Redirect::to('userresults') -> withInput();
});

Route :: get('/userresults',function()
    {
        return dd(input::old());
    });