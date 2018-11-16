<?php

namespace SoftVet\Http\Controllers;

use Illuminate\Http\Request;
use SoftVet\Usuario;
use Session;
use Redirect;
use SoftVet\Http\Requests\UserCreateRequest;
use SoftVet\Http\Requests\UserUpdateRequest;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $users = Usuario::All();
      return view('usuarioL',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Registro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
      Usuario::create([
        'nombre'=>$request['nombre'],
        'id_rol'=>$request['id_rol'],
        'supersu'=>0,
        'nick'=>$request['nick'],
        'password'=>$request['password']
      ]);
      Session::flash('message','Nuevo Usuario Creado Correctamente... :)');
      return redirect::to('/Usuario');
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $users = Usuario::find($id);
      return view('EditUser',['users'=>$users]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
        $users = Usuario::find($id);
        $users->fill($request->all());
        $users->save();
        Session::flash('message','Datos De Usuario Editados Correctamente....');
        return redirect::to('/Usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Usuario::destroy($id);
        Session::flash('message','Datos De Usuario Eliminado Correctamente....');
        return redirect::to('/Usuario');
    }
}
