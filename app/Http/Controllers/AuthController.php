<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function registerForm()
    {
        return view('auth.register');

    }

    public function register(Request $request)
    {
        $request->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|email|unique:users,email|max:255',
            'password'=>'required|string|confirmed|min:5|max:30',
        ]);

       $user =  User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
        ]);

        $request->session()->flash('success-msg','Registered Successfully');
        Auth::login($user);
        return redirect(url('/cats'));
    }


    public function loginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'=>'required|email|max:255',
            'password'=>'required|string|min:5|max:30',
        ]);

        $islogin = Auth::attempt(['email'=>$request->email,'password'=>$request->password]);
        if (!$islogin){
            $request->session()->flash('error-msg','credentials Not Correct');
            return back();
        }else{
            $request->session()->flash('success-msg','Login Successfully');
            return redirect('/cats');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect(url('/cats'));
    }
}
