<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Personal;
use Response;


class PersonalController extends Controller
{
    
    private $personal;

    public function __construct(Personal $personal)
    {
		$this->personal = $personal;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
      /*   $user = auth()->user();
        //$user = User::get();
        if(!$user==null)
        {
            return view('welcome');
        }else
        {
            return view('home' , compact('user'));
            //return Auth('api')->user();
        }  */
        return view('home');
    }

    public function get()
    {
        $personal = Personal::with('user')->get();
       /*  $user = auth()->user()->personal;
        $user1 = auth()->user()->with('personal')->get();
        $responseDataDecoded = json_decode($user1);*/
        return response()->json($personal); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
