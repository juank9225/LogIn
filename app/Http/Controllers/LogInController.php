<?php

namespace SoftVet\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Session;
use Redirect;


use DB;

class LogInController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('LogIn');
    }

    public function logout()
    {
      Auth::logout();
      return redirect::to('/LogIn');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $credencials = $this->validate(request(),[
        'nick' => 'required|string',
        'password' => 'required|string|min:6'
      ]);
      $name = DB::table('usuarios')->where('nick', $request->nick)->pluck('supersu');

      if (Auth::attempt($credencials)) {
        return redirect::to('/home');

      }
        Session::flash('message',' Error De Autenticacion... ');
        return redirect::to('/LogIn');

    }

}
