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

    
    public function login (Request $request)
    {

        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('livres')
                ->withSuccess('Signed in');
        }

        return redirect("login")->withSuccess('Login details are not valid');
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
