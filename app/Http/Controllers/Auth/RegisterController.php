<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
{
    $validated = $request->validate([
        'firstname' => 'required|string|max:255',
        'lastname' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
        'role' => 'required|in:student,prof,admin',
    ]);

    $user = User::create([
        'name' => $validated['firstname'] . ' ' . $validated['lastname'],
        'email' => $validated['email'],
        'password' => Hash::make($validated['password']),
        'role' => $validated['role'],
    ]);

    // AUTO-LOGIN
    Auth::login($user);
    $request->session()->regenerate();

    // Redirect based on role
    return match($user->role) {
        'student' => redirect()->route('student.dashboard'),
        'prof' => redirect()->route('teacher.dashboard'),
        'admin' => redirect()->route('admin.dashboard'),
        default => redirect()->route('login'),
    };
}
}
