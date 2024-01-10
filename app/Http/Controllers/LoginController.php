<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\user;

class LoginController extends Controller
{
    public function index()
    {
        if(auth::check()){
            return redirect()->route('dashboard');
        }
        return view('Admin.login');
    }

    public function LoginPost(Request $request)
    {
       
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);


        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            
            return redirect()->route('dashboard');
        }
        return redirect()->back()->withErrors('wrong email or password!');

    }

    public function logout() {
        Auth::logout();
        return redirect()->route('login');
      }
}
