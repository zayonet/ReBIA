<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Personal;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /* php artisan make:model Post -mc
    This command tells Laravel to generate a Post model for us, the -mc flags indicates that it should also generate migration as well as a controller named PostController. We’ll take a look at these files further in the tutorial. */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(auth()->user()->confirmed){

           /*  $personal = auth()->user()->personalinformation;
            //SE O USUARIO NAO TIVER INFORMACOES PESSOAIS CADASTRADO ELE E REENCAMINHADO PARA A PAGINA FILL-USER-INFO
            if ($personal == null) {
                return view('users.personal-information', compact('personal')); 
            }else {
                return view('home', compact('personal'));
            }  */
            //$user = auth()->user(); 
            //return redirect()->route('home');
            return view('home'); 
        }else{
             return redirect()->route('verication.user'); 
        }

    }
    /* public function profile()
    {
        $info = App\Personal::all();
        return Auth::user()->$info;
    } */
}
