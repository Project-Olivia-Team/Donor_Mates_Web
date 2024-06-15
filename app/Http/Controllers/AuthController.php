<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    
    public function registerForm()
    {
        return view('register');
    }

   
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
            'password' => Hash::make($request->password), 
            'bloodType' => $request->bloodType,
            'role' => 'user', 
        ]);

        $user->save();

        return redirect('/login')->with('success', 'Registrasi berhasil, Anda bisa login');
    }

    
    public function loginForm()
    {
        return view('login');
    }

   
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
                
                if ($user->password === $credentials['password']) {
                   
                    $user->password = Hash::make($credentials['password']);
                    $user->save();
                } else {
                    return back()->withErrors(['email' => 'Data yang anda masukkan tidak sesuai.']);
                }
            }

            Auth::login($user, $request->remember);
            $request->session()->regenerate();

           
            if ($user->role == 'admin') {
                return redirect()->intended('/admin/dashboard');
            } else {
                return redirect()->intended('/user/home');
            }
        }

        return back()->withErrors(['email' => 'Data yang anda masukkan tidak sesuai.']);
    }

   
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
