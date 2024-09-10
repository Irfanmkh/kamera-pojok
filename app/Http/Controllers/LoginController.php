<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view("login.index");
    }
    public function proses(Request $request)
    {
        $credential = $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);
        if(Auth::attempt($credential)){
            $request->session()->regenerate();

            return redirect()->route('home');
        }
        return back()->withErrors([
            'name' => 'The provided credentials do not match our records.',
        ])->onlyInput('name');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('/');
    }
}