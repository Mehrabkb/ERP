<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('register');
    }
    public function register(Request $request)
    {
        $request->validate(['first_name' => 'required', 'last_name' => 'required', 'phone' => 'required|unique:users', 'password' => 'required|min:6',]);
        User::create(['first_name' => $request->first_name, 'last_name' => $request->last_name, 'phone' => $request->phone, 'password' => Hash::make($request->password),]);
        return redirect('/login')->with('success', 'ثبت‌نام موفق بود!');
    }
    public function showLogin()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        $user = User::where('phone', $request->phone)->first();
        if ($user && Hash::check($request->password, $user->password)) {
            return "خوش آمدید " . $user->first_name;
        }
        return back()->with('error', 'اطلاعات ورود اشتباه است');
    }
}
