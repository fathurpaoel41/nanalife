<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Validator;
use Hash;
use Session;
use App\User;
use Illuminate\Support\Facades\Hash as FacadesHash;

class authController extends Controller
{
    public function register(Request $request)
    {
        $rules = [
            'name' => 'required|min:3|max:35',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed'
        ];

        $messages = [
            'name.required' => 'Nama Tidak Boleh Kosong',
            'name.min' => 'Nama minimal 3 karakter',
            'name.max' => 'Nama Maksimal 35 karakter',
            'email.required' => 'Email Tidak Boleh Kosong',
            'email.email' => 'Email tidak valid',
            'email.unique' => 'email sudah digunakan',
            'password.required' => 'password tidak boleh kosong',
            'password.confirmed' => 'password tidak sama',
        ];

        $this->validate($request,$rules,$messages);

        $user = new User;
        $user->name = ucwords(strtolower($request->name));
        $user->email = strtolower($request->email);
        $user->password = FacadesHash::make($request->password);
        $user->email_verified_at = \Carbon\Carbon::now();
        $user->save();

        return redirect()->route('login');

    }

    public function login(Request $request)
    {
        $data = [
            'email'     => $request->input('email'),
            'password'  => $request->input('password'),
        ];

        if (Auth::attempt($data)) {
            return redirect()->route('index');
        }

        return 'Failure';
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
