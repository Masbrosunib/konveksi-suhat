<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Authenticate;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session as FacadesSession;

class SesiController extends Controller
{
    function index()
    {
        return view('login');
    }

    function hasRole($role, $user){
        {
            return $user->role === $role;
        }
    }
            
    function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ],[
            'email.required' => 'Email harus diisi',
            'password.required' => 'Password harus diisi',
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        
        if (Auth::attempt($infologin)) {
            if ($this->hasRole('admin', Auth::user())) {
                return redirect('/admin');
            } elseif ($this->hasRole('user', Auth::user())) {
                return redirect('/');
            } 
        } else {
            return redirect('')->withErrors('Username dan Password tidak cocok')->withInput();
        }
    }

    function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }

    function create(Request $request)
    {
        FacadesSession::flash('email', $request->email);
        FacadesSession::flash('password', $request->password);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required',
            'password' => 'required|min:8'
        ],[
            'name.required' => 'Name harus diisi',
            'email.required' => 'Email harus diisi',
            'email.email' => 'Silahkan masukkan email tidak valid',
            'email.unique' => 'Email sudah terpakai, silahkan masukkan email kembali',
            'phone.required' => 'Phone harus diisi',
            'phone.regex' => '/^\+?[0-9\s\-]{10,25}$/', // Added phone format validation rule
            'password.required' => 'Password harus diisi',
            'password.min' => 'Minimum password 8 karakter',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password)
        ];

        DB::table('users')->insert($data);
        // User::create($data);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            if ($this->hasRole('admin', Auth::user())) {
                return redirect('/admin');
            } elseif ($this->hasRole('user', Auth::user())) {
                return redirect('/');
            } 
        } else {
            return redirect('')->withErrors('Username dan Password tidak cocok')->withInput();
        }
    }
}
