<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function Register(){
        return view('Register');
    }

    public function actionRegister(Request $request){
        DB::table('users')->insert([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect('Login');
    }

    public function Login(){
        return view('Login');
    }

    public function authenticate(Request $request){
        $validator = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (Auth::attempt($validator)) {
            $request->session()->regenerate();

            return redirect()->intended('');
        }

        return back()->with('error', 'Silahkan Cek Email dan Password!');
    }

    public function Logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
