<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginRegisterController extends Controller
{
    //
    /*
        Criar uma nova instancia da LoginRegisterController
    */

    public function __construct()
    {
        $this->middleware('guest')->except([
            'logout', 'dashboard'
        ]);
    }

    public function register(){
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:250',
            'email' => 'required|email|max:250|unique:users',
            'password' => 'required|min:8|confirmed'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $credentials = $request->only('email', 'password');
        Auth::attempt($credentials);
        $request->session()->regenerate();
        return redirect()->route('dashboard')->withSuccess('Registro efetuado com sucesso, você esta logado!');
    }


    public function login()
    {
        return view('auth.login');
    }



    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->route('dashboard')->withSuccess('Logado com Sucesso');
        }

        return back()->withErrors([
            'email' => 'As credenciais fornecidas não correspondem aos registros',
        ])->onlyInput('email');
    }


    public function dashboard()
    {
        if(Auth::check())
        {
            return view('auth.dashboard');
        }

        return redirect()->route('login')->withErrors([
            'email' => 'Faça login para acessar esse painel',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')->withSuccess('Deslogado com Sucesso!');;
    }


}
