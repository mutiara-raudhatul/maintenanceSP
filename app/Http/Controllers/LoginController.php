<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Users;

class LoginController extends Controller
{

    public function index ()
    {
        return view('/login');
    }

    public function authenticate (Request $request)
    {
        $credentials = $request->validate([
            'email'=>'required|email:dns',
            'password'=> 'required'
        ]);

        if (Auth::attempt($credentials)){
            $request->session()->regenerate();
            $yg_login = Users::where('email','=',$request->email)->first();

            $rolenya = $yg_login->role;
            if($rolenya == 'Admin Gudang'){
                return redirect()->intended('dashboard-admingudang'); 
            } if($rolenya == 'Admin Teknisi'){
                return redirect()->intended('dashboard-adminteknisi'); 
            } if($rolenya == 'Karyawan'){
                return redirect()->intended('dashboard-karyawan'); 
            } if($rolenya == 'Teknisi'){
                return redirect()->intended('dashboard-teknisi'); 
            } else {
                return redirect()->intended('login'); 
            }
        }

        // dd('berhasil login');

        return back()->with('loginError','Login Failed!');
    }

    public function logout (Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
