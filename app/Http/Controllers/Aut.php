<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class Aut extends Controller
{
    public function index()
    {

        return view(
            'Auth.index',
            [
                "title" => "Login"
            ]
        );
    }

    public function reg()
    {
        return view(
            'Auth.regs',
            [
                "title" => "Registrasi"
            ]
        );
    }
    public function regis(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'radio' => 'required|max:255',
            'username' => 'required|unique:users|max:255',
            'email' => 'required|unique:users|email:dns',
            'password' => 'required|min:5|max:255'
        ]);

        // The blog post is valid...

        dd('berhasil');
    }
    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->with('loginError', 'Login Failed!')->onlyInput('email');
    }

    public function logout(Request $request)
    {

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
