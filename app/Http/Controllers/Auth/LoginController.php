<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            $request->session()->regenerate(); // Security: Prevent session fixation
            
            $user = Auth::user();
            
            // Redirect based on role
            return match($user->role) {
                'student' => redirect()->route('student.dashboard'),
                'prof' => redirect()->route('teacher.dashboard'),
                'admin' => redirect()->route('admin.dashboard'),
                default => redirect('/'),
            };
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput($request->except('password'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken(); // CSRF protection
        
        return redirect('/');
    }
}