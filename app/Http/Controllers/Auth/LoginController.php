<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    // Show the login form
    public function create()
    {
        return view('auth.login');
    }

    // Handle the login process
    public function login(Request $request)
    {
        // Validate input data
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Attempt login
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('/admin/users'); // Redirect to admin dashboard or homepage
        }

        // Return back with error message if login fails
        return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
    }

    // Handle logout
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
