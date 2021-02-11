<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $this->validate($request, [
            'username'=>'max:255',
            'password'=>'max:255',
        ]);
        if(Auth::attempt($request->only('username', 'password'))){
            return redirect()->route('dashboard');
        }

        return back()->with('status', 'Invalid details');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/dashboard');
    }
}
