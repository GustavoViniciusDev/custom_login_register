<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UpdateUserController extends Controller
{

    public function config()
    {
        return view('auth.account.config');
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required',
            'telefone' => 'required',
            'password' => 'required'
        ]);

        $result = User::find($id);
        $result->nome = $request->get('nome');
        $result->email = $request->get('email');
        $result->telefone = $request->get('telefone');
        $result->password = $request->get('password');
        $result->save();

        return redirect()->route('auth.account.config')->with('success', 'Informações atualizadas');
    }
   
}
