<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


use Illuminate\Support\Str;class ApiAuthController extends Controller
{
    public function registerForm()
    {
        return view('auth.register');

    }

    public function register(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|string|confirmed|min:5|max:30',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors(),
            ]);
        }

        $access_token = Str::random(64);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'access_token'=> $access_token,
        ]);

        return response()->json([
            'access_token'=> $access_token,
        ],201);


    }

}
