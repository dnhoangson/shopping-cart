<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

//use Laravel\Passport\HasApiTokens;

class UserController extends Controller
{
    
    //Get singnup view
    public function getSignup() 
    {
        return view('user.signup');
    }
    //Process signup
    public function postSignup(Request $request)
    {
        $this->validate($request, [
            'email' => 'email|required|unique:users',
            'password' => 'required|min:4'
        ]);
        $user = new User([
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);
        $user->save();
        Auth::login($user);
        return redirect()->route('user.profile');
    }
    
    //Get signin view
    public function getSignin() 
    {
        return view('user.signin');
    }
    //Process signin
    public function postSignin(Request $request) 
    {
        $this->validate($request, [
                'email' => 'email|required',
                'password' => 'required|min:4'
                ]);
        
        $credentials = array(
            'email' => $request->input('email'), 
            'password' => $request->input('password')
                );
        if(Auth::attempt($credentials)){
            return redirect()->route('user.profile');
        }
        return redirect()->back();
    }
    
    public function getProfile() 
    {
        return view('user.profile');
    }
    
    public function getLogout()
    {
        Auth::logout();
        return redirect()->back();
    }
}
