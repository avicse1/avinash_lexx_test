<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\MessageBag;
use App\User;
use Hash;
use Session;


class AuthController extends Controller
{
    public function login() {
        return view('login');
    }

    public function doLogin(Request $request, MessageBag $message_bag) {

        $validateData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        // Check valid user
        $user = User::where('email', $request->email)->first();

        if(!$user){
            $message_bag->add('email', 'No such email found in our database.');
            return redirect()->route('login')->withErrors($message_bag);
        }

        if($user->is_blocked == 'yes') {
            Session::flash('error', 'Your account is blocked for some reasons. Please contact Admin.');
            return redirect()->back();
        }

        
        if(!Hash::check($request->password, $user->password)) {
            $message_bag->add('password', 'Incorrect password');
            return redirect()->route('login')->withErrors($message_bag);
        }
       
        
        $user->session_token = str_random(40);
        $user->save();
        
        session()->put('session_token', $user->session_token);
        return redirect()->route('dashboard');
    }

    public function register() {
        return view('register');
    }

    public function doRegister(Request $request) {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
        ]);
        
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
   
        Session::flash('success', 'Your account is successfully register. Please login to continue the services.');
        return redirect()->back();
    }

    public function logout() {
        $session_token = session()->get('session_token', null);
        $user = User::where('session_token', $session_token)->first();
                
        if($user) {
            $user->session_token = null;
            $user->save();
        }
        return redirect()->route('login');
    }

    public function forgotPassword() {
        return view('forgot_password');
    } 
    

    
 
   
    



}
