<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Rol;
class UsuarioController extends Controller
{
    //
    public function create(Request $request){

    	
	$usuario = new Usuario();

	$usuario -> codi_usua = $request -> codi_usua;
	$usuario -> nomb_usua = $request -> nomb_usua;
	$usuario -> pass_usua = $request -> pass_usua;
	$usuario -> iden_rol  = $request -> iden_rol;

	$usuario -> save();
	return redirect('/ingresousua');
	}


	public function vista(){
		$rol=Rol::all();	
		return view('agregarusua',compact('rol'));
	}

	public function read(Request $request){

		$usuario =Usuario::all();
		return view('vistausua',['usuarios'=>$usuario]);
	}
}
