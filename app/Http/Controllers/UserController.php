<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;


use App\Http\Requests;
use App\User;

class UserController extends Controller
{
	public function postSignUp (Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|unique:users',
            'name' => 'required|max:120',
            'password' => 'required|min:4'
        ]);
    	$email = $request['email'];
    	$name = $request['name'];
    	$password = bcrypt($request['password']);

    	$user = new User();
    	$user->email = $email;
    	$user->name = $name;
    	$user->password = $password;

    	$user->save();
    	Auth::login($user);

    	return redirect()->route('dashboard');

    }
    public function postSignIn(Request $request)
    {

        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);
         $email = $request->email;
         $password = $request->password;

    	if (Auth::attempt(array('email' => $email, 'password'=>$password))) {
    		return redirect()->route('dashboard');
    	}
    	return redirect()->back();

    }
    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('home');
    }

}
