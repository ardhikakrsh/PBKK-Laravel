<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Enums\RolesType;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Barang;

class AuthController extends Controller
{
    public function product(){
        return view('MADU.layouts.userAuth.product');  // Pass the data to the view
    }

    public function about(){
        $barangs = Barang::all();  // Fetch all barang records
        return view('MADU.layouts.userAuth.barang', compact('barangs'));  // Pass the data to the view
    }

    public function contact(){
        return view('MADU.layouts.userAuth.contact');
    }

    public function signin(){
        return view('MADU.auth.login');
    }

    public function signup(){
        return view('MADU.auth.register');
    }
    
    public function logout()
    {
        Auth::logout();     
        return redirect('/login')->with(['success' => 'You\'ve been logged out.']);

    }
    

    
}
