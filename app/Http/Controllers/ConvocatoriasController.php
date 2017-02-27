<?php

namespace App\Http\Controllers;
use App\Convocatoria;
use App\Registro;

$convocatorias= Convocatoria::all();
// use Illuminate\Http\Request;

class ConvocatoriasController extends Controller
{
    // public static function condicion()
    // {
    // 	return static::where('status', 1)->get(); 
    // } 

    public static function show()
    {
     return view('welcome'); 
    } 

    public function index()
    {
    	$convocatorias= Convocatoria::all();
	    return view('convocatorias.index', compact('convocatorias'));
    }
    public function vista(Convocatoria $convocatoria)
	{
		// $convocatoria= Convocatoria::find($id);
        
		return view('convocatorias.vista', compact('convocatoria'));
    }
    
    public function store()
    {
        // dd(request()->all());
        $registro= new Registro;

        Registro::create(request(['area','turno','user_id','convocatoria_id']));

        echo 'Has aplicado a la convocatoria, redireccionando a inicio';
       
        return redirect()->route('login');        
        
    }

}
