<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\View;

class AuthController extends Controller


{
    public function register()
    {
        return view('auth/register');
    }

    public function registerSave(Request $request)
{
    Validator::make($request->all(), [
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required|email',
        'password' => 'required|confirmed'
    ])->validate();

    $fullName = $request->first_name . ' ' . $request->last_name;

    User::create([
        'name' => $fullName,
        'email' => $request->email,
        'password' => Hash::make($request->password)
    ]);

        return redirect()->route('login');
    }

    public function login()
    {

        return view('auth/login');
    }

    public function loginAction(Request $request)
    {
        Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ])->validate();

        if (!Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email' => trans('auth.failed')
            ]);
        }



        $request->session()->regenerate();

        return redirect()->route('feed');
    }



    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        return redirect('/login');
    }

    public function profile()
    {
        return view('profile');
    }



}
