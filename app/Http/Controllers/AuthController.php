<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    //

    public function registerForm () {
        return view('register');
    }

    public function loginForm () {
        return view('login');
    }



    
    public function login (request $request) {

        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('email' ,'=', $validated['email'])
            ->first();

            if (
                isset($user) && Hash::check($validated['password'], $user->password)
            ) {
                session(['user' => $user]);
                return redirect()->route('livres');

            } else {
                return redirect()->route('login');
            }
    }



    public function logout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }


    public function register (request $request) {
        $validated = $request->validate([
            'name' => 'required|unique:users,email|max:255',
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = new User();
        $user->name = $validated["name"];
        $user->email = $validated["email"];
        $user->password = Hash::make($validated["password"]);

        $user->save();
        return redirect()->route("login");
    }
}
