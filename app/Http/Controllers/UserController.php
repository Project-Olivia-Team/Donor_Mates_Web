<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Donor;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;



class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'bloodType' => 'required|string',
            'role' => 'required|string|in:user,admin',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'bloodType' => $request->bloodType,
            'role' => $request->role,
        ]);
    
        return redirect()->route('admin.users')->with('success', 'User created successfully.');
    }
    



    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'bloodType' => 'required|string',
            'role' => 'required|string',
        ]);
    
        $user = User::findOrFail($id);
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->bloodType = $validatedData['bloodType'];
        $user->role = $validatedData['role'];
    
        $user->save();
    
        return redirect()->route('admin.users')->with('success', 'User updated successfully.');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users')->with('success', 'User deleted successfully.');
    }

    public function profile()
    {
        $user = Auth::user();
        $lastDonor = Donor::where('NIK', $user->NIK)->orderBy('tgl_donor', 'desc')->first();
        return view('user.profile', compact('user', 'lastDonor'));
    }

    public function editProfile()
    {
        $user = Auth::user();
        return view('user.editprofil', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
            'bloodType' => 'required|string',
        ]);

        if ($request->filled('password')) {
            $validated['password'] = Hash::make($request->password);
        } else {
            unset($validated['password']);
        }

        $user->fill($validated);
        $user->save();

        return redirect()->route('user.profile')->with('success', 'Profil berhasil diperbarui.');
    }
}
