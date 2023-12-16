<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(Request $request) 
    {
        return view('login');
    }

    public function register() 
    {
        return view('register');
    }

    public function authenticating(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Check if login is successful
        if (Auth::attempt($credentials)) {
            // Check user status
            if (Auth::user()->status != 'active') {
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
                Session::flash('status', 'failed');
                Session::flash('message', 'Your account is not active.');
                return redirect('/login');
            }
            
            $request->session()->regenerate();
            if (Auth::user()->role_id == 1) {
                return redirect('dashboard');
            }
            if (Auth::user()->role_id == 2) {
                return redirect('profile'); 
            }
        }

        Session::flash('status', 'failed');
        Session::flash('message', 'Your Login Credentials Are Invalid!');
        return redirect('/login');
    }
    
    public function logout(Request $request) 
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');    
    }

    public function registerProcess(Request $request) 
    {
        $validated = $request->validate([
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|max:255',
            'address' => 'required',
        ]);

        $hashedPassword = Hash::make($request->password);

        $user = User::create([
            'email' => $request->email,
            'password' => $hashedPassword,
            'phone' => $request->phone,
            'address' => $request->address,
            'status' => 'pending', 
        ]);

        Session::flash('status', 'success');
        Session::flash('message', 'Registration Success, wait for admin approval');
        return redirect('register');
    }
}
