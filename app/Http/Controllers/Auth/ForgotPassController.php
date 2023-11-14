<?php

namespace App\Http\Controllers\Auth;


use App\Mail\ForgotPass;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ForgotPassController extends Controller
{
    
    public function index()
    {

        return view('auth.forgotPass');
    }

    public function store(Request $request)
    {
        //exemplo para um email fixo
        $sent =  Mail::to('gustavo.rocco.02@gmail.com', 'Gustavo')->send(new ForgotPass([
            'fromEmail' =>$request->input('email')
        ]));

        var_dump('email send', $sent);
    }
}
