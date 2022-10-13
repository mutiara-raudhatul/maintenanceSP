<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrasiController extends Controller
{
    public function index ()
    {
        return view('user.register');
    }

    public function store (Request $request)
    {
        $validate=$request->validate([
            'name'=>'required|max:255',
            'nip'=>'required|unique:users',
            'role'=>'required',
            'unit_kerja'=>'required',
            'eselon'=>'required',
            'nohp'=>'required',
            'email'=> 'required|email.dns|unique:users',
            'password'=>'required|min:6|max:255'
        ]);

        dd('registrasi jalan');
        // return request()->all;
    }
}
