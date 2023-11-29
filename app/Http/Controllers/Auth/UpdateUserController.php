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


    public function update(Request $request)
    {

        
        $user = auth()->user();

        //    dd($request);
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefone' => 'required|string|max:15',
            'datanasc'=> 'required|date',
            'password' => 'required|string|min:8|confirmed',
        ]);
     

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->telefone = $request->input('telefone');
        $user->datanasc = $request->input('datanasc');

        // dd($user);

        if($request->filled('password')){
            $user->password = Hash::make($request->input('password'));
        }

        $user->save();

        dd("teste");

        return redirect()->route('config')->with('success', 'Informações atualizadas com sucesso!');

      
    }
   
}
