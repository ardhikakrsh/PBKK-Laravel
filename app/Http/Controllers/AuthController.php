<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Enums\RolesType;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;

class AuthController extends Controller
{
    public function signin(){
        return view('MADU.auth.login');
    }

    public function signInStore(){
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($attributes)) {
            session()->regenerate();
            $userRole = Auth::user()->role;

            if($userRole == RolesType::admin){
                return redirect()->intended(route('admin.dashboard'))->with(['success' => 'You are logged in.']);
            } elseif($userRole == RolesType::user){
                return redirect()->intended(route('user.dashboard'))->with(['success' => 'You are logged in.']);
            } else{
                return redirect()->intended(route(''))->with(['success' => 'You are logged in.']);
            }
        }
        else{
            return back()->withErrors(['email' => 'Your provided credentials could not be verified.']);
        }
    }

    public function logout()
    {
        Auth::logout();     
        return redirect('/login')->with(['success' => 'You\'ve been logged out.']);

    }

    public function signup(){
        return view('MADU.auth.register');
    }
    
    

    
}
