<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Method untuk menampilkan form register
    public function registerForm()
    {
        return view('register');
    }

    // Method untuk menangani proses registrasi
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'bloodType' => 'required|string',
        ]);

        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Menggunakan Hash Bcrypt
            'bloodType' => $request->bloodType,
            'role' => 'user', // Default role
        ]);

        $user->save();

        return redirect('/login')->with('success', 'Registration successful. Please login.');
    }

    // Method untuk menampilkan form login
    public function loginForm()
    {
        return view('login');
    }

    // Method untuk menangani proses login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        $user = User::where('email', $credentials['email'])->first();

        if ($user) {
            if (!Hash::check($credentials['password'], $user->password)) {
                // Password tidak cocok dengan hash, periksa apakah password belum di-hash
                if ($user->password === $credentials['password']) {
                    // Hash password dan simpan ke database
                    $user->password = Hash::make($credentials['password']);
                    $user->save();
                } else {
                    return back()->withErrors(['email' => 'The provided credentials do not match our records.']);
                }
            }

            Auth::login($user, $request->remember);
            $request->session()->regenerate();

            // Redirect berdasarkan role user
            if ($user->role == 'admin') {
                return redirect()->intended('/admin/dashboard');
            } else {
                return redirect()->intended('/user/home');
            }
        }

        return back()->withErrors(['email' => 'The provided credentials do not match our records.']);
    }

    // Method untuk logout
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
