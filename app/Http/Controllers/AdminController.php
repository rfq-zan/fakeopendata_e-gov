<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            if (Auth::user()->role === 'admin') {
                $request->session()->regenerate();
                return redirect()->route('admin.dashboard');
            } else {
                Auth::logout();
                return back()->withErrors(['email' => 'Unauthorized access.']);
            }
        }

        return back()->withErrors(['email' => 'Invalid credentials.']);
    }

    public function index()
    {
        return view('admin.dashboard');
    }

    public function datasets()
    {
        return view('admin.datasets');
    }

    public function users()
    {
        return view('admin.users');
    }

    public function settings()
    {
        return view('admin.settings');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }
}
