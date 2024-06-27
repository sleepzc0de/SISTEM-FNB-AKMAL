<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function register()
    {
        return view('registrasi');
    }

    public function store(Request $request)
    {
        $messages = [
            'unique' => 'Email atau nomor telepon sudah digunakan!!!',
            'email.dns' => 'Format email tidak valid',
            'numeric' => 'Nomor telepon harus berupa angka'
        ];


        $data = $request->validate([
            'username' => 'required|max:255|min:3',
            'email' => 'required|unique:users|email:dns',
            'no_telpon' => 'required|unique:users|numeric',
            'password' => 'required|min:3|max:255'
        ], $messages);
        $data['password']= Hash::make($data['password']);
        // dd($data);

        User::create($data);

        return redirect('/login')->with('success', 'berhasil registrasi');
    }
}
