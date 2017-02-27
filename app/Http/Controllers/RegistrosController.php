<?php

namespace App\Http\Controllers;

use App\Registro;
use App\User;
use Auth;


use Illuminate\Http\Request;

class RegistrosController extends Controller
{
    public function actualizarperfil(Request $request){

        // dd( request(["name", "apellidos", "email"]) );
        // dd(request()->all());
        $user = User::find(Auth::user()->id);        
        $user->fill($request->all());
        $user->save(); 
        return redirect( route('ver_perfil'));
    }

    public function verperfil(){
      if (Auth::guest())
        {
            echo "error, no esta logueado, redirigir al home";
           return redirect( route('welcome'));
        }
      else{
            return view('auth.perfil');
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $user = User::find($id);

        dd($user);
        //return view('registro.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Create the entry
        // $registro= new Registro;

        // Registro::create(request(['nombre','apellidos','email','password','fecha_nacimiento','pais','estado','ciudad','celular','bio','facebook','twitter','habilidades','ocupacion','foto_perfil','areas','genero']));

		//talla y genero

        dd(request()->all());

        //Return to anypage
        // return redirect('/convocatorias');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store()
    // {
    //     //
    //     $registro= new Registro;

    //     Registro::create(request(['area','turno','user_id','convocatoria_id']));
        
    //     $registro->save();
        
    // }

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
