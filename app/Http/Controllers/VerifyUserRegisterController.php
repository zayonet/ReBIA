<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerifyUserRegisterController extends Controller
{
    public function index()
    {   
        $user = Auth::user()->email;

        if(!Auth::user()->confirmed){
            return view('verify-user', compact('user'));
        }else{
             return redirect()->route('home'); 
        }
    }

    public function verify($code)
    {
        $user = \App\User::where('confirmation_code', $code)->first();
        if (!$user) {
           return redirect('/');
        }
        $user->confirmed = true;
        $user->confirmation_code = null;
        $user->save();

        flash('Registro confirmado com sucesso')->success();
        //return  view('confirmation');
        return redirect()->route('home'); 
        //return redirect('dashboard')->with('notification', 'Has confirmado correctamente tu correo!');
    }
    /* public function dashboard()
    {
        return view('user.info');
    }  */
}
